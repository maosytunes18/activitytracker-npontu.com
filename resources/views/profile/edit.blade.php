@extends('layouts.supporttrack')

@section('title', 'SupportTrack | Team Audit')

@section('content')
<div class="mb-lg">
    <h2 class="font-display-md text-display-md text-on-surface">Team Audit</h2>
    <p class="text-on-surface-variant font-body-lg">Manage your profile and security settings.</p>
</div>

<div class="space-y-gutter max-w-2xl">
    <div class="glass-card rounded-xl p-md">
        <div class="mb-md">
            <h3 class="font-headline-md text-headline-md text-on-surface">Profile Information</h3>
            <p class="text-sm text-on-surface-variant mt-1">Update your account details.</p>
        </div>
        @include('profile.partials.update-profile-information-form')
    </div>

    <div class="glass-card rounded-xl p-md">
        <div class="mb-md">
            <h3 class="font-headline-md text-headline-md text-on-surface">Security</h3>
            <p class="text-sm text-on-surface-variant mt-1">Update your password to keep your account secure.</p>
        </div>
        @include('profile.partials.update-password-form')
    </div>

    <div class="glass-card rounded-xl p-md border-l-4 border-l-error">
        <div class="mb-md">
            <h3 class="font-headline-md text-headline-md text-error">Danger Zone</h3>
            <p class="text-sm text-on-surface-variant mt-1">Permanently delete your account and all associated data.</p>
        </div>
        @include('profile.partials.delete-user-form')
    </div>
</div>
@endsection
