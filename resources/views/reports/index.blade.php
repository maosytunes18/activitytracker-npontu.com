@extends('layouts.supporttrack')

@section('title', 'SupportTrack | Operational Reports &amp; Accountability')

@section('header_actions')
    <button type="button" class="inline-flex items-center gap-xs rounded-lg bg-gradient-to-r from-primary to-primary-container px-md py-sm font-headline-md text-label-lg text-on-primary-container transition-all active:scale-[0.98] performance-glow" onclick="document.getElementById('report-form')?.submit();">
        <span class="material-symbols-outlined">description</span>
        Generate Daily Summary
    </button>
@endsection

@section('content')
<div class="mb-lg flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
    <div>
        <h2 class="font-display-md text-display-md text-on-surface mb-xs">Operational Reports</h2>
        <p class="font-body-lg text-on-surface-variant">Specialist accountability and system-wide performance analytics.</p>
    </div>
</div>

<form id="report-form" method="GET" action="{{ route('reports.index') }}" class="glass-card mb-lg grid gap-gutter rounded-xl p-md lg:grid-cols-3">
    <div class="space-y-2">
        <label class="block text-sm font-semibold text-on-surface-variant">Start date</label>
        <input type="date" name="start_date" value="{{ $data['start_date'] ?? '' }}" class="w-full rounded-2xl border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface outline-none focus:border-transparent focus:ring-2 focus:ring-primary">
    </div>
    <div class="space-y-2">
        <label class="block text-sm font-semibold text-on-surface-variant">End date</label>
        <input type="date" name="end_date" value="{{ $data['end_date'] ?? '' }}" class="w-full rounded-2xl border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface outline-none focus:border-transparent focus:ring-2 focus:ring-primary">
    </div>
    <div class="flex items-end justify-end gap-sm">
        <button type="submit" class="inline-flex items-center gap-xs rounded-lg bg-primary px-md py-sm font-bold text-on-primary transition-all hover:bg-primary-container">Apply range</button>
        <a href="{{ route('reports.export.csv', request()->query()) }}" class="inline-flex items-center gap-xs rounded-lg border border-outline-variant px-md py-sm text-on-surface-variant transition-all hover:text-primary">Export CSV</a>
    </div>
</form>

