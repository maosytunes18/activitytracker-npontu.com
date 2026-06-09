<?php

namespace App\Livewire\Activities;

use App\Models\Activity;
use App\Models\ActivityUpdate;
use App\Notifications\ActivityStatusChanged;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;


class ManageActivities extends Component
{
    public $message = '';
    public $title = '';
    public $description = '';
    public $activity_date = '';
    public $status = 'pending';
    public $editId = null;
    public $search = '';
    public $statusFilter = 'all';


    protected $queryString = [
        'search' => ['except' => ''],
        'statusFilter' => ['except' => 'all'],
    ];

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'activity_date' => 'required|date',
        'status' => 'required|in:pending,done',
    ];

    public function mount()
    {
        $this->resetForm();
    }

    public function save()
    {
        if ($this->editId) {
            return $this->update();
        }

        $this->validate();

        $activity = Activity::create([
            'title' => $this->title,
            'description' => $this->description,
            'activity_date' => $this->activity_date,
            'status' => $this->status,
            'created_by' => Auth::id(),
        ]);

        ActivityUpdate::create([
            'activity_id' => $activity->id,
            'user_id' => Auth::id(),
            'status' => $this->status,
            'remark' => 'Activity created',
        ]);

        $actorId = Auth::id();
        $creatorId = $activity->created_by;
        $recipients = collect([$creatorId, $actorId])->unique()->filter();

        foreach ($recipients as $userId) {
            $user = $activity->createdBy()->where('id', $userId)->first();
            if (!$user) {
                $user = $userId ? \App\Models\User::find($userId) : null;
            }
            if (!$user) {
                continue;
            }

            $user->notify(new ActivityStatusChanged($activity->fresh(), $actorId, 'Activity created'));
        }

        $this->message = 'Activity saved successfully.';

        $this->resetForm();
    }


    public function edit($id)
    {
        $activity = Activity::findOrFail($id);

        $this->editId = $activity->id;
        $this->title = $activity->title;
        $this->description = $activity->description;
        $this->activity_date = $activity->activity_date ? $activity->activity_date->format('Y-m-d') : '';
        $this->status = $activity->status;
        $this->message = 'Editing activity: ' . $activity->title;
    }

    public function update()
    {
        $this->validate();

        $activity = Activity::findOrFail($this->editId);
        $oldStatus = $activity->status;

        $activity->update([
            'title' => $this->title,
            'description' => $this->description,
            'activity_date' => $this->activity_date,
            'status' => $this->status,
        ]);

        // Create audit trail when an activity is updated
        $remark = ($oldStatus !== $this->status)
            ? 'Activity status updated'
            : 'Activity updated';

        ActivityUpdate::create([
            'activity_id' => $activity->id,
            'user_id' => Auth::id(),
            'status' => $this->status,
            'remark' => $remark,
        ]);

        $actorId = Auth::id();
        $creatorId = $activity->created_by;
        $recipients = collect([$creatorId, $actorId])->unique()->filter();

        foreach ($recipients as $userId) {
            $user = $activity->createdBy()->where('id', $userId)->first();
            if (!$user) {
                // If actor isn't creator, fetch actor directly.
                $user = $userId ? \App\Models\User::find($userId) : null;
            }
            if (!$user) {
                continue;
            }

            $user->notify(new ActivityStatusChanged($activity->fresh(), $actorId, $remark));
        }

        $this->message = 'Activity updated successfully.';

        $this->resetForm();
    }


    public function delete($id)
    {
        $activity = Activity::with('createdBy')->findOrFail($id);
        $actorId = Auth::id();

        $creatorId = $activity->created_by;
        $recipients = collect([$creatorId, $actorId])->unique()->filter();

        $activity->delete();

        foreach ($recipients as $userId) {
            $user = $activity->createdBy()->where('id', $userId)->first();
            if (!$user) {
                $user = $userId ? \App\Models\User::find($userId) : null;
            }
            if (!$user) {
                continue;
            }

            $deletedPayload = new Activity([
                'id' => $id,
                'title' => $activity->title,
                'status' => 'pending',
                'created_by' => $creatorId,
            ]);

            $user->notify(new ActivityStatusChanged($deletedPayload, $actorId, 'Activity deleted'));
        }

        if ($this->editId === $id) {
            $this->resetForm();
        }

        $this->message = 'Activity deleted successfully.';
    }


    public function resetForm()
    {
        $this->title = '';
        $this->description = '';
        $this->activity_date = '';
        $this->status = 'pending';
        $this->editId = null;
    }

    public function render()
    {
        $query = Activity::query();

        if ($this->statusFilter !== 'all') {
            $query->where('status', $this->statusFilter);
        }

        if ($this->search) {
            $query->where(function ($query) {
                $query->where('title', 'like', "%{$this->search}%")
                    ->orWhere('description', 'like', "%{$this->search}%");
            });
        }

        return view('livewire.activities.manage-activities', [
            'activities' => $query->orderByDesc('activity_date')->get(),
            'allCount' => Activity::count(),
            'pendingCount' => Activity::where('status', 'pending')->count(),
            'doneCount' => Activity::where('status', 'done')->count(),
        ]);
    }
}
