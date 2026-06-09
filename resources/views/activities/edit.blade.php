@extends('layouts.supporttrack')

@section('title', 'SupportTrack | Edit Ticket')

@section('content')
<div class="mb-lg flex items-center justify-between">
    <div>
        <h2 class="font-display-md text-display-md text-on-surface mb-xs">Edit Ticket</h2>
        <p class="text-on-surface-variant font-body-lg">Update the ticket details and keep the handover record current.</p>
    </div>
    <a href="{{ route('activities.index') }}" class="rounded-lg border border-outline-variant bg-surface-container px-md py-sm text-on-surface-variant hover:text-primary transition-all">Back to activity log</a>
</div>
<div class="grid grid-cols-12 gap-gutter">
    <div class="col-span-12 lg:col-span-8 glass-card rounded-xl p-md space-y-gutter">
        <div class="rounded-3xl bg-surface-container-highest p-md">
            <h3 class="font-headline-md text-headline-md text-on-surface">Ticket details</h3>
            <p class="mt-2 text-on-surface-variant text-sm">Edit the ticket title, description, date, and status.</p>
        </div>
        <div class="rounded-3xl bg-surface-container-highest p-md">
            <form method="POST" action="{{ route('activities.update', $activity) }}" class="space-y-6">
                @csrf
                @method('PUT')
                <div>
                    <label for="title" class="block text-sm font-semibold text-on-surface-variant mb-2">Activity name</label>
                    <input id="title" name="title" type="text" value="{{ old('title', $activity->title) }}" class="w-full rounded-2xl border border-outline-variant bg-background px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" required />
                    <p class="mt-2 text-xs text-error">{{ $errors->first('title') }}</p>
                </div>
                <div>
                    <label for="description" class="block text-sm font-semibold text-on-surface-variant mb-2">Description</label>
                    <textarea id="description" name="description" rows="5" class="w-full rounded-2xl border border-outline-variant bg-background px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none">{{ old('description', $activity->description) }}</textarea>
                    <p class="mt-2 text-xs text-error">{{ $errors->first('description') }}</p>
                </div>
                <div class="grid gap-4 lg:grid-cols-2">
                    <div>
                        <label for="activity_date" class="block text-sm font-semibold text-on-surface-variant mb-2">Activity date</label>
                        <input id="activity_date" name="activity_date" type="date" value="{{ old('activity_date', $activity->activity_date->format('Y-m-d')) }}" class="w-full rounded-2xl border border-outline-variant bg-background px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" required />
                        <p class="mt-2 text-xs text-error">{{ $errors->first('activity_date') }}</p>
                    </div>
                    <div>
                        <label for="status" class="block text-sm font-semibold text-on-surface-variant mb-2">Status</label>
                        <select id="status" name="status" class="w-full rounded-2xl border border-outline-variant bg-background px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                            <option value="pending" {{ old('status', $activity->status) === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="done" {{ old('status', $activity->status) === 'done' ? 'selected' : '' }}>Done</option>
                        </select>
                        <p class="mt-2 text-xs text-error">{{ $errors->first('status') }}</p>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center gap-xs rounded-lg bg-primary px-md py-sm text-on-primary font-bold hover:bg-primary-container transition-all">Save changes</button>
            </form>
        </div>
    </div>
    <div class="col-span-12 lg:col-span-4 glass-card rounded-xl p-md">
        <div class="space-y-4">
            <div class="rounded-2xl bg-surface-container-highest p-md">
                <p class="text-sm uppercase tracking-widest text-on-surface-variant">Created by</p>
                <p class="mt-2 text-on-surface">{{ $activity->createdBy->name ?? 'System' }}</p>
                <p class="text-sm text-on-surface-variant">{{ $activity->createdBy->department ?? '' }}</p>
            </div>
            <div class="rounded-2xl bg-surface-container-highest p-md">
                <p class="text-sm uppercase tracking-widest text-on-surface-variant">Latest status</p>
                <p class="mt-2 text-on-surface">{{ ucfirst($activity->status) }}</p>
                <p class="text-sm text-on-surface-variant">Updated {{ $activity->updated_at->diffForHumans() }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
