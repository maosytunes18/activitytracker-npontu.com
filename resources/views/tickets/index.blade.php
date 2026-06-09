@extends('layouts.supporttrack')

@section('title', 'SupportTrack | Ticket Management')

@section('header_actions')
    <a href="{{ route('activities.create') }}" class="inline-flex items-center gap-2 rounded-lg bg-primary px-base py-1.5 font-bold text-on-primary transition-all active:scale-[0.98] performance-glow font-label-lg">
        <span class="material-symbols-outlined">add</span>
        Create Ticket
    </a>
@endsection

@section('content')
<div class="mb-lg flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
    <div>
        <h2 class="font-display-md text-display-md text-on-surface">Ticket Board</h2>
        <p class="font-body-lg text-on-surface-variant">Manage and prioritize active support requests</p>
    </div>
    <div class="flex flex-wrap items-center gap-sm">
        <div class="flex rounded-lg border border-outline-variant/30 bg-surface-container-low p-1">
            <button class="rounded-md bg-surface-bright px-4 py-1.5 text-label-lg font-semibold text-primary shadow-sm">Kanban</button>
            <button class="rounded-md px-4 py-1.5 text-label-lg text-on-surface-variant transition-colors hover:text-on-surface">Table</button>
        </div>
        <div class="h-8 w-[1px] bg-outline-variant/30"></div>
        <div class="relative">
            <select class="cursor-pointer appearance-none rounded-lg border border-outline-variant/30 bg-surface-container-low py-2 pl-3 pr-10 font-label-lg text-on-surface-variant outline-none transition-all focus:ring-2 focus:ring-primary">
                <option>Highest Priority</option>
                <option>Oldest First</option>
                <option>Newest First</option>
            </select>
            <span class="material-symbols-outlined pointer-events-none absolute right-2 top-2 text-outline">expand_more</span>
        </div>
    </div>
</div>

