@extends('layouts.supporttrack')

@section('title', 'SupportTrack | Create Ticket')

@section('content')
<div class="mb-lg flex items-center justify-between">
    <div>
        <h2 class="font-display-md text-display-md text-on-surface mb-xs">Create Ticket</h2>
        <p class="text-on-surface-variant font-body-lg">Log a new support ticket for the team.</p>
    </div>
    <a href="{{ route('activities.index') }}" class="rounded-lg border border-outline-variant bg-surface-container px-md py-sm text-on-surface-variant hover:text-primary transition-all">Back to activity log</a>
</div>
<div class="glass-card rounded-xl p-md">
    <form method="POST" action="{{ route('activities.store') }}" class="space-y-gutter">
        @csrf
        <div class="grid gap-4 lg:grid-cols-2">
            <div class="space-y-2">
                <label for="title" class="block text-sm font-semibold text-on-surface-variant">Ticket title</label>
                <input id="title" name="title" type="text" value="{{ old('title') }}" class="w-full rounded-2xl border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" required />
                <p class="text-xs text-error">{{ $errors->first('title') }}</p>
            </div>
            <div class="space-y-2">
                <label for="status" class="block text-sm font-semibold text-on-surface-variant">Status</label>
                <select id="status" name="status" class="w-full rounded-2xl border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                    <option value="pending" {{ old('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="done" {{ old('status') === 'done' ? 'selected' : '' }}>Done</option>
                </select>
                <p class="text-xs text-error">{{ $errors->first('status') }}</p>
            </div>
        </div>
        <div class="space-y-2">
            <label for="description" class="block text-sm font-semibold text-on-surface-variant">Description</label>
            <textarea id="description" name="description" rows="5" class="w-full rounded-2xl border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none">{{ old('description') }}</textarea>
            <p class="text-xs text-error">{{ $errors->first('description') }}</p>
        </div>
        <div class="grid gap-4 lg:grid-cols-2">
            <div class="space-y-2">
                <label for="activity_date" class="block text-sm font-semibold text-on-surface-variant">Activity date</label>
                <input id="activity_date" name="activity_date" type="date" value="{{ old('activity_date') }}" class="w-full rounded-2xl border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" required />
                <p class="text-xs text-error">{{ $errors->first('activity_date') }}</p>
            </div>
            <div class="flex items-end justify-end">
                <button type="submit" class="inline-flex items-center gap-xs rounded-lg bg-primary px-md py-sm text-on-primary font-bold hover:bg-primary-container transition-all">Create ticket</button>
            </div>
        </div>
    </form>
</div>
@endsection
