@extends('layouts.supporttrack')

@section('title', 'SupportTrack | Notifications')

@section('content')
<div class="mb-lg flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
    <div>
        <h2 class="font-display-md text-display-md text-primary mb-xs">Notifications</h2>
        <p class="text-on-surface-variant font-body-lg">Your latest updates from the system.</p>
    </div>

    <div class="flex flex-wrap items-center gap-sm">
        <span class="rounded-lg border border-outline-variant bg-surface-container px-md py-sm text-sm font-semibold text-on-surface-variant">
            Unread: {{ $unreadCount }}
        </span>

        <form method="POST" action="{{ route('notifications.markAllRead') }}" class="inline">
            @csrf
            <button class="rounded-lg bg-primary px-md py-sm text-on-primary font-bold hover:bg-primary/90 transition-all" type="submit">
                Mark all as read
            </button>
        </form>
    </div>
</div>

@if (session('status'))
    <div class="mb-md rounded-xl bg-emerald-50 p-md text-emerald-700 ring-1 ring-emerald-100 text-sm">
        {{ session('status') }}
    </div>
@endif

<div class="glass-card rounded-xl overflow-hidden">
    <div class="border-b border-outline-variant/30 p-md">
        <h3 class="font-headline-md text-headline-md text-on-surface">Recent</h3>
    </div>

    <div class="divide-y divide-outline-variant/30">
        @forelse($notifications as $notification)
            <div class="p-md">
                <div class="flex items-start justify-between gap-3">
                    <div class="min-w-0">
                        <p class="text-sm font-semibold text-on-surface">
                            {{ data_get($notification->data, 'title', class_basename($notification->type)) }}
                        </p>
                        <p class="mt-1 text-sm text-on-surface-variant">
                            {{ data_get($notification->data, 'body', 'No message provided.') }}
                        </p>
                    </div>

                    <div class="shrink-0 text-right">
                        <p class="text-xs text-on-surface-variant">{{ $notification->created_at?->format('d M Y H:i') }}</p>
                        @if ($notification->read_at === null)
                            <span class="mt-2 inline-flex rounded-full bg-primary/10 px-sm py-1 text-[11px] font-bold text-primary">Unread</span>
                        @else
                            <span class="mt-2 inline-flex rounded-full bg-slate-100 px-sm py-1 text-[11px] font-bold text-slate-600">Read</span>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="p-md text-center text-on-surface-variant">
                No notifications yet.
            </div>
        @endforelse
    </div>

    <div class="p-md">
        {{ $notifications->links('pagination::tailwind') }}
    </div>
</div>
@endsection

