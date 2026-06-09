<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    

    public function index(Request $request)
    {
        $query = Activity::with(['createdBy', 'updates.user'])->orderByDesc('activity_date');

        if ($request->filled('search')) {
            $query->where('title', 'like', '%'.$request->search.'%')
                ->orWhere('description', 'like', '%'.$request->search.'%');
        }

        if (in_array($request->status, ['pending', 'done'], true)) {
            $query->where('status', $request->status);
        }

        $activities = $query->paginate(12)->withQueryString();

        $totalActions = Activity::count();
        $pending = Activity::where('status', 'pending')->count();
        $done = Activity::where('status', 'done')->count();
        $todayActions = ActivityUpdate::whereDate('created_at', now())->count();

        return view('activities.index', compact('activities', 'totalActions', 'pending', 'done', 'todayActions'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'activity_date' => ['required', 'date'],
            'status' => ['required', 'in:pending,done'],
        ]);

        $activity = Activity::create([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'activity_date' => $data['activity_date'],
            'status' => $data['status'],
            'created_by' => Auth::id(),
        ]);

        ActivityUpdate::create([
            'activity_id' => $activity->id,
            'user_id' => Auth::id(),
            'status' => $data['status'],
            'remark' => 'Activity created',
        ]);

        return redirect()->route('activities.index')->with('success', 'Activity created successfully.');
    }

    public function show(Activity $activity)
    {
        $activity->load(['createdBy', 'updates.user']);

        return view('activities.show', compact('activity'));
    }

    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    public function update(Request $request, Activity $activity)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'activity_date' => ['required', 'date'],
            'status' => ['required', 'in:pending,done'],
        ]);

        $activity->update([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'activity_date' => $data['activity_date'],
            'status' => $data['status'],
        ]);

        return redirect()->route('activities.index')->with('success', 'Activity updated successfully.');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Activity deleted successfully.');
    }
}
