<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityUpdate;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $today = now();

        $summary = [
            'total' => Activity::count(),
            'done' => Activity::where('status', 'done')->count(),
            'pending' => Activity::where('status', 'pending')->count(),
            'today' => Activity::whereDate('activity_date', $today)->count(),
        ];

        $updates = ActivityUpdate::with(['activity.createdBy', 'user'])
            ->latest()
            ->take(8)
            ->get();

        $specialists = User::query()
            ->withCount('activityUpdates')
            ->orderByDesc('activity_updates_count')
            ->take(4)
            ->get()
            ->values()
            ->map(function (User $user, int $index) {
                $capacity = match ($index) {
                    0 => 'High',
                    1 => 'Optimal',
                    2 => 'Resting',
                    default => 'Peak',
                };

                $avgResponse = match ($index) {
                    0 => '8m',
                    1 => '11m',
                    2 => '2h',
                    default => '5m',
                };

                $status = match ($index) {
                    0, 1 => 'Performing',
                    2 => 'Resting',
                    default => 'Critical Load',
                };

                $tone = match ($index) {
                    0, 1 => 'secondary',
                    2 => 'outline',
                    default => 'tertiary',
                };

                return [
                    'name' => $user->name,
                    'department' => $user->department ?? 'Support Team',
                    'activeTickets' => $user->activity_updates_count,
                    'ticketsResolved' => $user->activity_updates_count * 3 + 8,
                    'slaMatch' => min(100, 82 + ($index * 4)),
                    'capacity' => $capacity,
                    'avgResponse' => $avgResponse,
                    'status' => $status,
                    'tone' => $tone,
                ];
            });

        return view('dashboard', compact('summary', 'updates', 'specialists'));
    }
}
