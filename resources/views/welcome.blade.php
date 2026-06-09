<x-layouts.app>
    <div class="grid gap-10 lg:grid-cols-[1.3fr_0.9fr]">
        <div class="space-y-10">
            <section class="rounded-[2rem] bg-white p-10 shadow-2xl ring-1 ring-slate-900/5">
                <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-sm font-semibold text-sky-700">Professional tracker</span>
                <h1 class="mt-6 text-4xl font-semibold tracking-tight text-slate-950 sm:text-5xl">Organize your work with a polished activity workflow.</h1>
                <p class="mt-5 max-w-2xl text-lg leading-8 text-slate-600">Create tasks, schedule deadlines, and keep progress visible with a clean Laravel + Livewire dashboard designed for modern productivity.</p>
                <div class="mt-8 flex flex-wrap gap-3">
                    @auth
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-full bg-slate-950 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">Go to dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-full bg-slate-950 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">Log in</a>
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-slate-50">Create account</a>
                    @endauth
                    <a href="https://laravel.com/docs" target="_blank" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-slate-50">Laravel docs</a>
                </div>

                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-3xl bg-slate-950 p-6 text-white shadow-sm ring-1 ring-white/10">
                        <p class="text-sm uppercase tracking-[0.24em] text-slate-400">Built for</p>
                        <p class="mt-3 text-2xl font-semibold">Professional teams</p>
                    </div>
                    <div class="rounded-3xl bg-slate-950/90 p-6 text-white shadow-sm ring-1 ring-white/10">
                        <p class="text-sm uppercase tracking-[0.24em] text-slate-400">Designed for</p>
                        <p class="mt-3 text-2xl font-semibold">Clear workflows</p>
                    </div>
                    <div class="rounded-3xl bg-slate-950/80 p-6 text-white shadow-sm ring-1 ring-white/10">
                        <p class="text-sm uppercase tracking-[0.24em] text-slate-400">Ready to use</p>
                        <p class="mt-3 text-2xl font-semibold">With sample data</p>
                    </div>
                </div>
            </section>

            <section class="grid gap-4 md:grid-cols-3">
                <article class="rounded-[2rem] bg-white p-8 shadow-sm ring-1 ring-slate-900/5">
                    <h2 class="text-lg font-semibold text-slate-950">Instant updates</h2>
                    <p class="mt-3 text-sm leading-6 text-slate-600">Livewire powers fast interactions without page refreshes, so your workflow stays uninterrupted.</p>
                </article>
                <article class="rounded-[2rem] bg-white p-8 shadow-sm ring-1 ring-slate-900/5">
                    <h2 class="text-lg font-semibold text-slate-950">Task visibility</h2>
                    <p class="mt-3 text-sm leading-6 text-slate-600">Keep deadlines and status information in one place with a clean, readable layout.</p>
                </article>
                <article class="rounded-[2rem] bg-white p-8 shadow-sm ring-1 ring-slate-900/5">
                    <h2 class="text-lg font-semibold text-slate-950">Built to scale</h2>
                    <p class="mt-3 text-sm leading-6 text-slate-600">This project structure is ready for production-ready enhancements like auth, reporting, and custom workflows.</p>
                </article>
            </section>
        </div>

        <aside class="rounded-[2rem] bg-slate-950 p-10 text-white shadow-2xl ring-1 ring-white/10">
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-sky-300">What you get</p>
            <h2 class="mt-4 text-3xl font-semibold">A complete activity management experience</h2>
            <p class="mt-4 text-sm leading-7 text-slate-300">A polished frontend, a modern Laravel backend, and a Livewire-powered interactive dashboard make this feel like a proper SaaS-style project.</p>
            <div class="mt-8 space-y-4 text-sm leading-7 text-slate-300">
                <p><span class="font-semibold text-white">Reliable page flow.</span> The core user journey is ready for real work and future improvements.</p>
                <p><span class="font-semibold text-white">Professional styling.</span> Modern spacing, typography, and interface elements improve usability.</p>
                <p><span class="font-semibold text-white">Ready for expansion.</span> Add auth, user settings, teams, or reporting next.</p>
            </div>
        </aside>
    </div>
</x-layouts.app>
