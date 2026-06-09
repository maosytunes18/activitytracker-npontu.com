<section class="space-y-6">
    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <div class="space-y-2">
            <label for="update_password_current_password" class="block text-sm font-semibold text-on-surface-variant">Current Password</label>
            <input id="update_password_current_password" name="current_password" type="password" class="w-full rounded-lg border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" />
            @error('current_password', 'updatePassword')
                <p class="text-xs text-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-2">
            <label for="update_password_password" class="block text-sm font-semibold text-on-surface-variant">New Password</label>
            <input id="update_password_password" name="password" type="password" class="w-full rounded-lg border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" />
            @error('password', 'updatePassword')
                <p class="text-xs text-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-2">
            <label for="update_password_password_confirmation" class="block text-sm font-semibold text-on-surface-variant">Confirm Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="w-full rounded-lg border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" />
            @error('password_confirmation', 'updatePassword')
                <p class="text-xs text-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4 pt-4 border-t border-outline-variant/30">
            <button type="submit" class="inline-flex items-center gap-xs rounded-lg bg-primary px-md py-sm text-on-primary font-bold hover:bg-primary-container transition-all">
                Update Password
            </button>
            @if (session('status') === 'password-updated')
                <p class="text-sm text-secondary">Password updated successfully.</p>
            @endif
        </div>
    </form>
</section>
