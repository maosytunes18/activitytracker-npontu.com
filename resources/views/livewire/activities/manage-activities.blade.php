<x-layouts.app>
    <div class="space-y-10">
        <section class="rounded-[2rem] bg-white p-8 shadow-2xl ring-1 ring-slate-900/5">
            <div class="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-sky-600">Activity dashboard</p>
                    <h1 class="mt-3 text-3xl font-semibold tracking-tight text-slate-950 sm:text-4xl">Manage work with clarity and confidence.</h1>
                    <p class="mt-3 text-sm leading-6 text-slate-600">A modern activity tracker with filtering, fast updates, and a polished interface for daily planning.</p>
                </div>

                <div class="grid gap-3 sm:grid-cols-3">
                    <div class="rounded-3xl bg-slate-950 p-5 text-white shadow-sm ring-1 ring-white/10">
                        <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Total tasks</p>
                        <p class="mt-3 text-3xl font-semibold">{{ $allCount }}</p>
                    </div>
                    <div class="rounded-3xl bg-slate-950/90 p-5 text-white shadow-sm ring-1 ring-white/10">
                        <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Pending</p>
                        <p class="mt-3 text-3xl font-semibold">{{ $pendingCount }}</p>
                    </div>
                    <div class="rounded-3xl bg-slate-950/80 p-5 text-white shadow-sm ring-1 ring-white/10">
                        <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Completed</p>
                        <p class="mt-3 text-3xl font-semibold">{{ $doneCount }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 grid gap-4 lg:grid-cols-[1fr_0.5fr]">
                <label class="flex w-full items-center gap-3 rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 shadow-sm">
                    <span class="text-sm font-medium text-slate-700">Search</span>
                    <input type="search" wire:model.debounce.300ms="search" placeholder="Search task title or description" class="w-full bg-transparent text-sm text-slate-900 outline-none" />
                </label>

                <label class="flex w-full flex-col gap-2 rounded-3xl border border-slate-200 bg-slate-50 p-4 shadow-sm">
                    <span class="text-sm font-medium text-slate-700">Filter status</span>
                    <select wire:model="statusFilter" class="rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-100">
                        <option value="all">All statuses</option>
                        <option value="pending">Pending</option>
                        <option value="done">Done</option>
                    </select>
                </label>
            </div>

            @if ($message)
                <div class="mt-6 rounded-[1.75rem] bg-emerald-50 p-4 text-sm text-emerald-700 ring-1 ring-emerald-100">
                    {{ $message }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mt-6 rounded-[1.75rem] bg-rose-50 p-4 text-sm text-rose-700 ring-1 ring-rose-100">
                    <strong class="font-semibold">Please fix the following errors:</strong>
                    <ul class="mt-2 list-disc pl-5 text-rose-700">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form wire:submit.prevent="save" class="mt-8 grid gap-6 lg:grid-cols-[1.3fr_0.7fr]">
                <div class="space-y-4">
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Task title</label>
                        <input type="text" wire:model="title" placeholder="Define what needs to be done" class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100" />
                        @error('title') <p class="mt-2 text-sm text-rose-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Details</label>
                        <textarea wire:model="description" rows="4" placeholder="Add context, notes, or follow-up tasks" class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100"></textarea>
                        @error('description') <p class="mt-2 text-sm text-rose-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="space-y-4 rounded-[1.75rem] border border-slate-200 bg-slate-50 p-5 shadow-sm">
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Due date</label>
                        <input type="date" wire:model="activity_date" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100" />
                        @error('activity_date') <p class="mt-2 text-sm text-rose-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                        <select wire:model="status" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100">
                            <option value="pending">Pending</option>
                            <option value="done">Done</option>
                        </select>
                        @error('status') <p class="mt-2 text-sm text-rose-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex flex-col gap-3 pt-2">
                        <button type="submit" wire:loading.attr="disabled" class="inline-flex items-center justify-center rounded-3xl bg-slate-950 px-5 py-3 text-sm font-semibold text-white transition hover:bg-slate-800 disabled:cursor-not-allowed disabled:opacity-70">{{ $editId ? 'Update activity' : 'Add activity' }}</button>
                        @if ($editId)
                            <button type="button" wire:click="resetForm" class="inline-flex items-center justify-center rounded-3xl border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Cancel</button>
                        @endif
                    </div>
                </div>
            </form>
        </section>

        <section class="space-y-6">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-500">Activity log</p>
                    <h2 class="mt-2 text-2xl font-semibold text-slate-950">Recent task updates</h2>
                </div>
                <p class="text-sm text-slate-500">Showing {{ $activities->count() }} matching tasks.</p>
            </div>

            <div class="grid gap-4">
                @forelse($activities as $activity)
                    <article class="rounded-[1.75rem] bg-white p-6 shadow-sm ring-1 ring-slate-900/5">
                        <div class="flex flex-col gap-4 xl:flex-row xl:items-start xl:justify-between">
                            <div class="space-y-3">
                                <div class="flex flex-wrap items-center gap-2 text-sm text-slate-500">
                                    <span>{{ $activity->activity_date->format('M j, Y') }}</span>
                                    <span class="h-1.5 w-1.5 rounded-full bg-slate-300"></span>
                                    <span class="font-semibold uppercase tracking-[0.22em] text-slate-400">{{ $activity->status }}</span>
                                </div>
                                <h3 class="text-xl font-semibold text-slate-950">{{ $activity->title }}</h3>
                                @if ($activity->description)
                                    <p class="text-sm leading-6 text-slate-600">{{ $activity->description }}</p>
                                @endif
                            </div>

                            <div class="flex flex-wrap items-center gap-3">
                                <button type="button" wire:click="edit({{ $activity->id }})" class="rounded-full border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Edit</button>
                                <button type="button" wire:click="delete({{ $activity->id }})" onclick="confirm('Delete this activity?') || event.stopImmediatePropagation()" class="rounded-full border border-rose-200 bg-rose-50 px-4 py-2 text-sm font-semibold text-rose-700 transition hover:bg-rose-100">Delete</button>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="rounded-[1.75rem] bg-white p-8 text-center shadow-sm ring-1 ring-slate-900/5">
                        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-500">No tasks found</p>
                        <p class="mt-4 text-sm leading-6 text-slate-600">Use the form above to add a task and keep your plan moving forward.</p>
                    </div>
                @endforelse
            </div>
        </section>
    </div>
</x-layouts.app>
