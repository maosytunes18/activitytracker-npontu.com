<?php

namespace App\Notifications;

use App\Models\Activity;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class ActivityStatusChanged extends Notification
{
    use Queueable;

    /**
     * @param  Activity  $activity
     * @param  int|null  $updatedByUserId
     */
    public function __construct(
        public Activity $activity,
        public ?int $updatedByUserId = null,
        public ?string $remark = null,
    ) {
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase(object $notifiable): array
    {
        $actor = $this->updatedByUserId;

        return [
            'type' => 'activity.status_changed',
            'title' => 'Activity status updated',
            'body' => sprintf(
                '“%s” was marked as %s%s.',
                $this->activity->title,
                ucfirst($this->activity->status),
                $this->remark ? ' — ' . $this->remark : ''
            ),
            'activity_id' => $this->activity->id,
            'status' => $this->activity->status,
            'actor_user_id' => $actor,
            'remark' => $this->remark,
        ];
    }
}