<div class="grid grid-cols-12 gap-gutter">
    <div class="col-span-12 lg:col-span-8 glass-card rounded-xl p-md">
        <div class="mb-md flex items-start justify-between">
            <div>
                <p class="font-label-lg uppercase tracking-widest text-on-surface-variant">Resolution Trends</p>
                <h3 class="font-headline-lg text-headline-lg text-on-surface">Weekly Throughput</h3>
            </div>
            <div class="flex items-center gap-sm">
                <span class="flex items-center gap-xs text-label-md text-secondary-fixed-dim"><span class="h-2 w-2 rounded-full bg-secondary"></span> Resolved</span>
                <span class="flex items-center gap-xs text-label-md text-on-surface-variant"><span class="h-2 w-2 rounded-full bg-outline"></span> Incoming</span>
            </div>
        </div>
        <div class="relative flex h-[240px] w-full items-end gap-md">
            <div class="absolute inset-0 border-b border-l border-outline-variant/30"></div>
            <div class="flex h-full flex-1 items-end justify-between px-md relative">
                <div class="group relative flex flex-1 flex-col items-center">
                    <div class="relative h-1/2 w-full rounded-t-sm border-t-2 border-secondary bg-gradient-to-t from-secondary/10 to-secondary/30">
                        <div class="absolute -top-1 left-1/2 h-3 w-3 -translate-x-1/2 rounded-full border-2 border-surface bg-secondary shadow-[0_0_10px_rgba(0,238,112,0.5)]"></div>
                    </div>
                    <span class="mt-base text-label-md text-on-surface-variant">Mon</span>
                </div>
                <div class="group relative flex flex-1 flex-col items-center">
                    <div class="relative h-[70%] w-full rounded-t-sm border-t-2 border-secondary bg-gradient-to-t from-secondary/10 to-secondary/30">
                        <div class="absolute -top-1 left-1/2 h-3 w-3 -translate-x-1/2 rounded-full border-2 border-surface bg-secondary"></div>
                    </div>
                    <span class="mt-base text-label-md text-on-surface-variant">Tue</span>
                </div>
                <div class="group relative flex flex-1 flex-col items-center">
                    <div class="relative h-[65%] w-full rounded-t-sm border-t-2 border-secondary bg-gradient-to-t from-secondary/10 to-secondary/30">
                        <div class="absolute -top-1 left-1/2 h-3 w-3 -translate-x-1/2 rounded-full border-2 border-surface bg-secondary shadow-[0_0_10px_rgba(0,238,112,0.5)]"></div>
                    </div>
                    <span class="mt-base text-label-md text-on-surface-variant">Wed</span>
                </div>
                <div class="group relative flex flex-1 flex-col items-center">
                    <div class="relative h-[85%] w-full rounded-t-sm border-t-2 border-secondary bg-gradient-to-t from-secondary/10 to-secondary/30">
                        <div class="absolute -top-1 left-1/2 h-3 w-3 -translate-x-1/2 rounded-full border-2 border-surface bg-secondary"></div>
                    </div>
                    <span class="mt-base text-label-md text-on-surface-variant">Thu</span>
                </div>
                <div class="group relative flex flex-1 flex-col items-center">
                    <div class="relative h-[95%] w-full rounded-t-sm border-t-2 border-secondary bg-gradient-to-t from-secondary/10 to-secondary/30">
                        <div class="absolute -top-1 left-1/2 h-3 w-3 -translate-x-1/2 rounded-full border-2 border-surface bg-secondary shadow-[0_0_10px_rgba(0,238,112,0.5)]"></div>
                    </div>
                    <span class="mt-base text-label-md text-on-surface-variant">Fri</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-span-12 flex flex-col gap-gutter lg:col-span-4">
        <div class="glass-card rounded-xl border-l-4 border-secondary p-md">
            <p class="mb-xs font-label-lg text-on-surface-variant">Efficiency Rating</p>
            <div class="flex items-baseline gap-base">
                <span class="font-display-lg text-display-lg text-on-surface">94.2%</span>
                <span class="font-headline-md text-secondary">+2.1%</span>
            </div>
            <p class="mt-xs text-label-md text-on-surface-variant">Above benchmark this month</p>
        </div>
        <div class="glass-card rounded-xl border-l-4 border-primary p-md">
            <p class="mb-xs font-label-lg text-on-surface-variant">Avg. First Response</p>
            <div class="flex items-baseline gap-base">
                <span class="font-display-lg text-display-lg text-on-surface">14m</span>
                <span class="font-headline-md text-primary">-3m</span>
            </div>
            <p class="mt-xs text-label-md text-on-surface-variant">Reduced wait time by 18%</p>
        </div>
    </div>
</div>

