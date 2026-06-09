<section class="space-y-6">
    <div>
        <p class="text-sm text-on-surface-variant">
            Once your account is deleted, all of its resources and data will be permanently deleted. Please download any data you wish to retain before proceeding.
        </p>
    </div>

    <div>
        <button
            type="button"
            onclick="document.getElementById('delete-modal').classList.remove('hidden')"
            class="inline-flex items-center gap-xs rounded-lg bg-error px-md py-sm text-on-primary font-bold hover:brightness-110 transition-all"
        >
            Delete Account
        </button>
    </div>

    <!-- Modal -->
    <div id="delete-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
        <div class="glass-card rounded-xl p-md max-w-md w-full mx-4">
            <h2 class="font-headline-md text-headline-md text-error mb-md">
                Delete Account
            </h2>

            <p class="text-on-surface-variant mb-md">
                Are you absolutely sure? Once deleted, all your data will be permanently removed and cannot be recovered.
            </p>

            <form method="post" action="{{ route('profile.destroy') }}" class="space-y-4">
                @csrf
                @method('delete')

                <div class="space-y-2">
                    <label for="password" class="block text-sm font-semibold text-on-surface-variant">Confirm password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        class="w-full rounded-lg border border-outline-variant bg-surface-container-highest px-4 py-3 text-on-surface focus:ring-2 focus:ring-error focus:border-transparent outline-none"
                        placeholder="Enter your password"
                        required
                    />
                    @error('password', 'userDeletion')
                        <p class="text-xs text-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex gap-3 justify-end pt-2">
                    <button
                        type="button"
                        onclick="document.getElementById('delete-modal').classList.add('hidden')"
                        class="inline-flex items-center px-md py-sm rounded-lg border border-outline-variant text-on-surface-variant hover:bg-surface-bright transition-all"
                    >
                        Cancel
                    </button>
                    <button
                        type="submit"
                        class="inline-flex items-center px-md py-sm rounded-lg bg-error text-on-primary font-bold hover:brightness-110 transition-all"
                    >
                        Delete Account
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
