@extends('layouts.supporttrack')

@section('title', 'SupportTrack | Ticket Management')

@section('content')
<div class="space-y-8">
    <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <h2 class="font-display-md text-display-md text-on-surface tracking-tight">Ticket Management</h2>
            <p class="font-body-lg text-on-surface-variant">Handle incident queues with fast triage and streamlined status updates.</p>
        </div>
        <div class="flex flex-wrap items-center gap-sm">
            <a href="{{ route('activities.create') }}" class="flex items-center gap-xs rounded-lg bg-primary-container px-md py-sm font-label-lg text-on-primary-container transition-all hover:brightness-110">
                <span class="material-symbols-outlined">add</span>
                New Ticket
            </a>
            <div class="flex items-center gap-3">
                <select class="bg-surface-container border border-outline-variant rounded-lg px-4 py-2 text-label-lg font-label-lg outline-none focus:ring-1 focus:ring-primary cursor-pointer">
                    <option>Status: All</option>
                    <option>Open</option>
                    <option>Pending</option>
                    <option>Resolved</option>
                </select>
                <select class="bg-surface-container border border-outline-variant rounded-lg px-4 py-2 text-label-lg font-label-lg outline-none focus:ring-1 focus:ring-primary cursor-pointer">
                    <option>Priority: All</option>
                    <option>Critical</option>
                    <option>High</option>
                    <option>Normal</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Bento Grid Table Layout -->
    <div class="bg-surface-container rounded-xl overflow-hidden border border-outline-variant">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-high text-on-surface-variant border-b border-outline-variant">
                    <th class="px-6 py-4 font-label-lg text-label-lg">ID</th>
                    <th class="px-6 py-4 font-label-lg text-label-lg">Ticket Subject</th>
                    <th class="px-6 py-4 font-label-lg text-label-lg">Client</th>
                    <th class="px-6 py-4 font-label-lg text-label-lg">Specialist</th>
                    <th class="px-6 py-4 font-label-lg text-label-lg text-right">Elapsed</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
                @forelse($activities as $activity)
                    <tr class="group hover:bg-surface-container-highest cursor-pointer transition-colors duration-150" onclick="window.location='{{ route('activities.show', $activity) }}'">
                        <td class="px-6 py-5 font-label-lg text-primary">#{{ str_pad($activity->id, 4, '0', STR_PAD_LEFT) }}</td>
                        <td class="px-6 py-5">
                            <div class="flex flex-col">
                                <span class="font-headline-md text-body-lg text-on-surface">{{ $activity->title }}</span>
                                @if($activity->description)
                                    <div class="mt-1 text-xs text-on-surface-variant line-clamp-1">{{ $activity->description }}</div>
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-5 text-on-surface-variant font-body-md">{{ $activity->createdBy->department ?? 'Client' }}</td>
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center text-[10px] font-bold text-primary">
                                    {{ strtoupper(substr($activity->createdBy->name ?? 'SU', 0, 1)) }}
                                </div>
                                <span class="font-label-lg text-on-surface">{{ $activity->createdBy->name ?? 'System' }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-5 text-right">
                            <span class="text-error font-data-display text-label-lg">{{ optional($activity->activity_date)->diffForHumans() }}</span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-on-surface-variant">No tickets found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-between border-t border-outline-variant bg-surface-container/50 px-md py-md">
        <p class="text-label-md text-on-surface-variant">Showing {{ $activities->count() }} of {{ $activities->total() }} entries</p>
        <div class="flex items-center gap-xs">{!! $activities->links('pagination::tailwind') !!}</div>
    </div>
</div>
@endsection

