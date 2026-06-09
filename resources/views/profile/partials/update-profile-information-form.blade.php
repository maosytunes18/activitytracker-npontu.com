<section class="space-y-6">
    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <div class="space-y-2">
            <label for="name" class="block text-sm font-semibold text-on-surface-variant">Name</label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" class="w-full rounded-lg border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" required autofocus />
            @error('name')
                <p class="text-xs text-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-2">
            <label for="email" class="block text-sm font-semibold text-on-surface-variant">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" class="w-full rounded-lg border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" required />
            @error('email')
                <p class="text-xs text-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-2">
            <label for="employee_id" class="block text-sm font-semibold text-on-surface-variant">Employee ID</label>
            <input id="employee_id" name="employee_id" type="text" value="{{ old('employee_id', $user->employee_id) }}" class="w-full rounded-lg border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" required />
            @error('employee_id')
                <p class="text-xs text-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-2">
            <label for="department" class="block text-sm font-semibold text-on-surface-variant">Department</label>
            <input id="department" name="department" type="text" value="{{ old('department', $user->department) }}" class="w-full rounded-lg border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" required />
            @error('department')
                <p class="text-xs text-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-2">
            <label for="phone" class="block text-sm font-semibold text-on-surface-variant">Phone</label>
            <input id="phone" name="phone" type="text" value="{{ old('phone', $user->phone) }}" class="w-full rounded-lg border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent outline-none" required />
            @error('phone')
                <p class="text-xs text-error">{{ $message }}</p>
            @enderror
        </div>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="bg-primary-container/20 border border-primary/30 rounded-lg p-md">
                <p class="text-sm text-on-surface-variant">
                    Your email address is unverified.
                    <button form="send-verification" class="text-primary font-semibold hover:underline">
                        Click here to re-send verification email.
                    </button>
                </p>
                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-secondary">
                        A new verification link has been sent to your email address.
                    </p>
                @endif
            </div>
        @endif

        <div class="flex items-center gap-4 pt-4 border-t border-outline-variant/30">
            <button type="submit" class="inline-flex items-center gap-xs rounded-lg bg-primary px-md py-sm text-on-primary font-bold hover:bg-primary-container transition-all">
                Save Changes
            </button>
            @if (session('status') === 'profile-updated')
                <p class="text-sm text-secondary">Saved successfully.</p>
            @endif
        </div>
    </form>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="hidden">
        @csrf
    </form>
</section>
