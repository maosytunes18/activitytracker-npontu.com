<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityUpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function store(Request $request, Activity $activity)
    {

        $data = $request->validate([
            'status' => ['required', 'in:pending,done'],
            'remark' => ['required', 'string', 'max:1000'],
        ]);

        $activityUpdate = ActivityUpdate::create([
            'activity_id' => $activity->id,
            'user_id' => Auth::id(),
            'status' => $data['status'],
            'remark' => $data['remark'],
        ]);

        $activity->update(['status' => $data['status']]);

        // Global status update notifications (stored in DB)
        // Send to all users except the actor.
        if ($data['status'] === 'done') {
            $actorId = Auth::id();
            $activityFresh = $activity->fresh(['createdBy', 'updates']);

            $recipients = \App\Models\User::query()
                ->where('id', '!=', $actorId)
                ->get();

            // Queue the notifications so the request isn't blocked.
            foreach ($recipients as $recipient) {
                $recipient->notify((new \App\Notifications\ActivityStatusChanged(
                    activity: $activityFresh,
                    updatedByUserId: $actorId,
                    remark: $data['remark'],
                ))->onQueue('notifications'));
            }
        }


        return back()->with('success', 'Activity status updated successfully.');
    }

}
