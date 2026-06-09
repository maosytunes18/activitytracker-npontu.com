@extends('layouts.supporttrack')

@section('title', 'SupportTrack | Ticket Details')

@section('content')
<div class="mb-lg flex items-center justify-between">
    <div>
        <h2 class="font-display-md text-display-md text-on-surface mb-xs">{{ $activity->title }}</h2>
        <p class="text-on-surface-variant font-body-lg">Review the case details and share the latest status update.</p>
    </div>
    <a href="{{ route('activities.index') }}" class="rounded-lg border border-outline-variant bg-surface-container px-md py-sm text-on-surface-variant hover:text-primary transition-all">Back to activity log</a>
</div>
<div class="grid grid-cols-12 gap-gutter">
    <div class="col-span-12 lg:col-span-8 space-y-gutter">
        <div class="glass-card rounded-xl p-md">
            <div class="flex items-center justify-between mb-md">
                <div>
                    <p class="text-sm uppercase tracking-widest text-on-surface-variant">{{ $activity->activity_date->format('d M Y') }}</p>
                    <h3 class="mt-2 font-headline-md text-headline-md text-on-surface">{{ $activity->title }}</h3>
                </div>
                <span class="rounded-full px-3 py-1 text-sm font-semibold {{ $activity->status === 'done' ? 'bg-secondary text-slate-950' : 'bg-primary/10 text-primary' }}">{{ ucfirst($activity->status) }}</span>
            </div>
            <p class="text-on-surface-variant leading-relaxed">{{ $activity->description }}</p>
        </div>
        <div class="glass-card rounded-xl p-md">
            <h4 class="font-headline-md text-headline-md text-on-surface mb-md">Activity history</h4>
            <div class="space-y-4">
                @forelse($activity->updates as $update)
                    <div class="rounded-2xl bg-surface-container-highest p-md">
                        <div class="flex items-center justify-between gap-sm">
                            <div>
                                <p class="font-label-lg text-on-surface">{{ ucfirst($update->status) }}</p>
                                <p class="text-xs text-on-surface-variant">{{ $update->created_at->format('d M Y, h:i A') }}</p>
                            </div>
                            <p class="text-sm text-on-surface-variant">{{ $update->user->name }}</p>
                        </div>
                        <p class="mt-3 text-on-surface-variant">{{ $update->remark }}</p>
                    </div>
                @empty
                    <div class="rounded-2xl bg-surface-container-highest p-md text-on-surface-variant">No updates recorded yet.</div>
                @endforelse
            </div>
        </div>
    </div>
    <div class="col-span-12 lg:col-span-4 space-y-gutter">
        <div class="glass-card rounded-xl p-md">
            <h4 class="font-headline-md text-headline-md text-on-surface mb-md">Update ticket</h4>
            <form method="POST" action="{{ route('activities.updates.store', $activity) }}" class="space-y-4">
                @csrf
                <div>
                    <label for="status" class="block text-sm font-semibold text-on-surface-variant mb-2">Status</label>
                    <select id="status" name="status" class="w-full rounded-2xl border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                        <option value="pending" {{ old('status') === 'pending' ? 'selected' : ($activity->status === 'pending' ? 'selected' : '') }}>Pending</option>
                        <option value="done" {{ old('status') === 'done' ? 'selected' : ($activity->status === 'done' ? 'selected' : '') }}>Done</option>
                    </select>
                </div>
                <div>
                    <label for="remark" class="block text-sm font-semibold text-on-surface-variant mb-2">Remark</label>
                    <textarea id="remark" name="remark" rows="4" class="w-full rounded-2xl border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none">{{ old('remark') }}</textarea>
                </div>
                <button type="submit" class="inline-flex items-center gap-xs rounded-lg bg-primary px-md py-sm text-on-primary font-bold hover:bg-primary-container transition-all">Save update</button>
            </form>
        </div>
        <div class="glass-card rounded-xl p-md">
            <p class="font-label-lg text-on-surface-variant uppercase tracking-widest">Created by</p>
            <p class="mt-2 text-on-surface">{{ $activity->createdBy->name ?? 'System' }}</p>
            <p class="text-sm text-on-surface-variant">{{ $activity->createdBy->department ?? '' }}</p>
            <p class="text-sm text-on-surface-variant mt-2">Employee ID: {{ $activity->createdBy->employee_id ?? '-' }}</p>
            <p class="text-sm text-on-surface-variant">{{ $activity->createdBy->email ?? '' }}</p>
        </div>
    </div>
</div>
@endsection
