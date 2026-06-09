@extends('layouts.supporttrack')

@section('title', 'SupportTrack | Print Report')

@section('content')
    <style>
        @media print {
            aside, header { display: none !important; }
            main { margin-left: 0 !important; padding: 0 !important; }
            body { background: white !important; color: #111827 !important; }
            .glass-card { background: #ffffff !important; box-shadow: none !important; border-color: #d1d5db !important; }
            table { color: #111827 !important; }
        }
    </style>

    <div class="glass-card rounded-3xl p-md text-on-surface">
        <div class="mb-lg">
            <h1 class="font-display-md text-display-md text-on-surface">Activity Update Report</h1>
            <p class="text-on-surface-variant font-body-lg mt-2">{{ $data['start_date'] ?? 'Beginning' }} to {{ $data['end_date'] ?? 'Today' }}</p>
        </div>

        <div class="overflow-x-auto bg-surface-container-highest rounded-3xl border border-outline-variant">
            <table class="min-w-full text-left text-sm text-on-surface-variant">
                <thead class="border-b border-outline-variant/50 bg-surface-container-low text-on-surface-variant">
                    <tr>
                        <th class="px-md py-sm font-semibold">Date</th>
                        <th class="px-md py-sm font-semibold">Activity</th>
                        <th class="px-md py-sm font-semibold">User</th>
                        <th class="px-md py-sm font-semibold">Status</th>
                        <th class="px-md py-sm font-semibold">Remark</th>
                        <th class="px-md py-sm font-semibold">Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($updates as $update)
                        <tr class="border-b border-outline-variant/30 hover:bg-surface-bright/40 transition-colors">
                            <td class="px-md py-sm">{{ $update->created_at->format('d/m/Y') }}</td>
                            <td class="px-md py-sm">{{ $update->activity->title }}</td>
                            <td class="px-md py-sm">{{ $update->user->name }}</td>
                            <td class="px-md py-sm">{{ ucfirst($update->status) }}</td>
                            <td class="px-md py-sm">{{ $update->remark }}</td>
                            <td class="px-md py-sm">{{ $update->created_at->format('H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
