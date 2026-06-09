<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A professional Laravel activity tracker built with Livewire and Tailwind CSS.">
    <title>Activity Tracker</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">
    <div class="relative min-h-screen overflow-hidden bg-slate-50">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-80 bg-gradient-to-r from-sky-600/20 via-slate-950/10 to-slate-700/20 blur-3xl"></div>

        <div class="relative z-10 flex min-h-screen flex-col">
            <header class="border-b border-slate-200 bg-white/95 backdrop-blur-xl">
                <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                    <div>
                        <a href="{{ url('/') }}" class="text-lg font-semibold tracking-tight text-slate-950">Activity Tracker</a>
                        <p class="text-xs text-slate-500">Built for modern teams and solo workflows.</p>
                    </div>
                    <nav class="flex flex-wrap items-center gap-3 text-sm font-medium text-slate-700">
                        <a href="{{ url('/') }}" class="rounded-full px-4 py-2 transition hover:bg-slate-100 hover:text-slate-900">Home</a>
                        @auth
                            <a href="{{ route('dashboard') }}" class="rounded-full bg-slate-950 px-4 py-2 text-white transition hover:bg-slate-800">Dashboard</a>

                            <a href="{{ route('notifications.index') }}" class="rounded-full border border-outline-variant px-4 py-2 transition hover:bg-slate-100 hover:text-slate-900 inline-flex items-center gap-2">
                                <span class="material-symbols-outlined">notifications</span>
                                <span>Notifications</span>
                            </a>

                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="rounded-full border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Log out</button>
                            </form>
                        @else

                            <a href="{{ url('/') }}" class="rounded-full px-4 py-2 transition hover:bg-slate-100 hover:text-slate-900">Home</a>

                            <a href="{{ route('register') }}" class="rounded-full bg-slate-950 px-4 py-2 text-white transition hover:bg-slate-800">Register</a>
                        @endauth
                    </nav>
                </div>
            </header>

            <main class="flex-1 px-4 py-10 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-7xl">
                    {{ $slot }}
                </div>
            </main>

            <footer class="border-t border-slate-200 bg-white/95 py-6">
                <div class="mx-auto flex max-w-7xl items-center justify-between px-4 text-sm text-slate-500 sm:px-6 lg:px-8">
                    <p>Activity Tracker · Laravel & Livewire</p>
                    <p>Designed for clarity, speed, and real daily workflow.</p>
                </div>
            </footer>
        </div>
    </div>

    @livewireScripts
</body>
</html>
