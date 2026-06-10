<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'SupportTrack')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800;900&family=Geist:wght@400;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <style>
        :root {
            color-scheme: dark;
            --surface: #111317;
            --surface-container: #1e2024;
            --surface-container-highest: #333539;
            --surface-container-low: #1a1c20;
            --surface-container-high: #282a2e;
            --surface-bright: rgba(255, 255, 255, 0.06);
            --background: #111317;
            --primary: #b0c6ff;
            --primary-container: #568dff;
            --secondary: #a7ffb3;
            --secondary-container: #00ee70;
            --tertiary: #ffb59e;
            --outline-variant: #424655;
            --on-surface: #e2e2e8;
            --on-surface-variant: #c2c6d8;
            --on-primary: #002d6f;
            --on-primary-container: #002661;
            --error: #ffb4ab;
        }

        html, body {
            min-height: 100%;
            background: var(--background);
            color: var(--on-surface);
            font-family: 'Hanken Grotesk', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            margin: 0;
        }

        body {
            overflow-x: hidden;
        }

        .glass-card {
            background: rgba(26, 29, 35, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .glass-panel {
            background: rgba(26, 29, 35, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .performance-glow:hover {
            box-shadow: 0 0 20px rgba(176, 198, 255, 0.15);
        }

        .active-glow {
            box-shadow: 0 0 16px rgba(0, 238, 112, 0.2);
        }

        .scroll-hide::-webkit-scrollbar {
            display: none;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #333539;
            border-radius: 9999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #568dff;
        }

        /* Semantic spacing helpers */
        .p-base { padding: 1rem; }
        .p-md { padding: 1.25rem; }
        .p-sm { padding: 0.75rem; }
        .p-xs { padding: 0.5rem; }
        .p-margin { padding: 2rem; }
        .px-base { padding-left: 1rem; padding-right: 1rem; }
        .px-md { padding-left: 1.25rem; padding-right: 1.25rem; }
        .px-sm { padding-left: 0.75rem; padding-right: 0.75rem; }
        .px-xs { padding-left: 0.5rem; padding-right: 0.5rem; }
        .py-base { padding-top: 1rem; padding-bottom: 1rem; }
        .py-md { padding-top: 1.25rem; padding-bottom: 1.25rem; }
        .py-sm { padding-top: 0.75rem; padding-bottom: 0.75rem; }
        .py-xs { padding-top: 0.5rem; padding-bottom: 0.5rem; }
        .pt-sm { padding-top: 0.75rem; }
        .pb-base { padding-bottom: 1rem; }
        .gap-base { gap: 1rem; }
        .gap-md { gap: 1.25rem; }
        .gap-sm { gap: 0.75rem; }
        .gap-xs { gap: 0.5rem; }
        .gap-gutter { gap: 1.5rem; }
        .space-y-lg > * + * { margin-top: 1.5rem; }
        .space-y-md > * + * { margin-top: 1.25rem; }
        .space-y-sm > * + * { margin-top: 0.75rem; }
        .space-y-xs > * + * { margin-top: 0.5rem; }
        .space-y-gutter > * + * { margin-top: 1.5rem; }
        .mb-base { margin-bottom: 1rem; }
        .mb-md { margin-bottom: 1.25rem; }
        .mb-lg { margin-bottom: 1.5rem; }
        .mb-sm { margin-bottom: 0.75rem; }
        .mb-xs { margin-bottom: 0.5rem; }

        /* Semantic text helpers */
        .font-body-md { font-family: 'Hanken Grotesk', sans-serif; font-size: 1rem; line-height: 1.75; }
        .font-body-lg { font-family: 'Hanken Grotesk', sans-serif; font-size: 1.125rem; line-height: 1.75; }
        .font-label-md { font-family: 'Geist', sans-serif; font-size: 0.875rem; font-weight: 600; letter-spacing: 0.02em; }
        .font-label-lg { font-family: 'Geist', sans-serif; font-size: 1rem; font-weight: 700; letter-spacing: 0.02em; }
        .font-headline-md { font-family: 'Hanken Grotesk', sans-serif; font-size: 1.5rem; font-weight: 800; line-height: 1.1; }
        .font-headline-lg { font-family: 'Hanken Grotesk', sans-serif; font-size: 1.75rem; font-weight: 800; line-height: 1.05; }
        .font-display-md { font-family: 'Hanken Grotesk', sans-serif; font-size: 2.125rem; font-weight: 800; line-height: 1.05; }
        .font-data-display { font-family: 'Hanken Grotesk', sans-serif; font-size: 1.75rem; font-weight: 800; line-height: 1.1; }

        .text-display-md { font-size: 2.125rem; }
        .text-headline-md { font-size: 1.5rem; }
        .text-label-lg { font-size: 1rem; }
        .text-label-md { font-size: 0.875rem; }

        .text-on-surface { color: var(--on-surface); }
        .text-on-surface-variant { color: var(--on-surface-variant); }
        .text-on-primary { color: var(--on-primary); }
        .text-primary { color: var(--primary); }
        .text-primary-container { color: var(--on-primary-container); }
        .text-on-primary-container { color: var(--on-primary-container); }
        .text-on-secondary { color: #003915; }
        .text-on-secondary-container { color: #00662c; }
        .text-secondary { color: var(--secondary); }
        .text-secondary-fixed-dim { color: #86efac; }
        .text-tertiary { color: #38bdf8; }
        .text-on-tertiary-container { color: #521300; }
        .text-on-error-container { color: #ffdad6; }
        .text-error { color: var(--error); }
        .text-on-error { color: #690005; }
        .text-outline { color: #94a3b8; }

        /* Background tokens */
        .bg-background { background: var(--background); }
        .bg-surface-container { background: var(--surface-container); }
        .bg-surface-container-highest { background: var(--surface-container-highest); }
        .bg-surface-container-low { background: var(--surface-container-low); }
        .bg-surface-container-high\/50 { background: var(--surface-container-high); }
        .bg-surface { background: rgba(17, 19, 23, 0.88); }
        .bg-surface-bright { background: var(--surface-bright); }
        .bg-surface-bright\/50 { background: rgba(255, 255, 255, 0.06); }
        .bg-primary { background: var(--primary); }
        .bg-primary-container { background: var(--primary-container); }
        .bg-primary-container\/10 { background: rgba(86, 141, 255, 0.1); }
        .bg-primary-container\/20 { background: rgba(86, 141, 255, 0.16); }
        .bg-primary\/10 { background: rgba(176, 198, 255, 0.1); }
        .bg-primary\/20 { background: rgba(176, 198, 255, 0.2); }
        .bg-secondary { background: var(--secondary); }
        .bg-secondary\/10 { background: rgba(167, 255, 179, 0.1); }
        .bg-secondary\/20 { background: rgba(167, 255, 179, 0.16); }
        .bg-tertiary { background: var(--tertiary); }
        .bg-tertiary\/10 { background: rgba(255, 181, 158, 0.1); }
        .bg-tertiary-container { background: #ff571a; }
        .bg-error-container { background: #93000a; }
        .bg-outline { background: rgba(148, 163, 184, 0.12); }

        /* Border custom tokens */
        .border-outline-variant { border-color: var(--outline-variant); }
        .border-outline-variant\/30 { border-color: rgba(66, 70, 85, 0.3); }
        .border-outline-variant\/50 { border-color: rgba(66, 70, 85, 0.5); }
        .border-primary\/30 { border-color: rgba(176, 198, 255, 0.3); }
        .border-secondary\/30 { border-color: rgba(167, 255, 179, 0.3); }
        .border-surface { border-color: var(--surface); }
        .border-surface-container { border-color: var(--surface-container); }
        .border-l-primary { border-left-color: var(--primary); }
        .border-l-secondary { border-left-color: var(--secondary); }

        .focus\:ring-primary:focus { box-shadow: 0 0 0 3px rgba(86, 141, 255, 0.24); }
        .focus\:ring-sky-100:focus { box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.18); }

        .line-clamp-1 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }

        .ticket-card {
            position: relative;
        }

        .ticket-preview {
            opacity: 0;
            pointer-events: none;
            transform: translateY(0);
            transition: opacity 0.2s ease-in-out, transform 0.2s ease-in-out;
        }

        .ticket-card:hover .ticket-preview {
            opacity: 1;
            transform: translateY(-8px);
        }

        /* Fixed header alignment with sidebar */
        .bg-surface-container-highest\/50 { background: rgba(51, 53, 57, 0.5); }
        .text-secondary-fixed-dim { color: #66ff8f; }
        .text-tertiary { color: #ffb59e; }
        .text-tertiary-fixed-dim { color: #ffb59e; }
        .text-primary-container { color: #002661; }

@media (max-width: 768px) {
            aside { position: fixed; transform: translateX(-100%); transition: transform 0.2s ease; }
            body { padding-left: 0 !important; }
            header { padding-left: 1rem !important; padding-right: 1rem !important; }
            .mobile-sidebar-open aside { transform: translateX(0); }
        }
    </style>
</head>
<body class="font-body-md overflow-hidden">
<aside class="fixed left-0 top-0 h-full w-[280px] bg-surface-container border-r border-outline-variant flex flex-col py-base px-sm z-50">
    <div class="mb-lg px-base">
<h1 class="font-headline-lg text-headline-lg font-black text-primary leading-tight">VITALITY</h1>
        <p class="text-on-surface-variant font-label-md mt-1 opacity-70">INTERNAL SYSTEM</p>
    </div>
    <nav class="flex-1 space-y-1">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-sm px-base py-sm rounded-lg transition-all duration-150 {{ request()->routeIs('dashboard') ? 'text-primary font-bold border-r-4 border-primary bg-surface-bright' : 'text-on-surface-variant hover:bg-surface-bright' }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-body-md">Dashboard</span>
        </a>
        <a href="{{ route('activities.index') }}" class="flex items-center gap-sm px-base py-sm rounded-lg transition-all duration-150 {{ request()->routeIs('activities.*') ? 'text-primary font-bold border-r-4 border-primary bg-surface-bright' : 'text-on-surface-variant hover:bg-surface-bright' }}">
            <span class="material-symbols-outlined">history</span>
            <span class="font-body-md">Activity Log</span>
        </a>
        <a href="{{ route('tickets.index') }}" class="flex items-center gap-sm px-base py-sm rounded-lg {{ request()->routeIs('tickets.*') ? 'text-primary font-bold border-r-4 border-primary bg-surface-bright' : 'text-on-surface-variant hover:bg-surface-bright' }} transition-all duration-150">
            <span class="material-symbols-outlined">confirmation_number</span>
            <span class="font-body-md">Tickets</span>
        </a>
        <a href="{{ route('reports.index') }}" class="flex items-center gap-sm px-base py-sm rounded-lg transition-all duration-150 {{ request()->routeIs('reports.*') ? 'text-primary font-bold border-r-4 border-primary bg-surface-bright' : 'text-on-surface-variant hover:bg-surface-bright' }}">
            <span class="material-symbols-outlined">assessment</span>
            <span class="font-body-md">Reports</span>
        </a>
        <a href="{{ route('profile.edit') }}" class="flex items-center gap-sm px-base py-sm rounded-lg transition-all duration-150 {{ request()->routeIs('profile.*') ? 'text-primary font-bold border-r-4 border-primary bg-surface-bright' : 'text-on-surface-variant hover:bg-surface-bright' }}">
            <span class="material-symbols-outlined">badge</span>
            <span class="font-body-md">Team Audit</span>
        </a>
    </nav>
<div class="mt-auto p-base border-t border-outline-variant/30">
        <a href="{{ route('activities.create') }}" class="w-full inline-flex items-center justify-center gap-xs bg-primary-container text-on-primary-container font-headline-md text-label-lg py-base rounded-lg hover:brightness-110 active:scale-[0.98] transition-all performance-glow">
            <span class="material-symbols-outlined">add</span>
            Create Ticket
        </a>

        <form method="POST" action="{{ route('logout') }}" class="mt-sm">
            @csrf
            <button type="submit" class="w-full inline-flex items-center justify-center gap-xs bg-surface-container-highest text-on-surface font-headline-md text-label-lg py-base rounded-lg hover:bg-surface-bright transition-all">
                <span class="material-symbols-outlined">logout</span>
                Logout
            </button>
        </form>

        <div class="mt-md flex items-center gap-sm px-xs">
            <div class="w-10 h-10 rounded-full bg-surface-container-highest border border-outline-variant overflow-hidden"></div>
            <div class="min-w-0">
                <p class="font-label-lg text-on-surface truncate">{{ Auth::user()->name ?? 'Support User' }}</p>
                <p class="text-xs text-on-surface-variant opacity-70">{{ Auth::user()->department ?? 'Support Team' }}</p>
            </div>
        </div>
    </div>
</aside>
<header class="fixed top-0 left-0 w-full h-16 bg-surface/80 backdrop-blur-md border-b border-outline-variant flex items-center justify-between z-40">
    <div class="flex items-center gap-md w-full max-w-[910px]">
        <button type="button" class="sm:hidden inline-flex items-center justify-center ml-2 h-10 w-10 rounded-lg border border-outline-variant bg-surface-container-highest" onclick="document.body.classList.toggle('mobile-sidebar-open')" aria-label="Open menu">
            <span class="material-symbols-outlined">menu</span>
        </button>
        <form method="GET" action="{{ url()->current() }}" class="relative w-full">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
            <input name="search" value="{{ request('search') }}" placeholder="Search tickets..." class="bg-surface-container border border-outline-variant/50 rounded-lg pl-10 pr-4 py-1.5 w-full focus:ring-2 focus:ring-primary focus:border-transparent transition-all font-body-md text-on-surface" />
        </form>
    </div>
    <div class="flex items-center gap-base ml-auto">
        @yield('header_actions')
        <div class="h-8 w-8 rounded-full bg-surface-container-highest overflow-hidden border border-outline-variant flex items-center justify-center text-xs font-bold text-primary">
            {{ strtoupper(substr(Auth::user()->name ?? 'SU', 0, 1)) }}
        </div>
    </div>
</header>
<main class="sm:ml-[280px] pt-16 min-h-screen bg-background">
    <div class="p-margin max-w-[1440px] mx-auto">
        @yield('content')
    </div>
</main>
</body>
</html>