<section class="overflow-x-auto px-0 pb-margin">
    <div class="flex min-h-[600px] gap-gutter">
        <div class="flex min-w-[320px] flex-col gap-sm">
            <div class="flex items-center justify-between px-xs py-base">
                <div class="flex items-center gap-xs">
                    <span class="h-2 w-2 rounded-full bg-outline"></span>
                    <span class="font-label-lg tracking-wider text-on-surface-variant">OPEN</span>
                    <span class="rounded bg-surface-container-highest px-2 py-0.5 text-[10px] text-on-surface">12</span>
                </div>
                <button class="material-symbols-outlined text-outline transition-colors hover:text-primary">add</button>
            </div>
            <div class="flex flex-col gap-base">
                <div class="ticket-card glass-card performance-glow relative cursor-grab rounded-xl p-md transition-all hover:border-primary/40 active:cursor-grabbing">
                    <div class="mb-sm flex items-start justify-between">
                        <span class="rounded bg-error-container px-2 py-0.5 text-[10px] font-bold uppercase tracking-tighter text-on-error-container">Critical</span>
                        <span class="text-[10px] font-medium text-on-surface-variant">#TRK-882</span>
                    </div>
                    <h3 class="mb-xs font-headline-md leading-tight text-on-surface">API Authentication Failure</h3>
                    <div class="mt-md flex items-center gap-sm">
                        <div class="flex -space-x-2">
                            <span class="flex h-6 w-6 items-center justify-center rounded-full border-2 border-surface bg-primary text-[10px] font-bold text-on-primary">A</span>
                        </div>
                        <div class="flex items-center gap-1 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[14px]">schedule</span>
                            <span class="text-[11px] font-medium">2h ago</span>
                        </div>
                    </div>
                    <div class="ticket-preview absolute left-0 -top-24 z-10 w-full rounded-lg border-primary/20 glass-card p-sm opacity-0 shadow-2xl transition-all pointer-events-none">
                        <p class="text-[11px] leading-snug text-on-surface">Major outage reported in the US-East-1 cluster. Token validation returns 500 status code for all legacy client versions.</p>
                    </div>
                </div>

                <div class="ticket-card glass-card performance-glow relative cursor-grab rounded-xl p-md transition-all hover:border-primary/40 active:cursor-grabbing">
                    <div class="mb-sm flex items-start justify-between">
                        <span class="rounded bg-tertiary-container px-2 py-0.5 text-[10px] font-bold uppercase tracking-tighter text-on-tertiary-container">High</span>
                        <span class="text-[10px] font-medium text-on-surface-variant">#TRK-901</span>
                    </div>
                    <h3 class="mb-xs font-headline-md leading-tight text-on-surface">Billing Dashboard Latency</h3>
                    <div class="mt-md flex items-center gap-sm">
                        <div class="flex items-center gap-1 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[14px]">comment</span>
                            <span class="text-[11px] font-medium">4</span>
                        </div>
                        <div class="flex items-center gap-1 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[14px]">schedule</span>
                            <span class="text-[11px] font-medium">5h ago</span>
                        </div>
                    </div>
                    <div class="ticket-preview absolute left-0 -top-24 z-10 w-full rounded-lg border-primary/20 glass-card p-sm opacity-0 shadow-2xl transition-all pointer-events-none">
                        <p class="text-[11px] leading-snug text-on-surface">Users reporting 10s+ load times on the monthly invoicing view. Database query needs optimization for high-volume accounts.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex min-w-[320px] flex-col gap-sm">
            <div class="flex items-center justify-between px-xs py-base">
                <div class="flex items-center gap-xs">
                    <span class="h-2 w-2 rounded-full bg-primary"></span>
                    <span class="font-label-lg tracking-wider text-primary">IN PROGRESS</span>
                    <span class="rounded bg-surface-container-highest px-2 py-0.5 text-[10px] text-on-surface">5</span>
                </div>
            </div>
            <div class="flex flex-col gap-base">
                <div class="ticket-card glass-card performance-glow relative cursor-grab rounded-xl p-md transition-all hover:border-primary/40 active:cursor-grabbing">
                    <div class="mb-sm flex items-start justify-between">
                        <span class="rounded bg-surface-container-highest px-2 py-0.5 text-[10px] font-bold uppercase tracking-tighter text-on-surface-variant">Medium</span>
                        <span class="text-[10px] font-medium text-on-surface-variant">#TRK-742</span>
                    </div>
                    <h3 class="mb-xs font-headline-md leading-tight text-on-surface">Dark Mode Contrast Fix</h3>
                    <div class="mt-md flex items-center gap-sm">
                        <div class="flex -space-x-2">
                            <span class="flex h-6 w-6 items-center justify-center rounded-full border-2 border-surface bg-secondary text-[10px] font-bold text-on-secondary">S</span>
                        </div>
                        <div class="flex items-center gap-1 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[14px]">schedule</span>
                            <span class="text-[11px] font-medium">1d ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex min-w-[320px] flex-col gap-sm">
            <div class="flex items-center justify-between px-xs py-base">
                <div class="flex items-center gap-xs">
                    <span class="h-2 w-2 rounded-full bg-tertiary"></span>
                    <span class="font-label-lg tracking-wider text-on-surface-variant">TESTING</span>
                    <span class="rounded bg-surface-container-highest px-2 py-0.5 text-[10px] text-on-surface">8</span>
                </div>
            </div>
            <div class="flex flex-col gap-base opacity-70">
                <div class="glass-card performance-glow relative cursor-grab rounded-xl p-md transition-all hover:border-primary/40 active:cursor-grabbing">
                    <div class="mb-sm flex items-start justify-between">
                        <span class="rounded bg-secondary/20 px-2 py-0.5 text-[10px] font-bold uppercase tracking-tighter text-secondary">Low</span>
                        <span class="text-[10px] font-medium text-on-surface-variant">#TRK-661</span>
                    </div>
                    <h3 class="mb-xs font-headline-md leading-tight text-on-surface">Update Documentation Links</h3>
                    <div class="mt-md flex items-center justify-between">
                        <span class="rounded-full border border-secondary/30 bg-secondary/20 px-2 py-0.5 text-[11px] font-bold text-secondary">QA Pending</span>
                        <span class="text-[11px] text-on-surface-variant">2d ago</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex min-w-[320px] flex-col gap-sm">
            <div class="flex items-center justify-between px-xs py-base">
                <div class="flex items-center gap-xs">
                    <span class="h-2 w-2 rounded-full bg-secondary"></span>
                    <span class="font-label-lg tracking-wider text-secondary">RESOLVED</span>
                    <span class="rounded bg-surface-container-highest px-2 py-0.5 text-[10px] text-on-surface">142</span>
                </div>
            </div>
            <div class="flex h-full items-center justify-center rounded-2xl border-2 border-dashed border-outline-variant/10 p-md text-center">
                <p class="font-label-md text-on-surface-variant opacity-40">Archive items to clear view</p>
            </div>
        </div>
    </div>
</section>
@endsection
