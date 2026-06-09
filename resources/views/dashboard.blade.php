@extends('layouts.supporttrack')

@section('title', 'SupportTrack | Specialist Login')

@section('content')
<div class="space-y-8">
    <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <h2 class="font-display-md text-display-md text-on-surface tracking-tight">Performance Overview</h2>
            <p class="font-body-lg text-on-surface-variant">Real-time metrics for global support operations.</p>
        </div>
        <div class="flex flex-wrap items-center gap-sm">
            <button class="flex items-center gap-xs rounded-lg border border-outline-variant px-md py-sm font-label-lg text-on-surface-variant transition-all hover:bg-surface-bright">
                <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                Last 24 Hours
            </button>
            <a href="{{ route('reports.export.csv', request()->query()) }}" class="flex items-center gap-xs rounded-lg bg-surface-container-highest px-md py-sm font-label-lg text-primary transition-all hover:bg-primary/10">
                <span class="material-symbols-outlined text-[18px]">file_download</span>
                Export
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-gutter lg:grid-cols-4">
        <div class="glass-card performance-glow flex flex-col justify-between rounded-xl p-md transition-transform hover:scale-[1.02]">
            <div class="mb-sm flex items-start justify-between">
                <span class="material-symbols-outlined rounded-lg bg-primary/10 p-2 text-primary">drafts</span>
                <span class="flex items-center gap-xs text-label-md text-error">
                    <span class="material-symbols-outlined text-sm">trending_up</span> 12%
                </span>
            </div>
            <div>
                <p class="font-label-lg text-on-surface-variant">Open Tickets</p>
                <h3 class="font-data-display text-display-md text-on-surface">{{ $summary['total'] }}</h3>
            </div>
        </div>

        <div class="glass-card performance-glow flex flex-col justify-between rounded-xl p-md transition-transform hover:scale-[1.02]">
            <div class="mb-sm flex items-start justify-between">
                <span class="material-symbols-outlined rounded-lg bg-secondary/10 p-2 text-secondary">timer</span>
                <span class="flex items-center gap-xs text-label-md text-secondary">
                    <span class="material-symbols-outlined text-sm">trending_down</span> 4m
                </span>
            </div>
            <div>
                <p class="font-label-lg text-on-surface-variant">Avg Response</p>
                <h3 class="font-data-display text-display-md text-on-surface">14.2m</h3>
            </div>
        </div>

        <div class="glass-card performance-glow flex flex-col justify-between rounded-xl p-md transition-transform hover:scale-[1.02]">
            <div class="mb-sm flex items-start justify-between">
                <span class="material-symbols-outlined rounded-lg bg-tertiary/10 p-2 text-tertiary">task_alt</span>
                <span class="flex items-center gap-xs text-label-md text-secondary">
                    <span class="material-symbols-outlined text-sm">trending_up</span>
                    {{ $summary['total'] ? round(($summary['done'] / $summary['total']) * 100, 1) : 0 }}%
                </span>
            </div>
            <div>
                <p class="font-label-lg text-on-surface-variant">Resolution Rate</p>
                <h3 class="font-data-display text-display-md text-on-surface">{{ $summary['total'] ? round(($summary['done'] / $summary['total']) * 100, 1) : 0 }}%</h3>
            </div>
        </div>

        <div class="glass-card performance-glow flex flex-col justify-between rounded-xl p-md transition-transform hover:scale-[1.02]">
            <div class="mb-sm flex items-start justify-between">
                <span class="material-symbols-outlined rounded-lg bg-primary-container/10 p-2 text-primary-container">pending_actions</span>
                <span class="text-label-md text-on-surface-variant">Stable</span>
            </div>
            <div>
                <p class="font-label-lg text-on-surface-variant">Pending Tasks</p>
                <h3 class="font-data-display text-display-md text-on-surface">{{ $summary['pending'] }}</h3>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-gutter lg:grid-cols-12">
        <div class="space-y-gutter lg:col-span-8">
            <div class="glass-card rounded-xl p-md">
                <div class="mb-md flex items-center justify-between">
                    <h4 class="font-headline-md text-headline-md">Ticket Volume by Application</h4>
                    <div class="flex flex-wrap gap-base">
                        <span class="flex items-center gap-xs text-label-md text-primary"><span class="h-2 w-2 rounded-full bg-primary"></span> Mobile</span>
                        <span class="flex items-center gap-xs text-label-md text-secondary"><span class="h-2 w-2 rounded-full bg-secondary"></span> Desktop</span>
                    </div>
                </div>
                <div class="flex h-[320px] items-end justify-between gap-base border-b border-outline-variant/30 px-base pb-base">
                    <div class="group flex flex-1 flex-col items-center">
                        <div class="relative h-[40%] w-full max-w-[40px] rounded-t-sm bg-primary/20 transition-all group-hover:bg-primary/40">
                            <div class="absolute bottom-0 w-full rounded-t-sm bg-primary" style="height: 70%;"></div>
                        </div>
                        <span class="mt-2 text-[10px] font-bold uppercase text-on-surface-variant">CRM</span>
                    </div>
                    <div class="group flex flex-1 flex-col items-center">
                        <div class="relative h-[85%] w-full max-w-[40px] rounded-t-sm bg-primary/20 transition-all group-hover:bg-primary/40">
                            <div class="absolute bottom-0 w-full rounded-t-sm bg-primary" style="height: 85%;"></div>
                        </div>
                        <span class="mt-2 text-[10px] font-bold uppercase text-on-surface-variant">ERP</span>
                    </div>
                    <div class="group flex flex-1 flex-col items-center">
                        <div class="relative h-[60%] w-full max-w-[40px] rounded-t-sm bg-primary/20 transition-all group-hover:bg-primary/40">
                            <div class="absolute bottom-0 w-full rounded-t-sm bg-primary" style="height: 40%;"></div>
                        </div>
                        <span class="mt-2 text-[10px] font-bold uppercase text-on-surface-variant">Core</span>
                    </div>
                    <div class="group flex flex-1 flex-col items-center">
                        <div class="relative h-[30%] w-full max-w-[40px] rounded-t-sm bg-primary/20 transition-all group-hover:bg-primary/40">
                            <div class="absolute bottom-0 w-full rounded-t-sm bg-primary" style="height: 90%;"></div>
                        </div>
                        <span class="mt-2 text-[10px] font-bold uppercase text-on-surface-variant">Cloud</span>
                    </div>
                    <div class="group flex flex-1 flex-col items-center">
                        <div class="relative h-[95%] w-full max-w-[40px] rounded-t-sm bg-primary/20 transition-all group-hover:bg-primary/40">
                            <div class="absolute bottom-0 w-full rounded-t-sm bg-primary" style="height: 60%;"></div>
                        </div>
                        <span class="mt-2 text-[10px] font-bold uppercase text-on-surface-variant">API</span>
                    </div>
                    <div class="group flex flex-1 flex-col items-center">
                        <div class="relative h-[70%] w-full max-w-[40px] rounded-t-sm bg-primary/20 transition-all group-hover:bg-primary/40">
                            <div class="absolute bottom-0 w-full rounded-t-sm bg-primary" style="height: 75%;"></div>
                        </div>
                        <span class="mt-2 text-[10px] font-bold uppercase text-on-surface-variant">Web</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-gutter md:grid-cols-2">
                <a href="{{ route('activities.create') }}" class="group flex items-center gap-md rounded-xl border-l-4 border-l-primary glass-card p-md transition-all hover:bg-primary/10">
                    <span class="material-symbols-outlined text-display-md text-primary">add_circle</span>
                    <div class="text-left">
                        <p class="font-headline-md">Create New Ticket</p>
                        <p class="text-sm text-on-surface-variant">Initialize a priority support case</p>
                    </div>
                </a>
                <a href="{{ route('reports.index') }}" class="group flex items-center gap-md rounded-xl border-l-4 border-l-secondary glass-card p-md transition-all hover:bg-secondary/10">
                    <span class="material-symbols-outlined text-display-md text-secondary">analytics</span>
                    <div class="text-left">
                        <p class="font-headline-md">View Reports</p>
                        <p class="text-sm text-on-surface-variant">Analyze historical performance trends</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="lg:col-span-4">
            <div class="glass-card flex h-full flex-col rounded-xl">
                <div class="flex items-center justify-between border-b border-outline-variant/30 p-md">
                    <h4 class="font-headline-md text-headline-md">Live Ticket Stream</h4>
                    <span class="rounded-full bg-secondary/10 px-sm py-xs text-[10px] font-bold uppercase tracking-tighter text-secondary">Live</span>
                </div>
                <div class="scroll-hide max-h-[550px] flex-1 space-y-md overflow-y-auto p-md">
                    @forelse($updates->take(4) as $update)
                        <div class="group flex gap-sm">
                            <div class="relative">
                                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary-container/20 text-primary-container">
                                    <span class="material-symbols-outlined">person</span>
                                </div>
                                <span class="absolute -bottom-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full border-2 border-surface bg-secondary">
                                    <span class="material-symbols-outlined text-[10px] font-bold text-on-secondary">check</span>
                                </span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between gap-3">
                                    <p class="font-label-lg text-on-surface">{{ $update->activity->title ?? 'Activity' }}</p>
                                    <span class="text-[10px] text-on-surface-variant">{{ $update->created_at?->diffForHumans() }}</span>
                                </div>
                                <p class="line-clamp-1 text-sm text-on-surface-variant">{{ $update->remark ?? 'No remark provided.' }}</p>
                                <div class="mt-xs flex flex-wrap gap-xs">
                                    <span class="rounded-full bg-surface-container-highest px-sm py-0.5 text-[10px] text-on-surface-variant">#{{ strtoupper($update->status) }}</span>
                                    <span class="rounded-full bg-surface-container-highest px-sm py-0.5 text-[10px] text-on-surface-variant">{{ $update->activity->createdBy->department ?? 'Support' }}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="rounded-xl border border-dashed border-outline-variant/30 p-md text-center text-sm text-on-surface-variant">No recent activity updates yet.</div>
                    @endforelse
                </div>
                <div class="mt-auto border-t border-outline-variant/30 p-md">
                    <a href="{{ route('reports.index') }}" class="inline-flex w-full items-center justify-center rounded-lg py-base text-on-surface-variant transition-all hover:bg-surface-bright/50 hover:text-primary">View Entire Feed</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

