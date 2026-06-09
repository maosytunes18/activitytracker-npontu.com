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

        ActivityUpdate::create([
            'activity_id' => $activity->id,
            'user_id' => Auth::id(),
            'status' => $data['status'],
            'remark' => $data['remark'],
        ]);

        $activity->update(['status' => $data['status']]);

        return back()->with('success', 'Activity status updated successfully.');
    }
}
