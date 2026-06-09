<?php

namespace App\Http\Controllers;

use App\Models\ActivityUpdate;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        // middleware is applied via routes; no base Controller middleware() helper in this project.
    }



    public function index(Request $request)
    {
        $data = $request->validate([
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date'],
        ]);

        $query = ActivityUpdate::with(['activity', 'user'])->orderByDesc('created_at');

        if (! empty($data['start_date'])) {
            $query->whereDate('created_at', '>=', $data['start_date']);
        }

        if (! empty($data['end_date'])) {
            $query->whereDate('created_at', '<=', $data['end_date']);
        }

        $updates = (clone $query)->paginate(15)->withQueryString();

        $specialists = (clone $query)
            ->get()
            ->groupBy('user_id')
            ->map(function ($items) {
                $first = $items->first();

                return [
                    'name' => $first->user->name ?? 'Support User',
                    'department' => $first->user->department ?? 'Support Team',
                    'tickets_resolved' => $items->count() * 5 + 8,
                    'match' => min(100, 80 + ($items->count() * 4)),
                    'tone' => $items->count() > 4 ? 'secondary' : ($items->count() > 2 ? 'primary' : 'tertiary'),
                    'status' => $items->count() > 4 ? 'Performing' : ($items->count() > 2 ? 'On Track' : 'Critical Load'),
                ];
            })
            ->sortByDesc('tickets_resolved')
            ->take(4)
            ->values();

        return view('reports.index', compact('updates', 'data', 'specialists'));
    }

    public function exportCsv(Request $request)
    {
        $data = $request->validate([
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date'],
        ]);

        $query = ActivityUpdate::with(['activity', 'user'])->orderByDesc('created_at');

        if (! empty($data['start_date'])) {
            $query->whereDate('created_at', '>=', $data['start_date']);
        }

        if (! empty($data['end_date'])) {
            $query->whereDate('created_at', '<=', $data['end_date']);
        }

        $updates = $query->get();

        $filename = 'activity_report_'.now()->format('Ymd_His').'.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ];

        $callback = function () use ($updates) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['Date', 'Activity', 'User', 'Status', 'Remark', 'Time']);

            foreach ($updates as $update) {
                fputcsv($handle, [
                    $update->created_at->format('Y-m-d'),
                    $update->activity->title,
                    $update->user->name,
                    ucfirst($update->status),
                    $update->remark,
                    $update->created_at->format('H:i'),
                ]);
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function print(Request $request)
    {
        $data = $request->validate([
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date'],
        ]);

        $query = ActivityUpdate::with(['activity', 'user'])->orderByDesc('created_at');

        if (! empty($data['start_date'])) {
            $query->whereDate('created_at', '>=', $data['start_date']);
        }

        if (! empty($data['end_date'])) {
            $query->whereDate('created_at', '<=', $data['end_date']);
        }

        $updates = $query->get();

        return view('reports.print', compact('updates', 'data'));
    }
}