<div class="mt-lg">
    <div class="glass-card overflow-hidden rounded-xl">
        <div class="flex items-center justify-between border-b border-outline-variant bg-surface-container-low p-md">
            <h3 class="font-headline-md text-headline-md text-on-surface">Specialist Daily Accountability</h3>
            <div class="flex items-center gap-base">
                <span class="text-label-md text-on-surface-variant">Showing: Last 24 Hours</span>
                <button class="material-symbols-outlined text-on-surface-variant transition-colors hover:text-primary">filter_list</button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-surface-container text-label-md font-bold uppercase tracking-wider text-on-surface-variant">
                        <th class="px-md py-base">Specialist</th>
                        <th class="px-md py-base">Tickets Resolved</th>
                        <th class="px-md py-base">Avg Feedback</th>
                        <th class="px-md py-base">SLA Adherence</th>
                        <th class="px-md py-base">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant">
                    @forelse($updates->getCollection()->take(4) as $update)
                        <tr class="transition-colors hover:bg-surface-bright/50">
                            <td class="px-md py-md font-medium text-on-surface">{{ $update->user->name ?? 'Support User' }}</td>
                            <td class="px-md py-md font-data-display text-label-lg">{{ $loop->iteration * 5 + 8 }}</td>
                            <td class="px-md py-md">
                                <div class="flex gap-xs text-secondary">
                                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[16px]">star</span>
                                </div>
                            </td>
                            <td class="px-md py-md">
                                <span class="rounded-full bg-secondary/10 px-base py-xs text-label-md text-secondary">98% Match</span>
                            </td>
                            <td class="px-md py-md">
                                <span class="flex items-center gap-xs text-label-md text-secondary-fixed-dim">
                                    <span class="h-1.5 w-1.5 rounded-full bg-secondary active-glow"></span>
                                    Performing
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-md py-md text-center text-on-surface-variant">No report data found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-lg">
    <div class="mb-md flex items-center justify-between">
        <div class="flex items-center gap-sm">
            <span class="material-symbols-outlined text-[32px] text-primary">groups</span>
            <h3 class="font-headline-lg text-headline-lg text-on-surface">Team Audit &amp; Load Balancing</h3>
        </div>
        <div class="flex rounded-lg bg-surface-container p-xs">
            <button class="rounded bg-surface-bright px-md py-xs text-label-md font-bold text-primary">Live View</button>
            <button class="rounded px-md py-xs text-label-md text-on-surface-variant transition-colors hover:text-on-surface">Shift History</button>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-gutter md:grid-cols-2 lg:grid-cols-4">
        @forelse($specialists as $specialist)
            <div class="glass-card group rounded-xl p-md transition-all hover:border-primary/40">
                <div class="mb-md flex items-start justify-between">
                    <div class="relative">
                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-surface-container-highest text-lg font-bold text-primary">
                            {{ strtoupper(substr($specialist['name'], 0, 1)) }}
                        </div>
                        <span class="absolute -bottom-1 -right-1 h-4 w-4 rounded-full border-2 border-surface-container {{ $specialist['tone'] === 'secondary' ? 'bg-secondary' : ($specialist['tone'] === 'primary' ? 'bg-primary-container' : 'bg-tertiary-container') }}"></span>
                    </div>
                    <div class="text-right">
                        <span class="block font-data-display text-data-display text-on-surface">{{ $specialist['tickets_resolved'] }}</span>
                        <span class="block text-label-md text-on-surface-variant">Active Tickets</span>
                    </div>
                </div>
                <h4 class="mb-xs font-headline-md text-headline-md text-on-surface">{{ $specialist['name'] }}</h4>
                <div class="mb-base h-1 w-full overflow-hidden rounded-full bg-surface-container-highest">
                    <div class="h-full {{ $specialist['tone'] === 'secondary' ? 'bg-secondary' : ($specialist['tone'] === 'primary' ? 'bg-primary' : 'bg-tertiary') }}" style="width: {{ min(100, max(10, $specialist['match'])) }}%;"></div>
                </div>
                <div class="flex justify-between text-label-md">
                    <span class="{{ $specialist['tone'] === 'secondary' ? 'text-secondary' : ($specialist['tone'] === 'primary' ? 'text-primary' : 'text-tertiary') }}">Capacity: {{ $specialist['department'] }}</span>
                    <span class="text-on-surface-variant">Avg Res: {{ $specialist['tickets_resolved'] > 40 ? '5m' : ($specialist['tickets_resolved'] > 25 ? '8m' : '11m') }}</span>
                </div>
            </div>
        @empty
            <div class="glass-card rounded-xl p-md text-sm text-on-surface-variant md:col-span-2 lg:col-span-4">
                No specialist data available.
            </div>
        @endforelse
    </div>
</div>
@endsection
