<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VITALITY | High-Performance Activity Tracking</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-surface-variant": "#c7c4d7",
                    "tertiary-fixed": "#ffdcc5",
                    "outline-variant": "#464554",
                    "surface-container-lowest": "#0c0e13",
                    "on-tertiary-fixed-variant": "#703700",
                    "tertiary-container": "#d97721",
                    "inverse-surface": "#e2e2e9",
                    "secondary-fixed": "#f0dbff",
                    "on-secondary-container": "#d6a9ff",
                    "surface-container": "#1e1f25",
                    "on-secondary-fixed": "#2c0051",
                    "on-tertiary-container": "#452000",
                    "primary-container": "#8083ff",
                    "on-primary": "#1000a9",
                    "on-primary-fixed-variant": "#2f2ebe",
                    "primary-fixed": "#e1e0ff",
                    "on-error-container": "#ffdad6",
                    "inverse-on-surface": "#2e3036",
                    "on-background": "#e2e2e9",
                    "primary": "#c0c1ff",
                    "surface-tint": "#c0c1ff",
                    "secondary": "#ddb7ff",
                    "surface": "#111318",
                    "secondary-container": "#6f00be",
                    "on-primary-container": "#0d0096",
                    "on-primary-fixed": "#07006c",
                    "error": "#ffb4ab",
                    "surface-variant": "#33353a",
                    "secondary-fixed-dim": "#ddb7ff",
                    "on-tertiary-fixed": "#301400",
                    "on-surface": "#e2e2e9",
                    "surface-dim": "#111318",
                    "on-tertiary": "#4f2500",
                    "on-secondary-fixed-variant": "#6900b3",
                    "on-secondary": "#490080",
                    "outline": "#908fa0",
                    "surface-bright": "#37393f",
                    "background": "#111318",
                    "error-container": "#93000a",
                    "surface-container-low": "#1a1b21",
                    "tertiary-fixed-dim": "#ffb783",
                    "inverse-primary": "#494bd6",
                    "on-error": "#690005",
                    "primary-fixed-dim": "#c0c1ff",
                    "surface-container-high": "#282a2f",
                    "surface-container-highest": "#33353a",
                    "tertiary": "#ffb783"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "xs": "4px",
                    "sm": "8px",
                    "gutter": "24px",
                    "margin-desktop": "64px",
                    "xl": "48px",
                    "lg": "24px",
                    "max-width": "1280px",
                    "margin-mobile": "16px",
                    "base": "4px",
                    "md": "16px"
            },
            "fontFamily": {
                    "body-lg": ["Geist"],
                    "display-xl-mobile": ["Geist"],
                    "body-md": ["Geist"],
                    "label-sm": ["JetBrains Mono"],
                    "display-xl": ["Geist"],
                    "headline-md": ["Geist"],
                    "headline-lg": ["Geist"]
            },
            "fontSize": {
                    "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "display-xl-mobile": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.03em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                    "display-xl": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "1.4", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.02em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            background-color: #0D0F14;
            color: #e2e2e9;
            overflow-x: hidden;
        }

        .glass-card {
            background: rgba(22, 25, 32, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .primary-glow {
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.15);
        }

        .nav-blur {
            backdrop-filter: blur(16px);
        }

        .mesh-gradient {
            background: radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.15) 0px, transparent 50%),
                        radial-gradient(at 100% 100%, rgba(192, 193, 255, 0.1) 0px, transparent 50%);
        }

        .animate-subtle-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="font-body-md text-body-md antialiased selection:bg-primary-container selection:text-on-primary-container">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface/80 backdrop-blur-md border-b border-white/10">
<div class="flex justify-between items-center px-gutter max-w-max-width mx-auto h-16">
<div class="font-headline-md text-headline-md font-bold tracking-tighter text-primary">VITALITY</div>
<div class="hidden md:flex items-center gap-lg">
<a class="text-primary font-bold border-b-2 border-primary pb-1 transition-all duration-200" href="#top">Dashboard</a>
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="#features">Features</a>
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="#network">Network</a>
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="#insights">Insights</a>
</div>
<div class="flex items-center gap-md">
<div class="flex items-center gap-md">
                <a href="{{ route('register') }}" class="bg-primary text-on-primary px-lg py-sm rounded-lg font-bold transition-all active:scale-95 hover:brightness-110 inline-flex items-center justify-center">
                    Register
                </a>
                <a href="{{ route('login') }}" class="border border-white/20 text-white px-lg py-sm rounded-lg font-bold transition-all hover:bg-white/5 active:scale-95 inline-flex items-center justify-center">
                    Login
                </a>
            </div>
</div>
</div>
</nav>
<main class="pt-32 pb-xl mesh-gradient min-h-screen">
<!-- Hero Section -->
<section class="max-w-max-width mx-auto px-gutter text-center relative" id="top">
<!-- Background Glow Decor -->
<div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-primary/10 blur-[120px] pointer-events-none rounded-full"></div>
<h1 class="font-display-xl text-display-xl text-on-surface mb-md leading-tight max-w-4xl mx-auto">
                Precision Activity Tracking for <span class="text-primary">Performance Teams.</span>
</h1>
<p class="text-on-surface-variant font-body-lg text-body-lg mb-xl max-w-2xl mx-auto opacity-80">
                Experience the next evolution of productivity management. Deep focus meets real-time analytical power in a technical environment built for speed.
            </p>
<!-- CTAs -->
<div class="flex flex-col sm:flex-row items-center justify-center gap-md mb-xl">
<button onclick="location.href='{{ route('dashboard') }}'" class="w-full sm:w-auto bg-[#6366F1] text-white px-xl py-md rounded-lg font-bold primary-glow hover:brightness-110 transition-all active:scale-95">
                    Start Your Dashboard
                </button>
<button onclick="document.getElementById('network')?.scrollIntoView({behavior:'smooth',block:'start'})" class="w-full sm:w-auto border border-white/20 text-white px-xl py-md rounded-lg font-bold hover:bg-white/5 transition-all active:scale-95">
                    View Network
                </button>
<button class="w-full sm:w-auto text-on-surface-variant px-md py-md rounded-lg font-medium hover:bg-white/5 transition-all flex items-center gap-xs">
                    View Docs <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
<!-- Feature Tags -->
<div class="flex flex-wrap items-center justify-center gap-sm mt-lg">
<span class="font-label-sm text-label-sm py-xs px-md rounded-full bg-primary/10 text-primary border border-primary/20">
                    Built for Professional teams
                </span>
<span class="font-label-sm text-label-sm py-xs px-md rounded-full bg-white/5 text-on-surface-variant border border-white/10">
                    Designed for Clear workflows
                </span>
<span class="font-label-sm text-label-sm py-xs px-md rounded-full bg-white/5 text-on-surface-variant border border-white/10">
                    Ready to use With sample data
                </span>
</div>
</section>
<!-- Visualization Placeholder (Micro-Interaction) -->
<section class="max-w-max-width mx-auto px-gutter mt-xl">
<div class="relative w-full aspect-[21/9] rounded-xl glass-card overflow-hidden group">
<div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent opacity-40"></div>
<div class="absolute inset-0 flex items-center justify-center">
<div class="w-full h-full p-lg flex items-end gap-sm">
<!-- Simulated Sparklines -->
<div class="flex-1 h-[60%] rounded overflow-hidden border border-white/10"><img alt="Activity Tracker Dashboard" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMNAZHnX62X4sFjdhQ21zyUWov8jQjoTaVbAm6DNQ4bQ6n0wDKVW9ZNpDM9WPLHDNTiWOyX4RPxnNjGr9TwJYAktmzp3cbla5-A33e7qEeQZ7jY7EAaGxphKbA9YE8i8e53JrqocJEWX9aKordf7QXivYM0eu1x8LdGKXZAuSnBBOtavJnTomrudSssb_f_4pb-z0UkoOseH1PAAgxu1JmIaR958M25wEWn_z8AhnEUhlTYkqUGDSs6YRzw0qVKivo3v1BoeLGFXld"/></div>
<div class="flex-1 h-[40%] rounded overflow-hidden border border-white/10 hidden md:block"><img alt="Data Analytics Interface" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuATCMjFPUwAvU66CUNjJab0f1WOnOSV-sEZwivy-jeo9Hl7jSZttloWmWBoLmPrErHfirHycCPQQUeuzZQ45l1mG8dIbGoD2Lx4F0A_sKjBD4BkSEOY1-Bjkk3FxwozSucDlc3f_XrDx8MIq6Qwbb9BK3Flwt8VLPhfGRBzyBVD6V7slXginfeHlZa3YVWQJwYqk6evq15QI2fXWcCEFItVJdZnzlG2gooHyJMI7UAE8fKBsp5Y3I_jCkN4mrud5UCj1c8uovsBOLox"/></div>
<div class="flex-1 h-[80%] rounded overflow-hidden border border-white/10 hidden lg:block"><img alt="Performance Metrics Panel" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuZhhYA6PiYAEjmp1mhq-Hx5mM3kd6OL7gm1NMJCEsKUtyyNy-7-Vm0bQjcrRqWHKeha8Qc8ZoZA23b1w1gzcv6Tf6qBPm_j70GPpGddOZUUwn1_F4x2HInh9PcO1qzMEN-00WPTswd8zm3xrR7Mp0QWZZbUSbqou_LfbCX-rVt2Hw_nRDmjqVUf-XtYyyUtBfjjm-xIMq5OCApJ5fyl2MS7Kmsk-6FNltfpfY7GPQmaGzEnKtkwIXCec6oQFHb3t5TjMJq3rf6yO-"/></div>
</div>
</div>
<div class="absolute inset-0 border border-white/10 rounded-xl pointer-events-none group-hover:border-primary/30 transition-colors"></div>
</div>
</section>
<!-- What You Get Section -->

<section id="features" class="scroll-mt-24">

<!-- Embedded Features (from resources/views/features.blade.php) -->
<section class="pt-8 pb-xl px-gutter max-w-max-width mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-lg mb-10">
        <div class="md:col-span-8 glass-card rounded-xl p-lg flex flex-col md:flex-row gap-lg group">
            <div class="flex-1">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-lg">
                    <span class="material-symbols-outlined text-primary text-3xl">accessibility_new</span>
                </div>
                <h3 class="font-headline-lg text-headline-lg mb-md">Biomechanical Analysis</h3>
                <p class="font-body-md text-body-md text-on-surface-variant mb-lg">Leveraging high-frequency IMU sensors to map kinetic chains in real-time. Identify postural deviations, joint stress clusters, and gait efficiency with sub-millimeter precision.</p>
                <ul class="space-y-sm mb-lg">
                    <li class="flex items-center gap-sm font-label-sm text-label-sm text-on-surface"><span class="material-symbols-outlined text-primary text-md">check_circle</span> Real-time joint angle optimization</li>
                    <li class="flex items-center gap-sm font-label-sm text-label-sm text-on-surface"><span class="material-symbols-outlined text-primary text-md">check_circle</span> Asymmetry detection &amp; correction</li>
                    <li class="flex items-center gap-sm font-label-sm text-label-sm text-on-surface"><span class="material-symbols-outlined text-primary text-md">check_circle</span> Force production mapping</li>
                </ul>
                <button class="flex items-center gap-xs font-label-sm text-label-sm text-primary hover:gap-sm transition-all" type="button">EXPLORE ENGINE <span class="material-symbols-outlined text-sm">arrow_forward</span></button>
            </div>
            <div class="flex-1 relative min-h-[300px] bg-surface-container-lowest rounded-lg border border-outline-variant overflow-hidden">
                <img class="absolute inset-0 w-full h-full object-cover mix-blend-luminosity opacity-40 group-hover:opacity-60 transition-opacity" alt="Biomechanical Analysis" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7BUx9oDDlqPBs-hhk6aE3vSpXZ9iKVrLwDRmc3oyOukkhRw8Bfrl_Sg9ubaneY92g_5FEOE9HFR0BNA7vnDTrWto9yxEMuHyrbzvazKt2ll8Ewgupd-5sfRvw1IseE5DhHsLnBGSmDVG-i493srW-kpIDFxtTscd-zpx7WUPx5ovfSCjHS77D93DYmiGm7SYw2uAvrdmhlppgvQ3qNGAg-iZ_2JCcSIhsWvpZk6ZVfxpE_J3R3ggKreywpWdLqNg1mefdlMoZyYQ"/>
                <div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest via-transparent to-transparent"></div>
                <div class="absolute bottom-md left-md right-md">
                    <div class="h-1 bg-outline-variant rounded-full w-full overflow-hidden"><div class="h-full bg-primary w-3/4 animate-pulse"></div></div>
                    <div class="flex justify-between mt-xs font-label-sm text-[10px] text-primary/60"><span>KINETIC LOAD</span><span>84.2%</span></div>
                </div>
            </div>
        </div>

        <div class="md:col-span-4 glass-card rounded-xl p-lg flex flex-col group">
            <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center mb-lg">
                <span class="material-symbols-outlined text-secondary text-3xl">psychology</span>
            </div>
            <h3 class="font-headline-md text-headline-md mb-md">Neural Recovery</h3>
            <p class="font-body-md text-body-md text-on-surface-variant mb-xl">Deep tracking of HRV and CNS fatigue indicators to predict your readiness for high-intensity cognitive and physical load.</p>
            <div class="mt-auto relative h-40 w-full rounded-lg bg-surface-container-low border border-white/5 flex items-center justify-center overflow-hidden">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-24 h-24 rounded-full border-2 border-secondary/20 flex items-center justify-center animate-float">
                        <div class="w-16 h-16 rounded-full border-2 border-secondary/40 flex items-center justify-center"><span class="material-symbols-outlined text-secondary text-4xl" style="font-variation-settings: 'FILL' 1;">bolt</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:col-span-4 glass-card rounded-xl p-lg flex flex-col group">
            <div class="w-12 h-12 bg-tertiary/10 rounded-lg flex items-center justify-center mb-lg">
                <span class="material-symbols-outlined text-tertiary text-3xl">timeline</span>
            </div>
            <h3 class="font-headline-md text-headline-md mb-md">Predictive Performance</h3>
            <p class="font-body-md text-body-md text-on-surface-variant mb-xl">Our AI model anticipates plateau points and overtraining risks 72 hours before they occur, allowing for proactive adjustments.</p>
        </div>

        <div class="md:col-span-8 glass-card rounded-xl p-lg flex flex-col md:flex-row items-center gap-xl">
            <div class="flex-1 order-2 md:order-1">
                <h3 class="font-headline-lg text-headline-lg mb-md">Universal Ecosystem</h3>
                <p class="font-body-md text-body-md text-on-surface-variant mb-lg">VITALITY syncs seamlessly with over 250+ enterprise health platforms and specialized lab equipment. Export RAW clinical data for your physician or coach instantly.</p>
                <div class="grid grid-cols-2 gap-md">
                    <div class="p-md rounded-lg bg-surface-container border border-outline-variant/30 flex items-center gap-sm"><span class="material-symbols-outlined text-primary">hub</span><span class="font-label-sm text-label-sm">REST API v2</span></div>
                    <div class="p-md rounded-lg bg-surface-container border border-outline-variant/30 flex items-center gap-sm"><span class="material-symbols-outlined text-primary">security</span><span class="font-label-sm text-label-sm">ENCRYPTED</span></div>
                </div>
            </div>
            <div class="flex-1 order-1 md:order-2 w-full flex justify-center">
                <div class="relative w-48 h-48">
                    <div class="absolute inset-0 border-2 border-dashed border-primary/20 rounded-full animate-[spin_20s_linear_infinite]"></div>
                    <div class="absolute inset-4 border border-primary/40 rounded-full animate-[spin_12s_linear_infinite_reverse]"></div>
                    <div class="absolute inset-0 flex items-center justify-center"><div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center backdrop-blur-md border border-primary/50"><span class="material-symbols-outlined text-primary text-4xl">sync</span></div></div>
                    <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-8 h-8 bg-surface border border-outline-variant rounded shadow-xl flex items-center justify-center"><span class="material-symbols-outlined text-[16px] text-on-surface-variant">health_metrics</span></div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="mt-xl py-xl bg-surface-container-low/50">
<div class="max-w-max-width mx-auto px-gutter grid lg:grid-cols-2 gap-xl items-center">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-md">What You Get</h2>
<p class="text-on-surface-variant font-body-lg text-body-lg mb-lg opacity-80">
                        VITALITY provides a surgical set of tools designed to remove noise and amplify output. Every interface element is optimized for high-speed interaction.
                    </p>
<ul class="space-y-md">
<li class="flex items-start gap-md">
<div class="mt-1 w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-primary text-[16px]">check</span>
</div>
<div>
<p class="font-headline-sm text-[18px] text-on-surface">Universal Latency-Free Syncing</p>
<p class="text-label-sm text-on-surface-variant">Changes reflect across all team nodes in under 50ms.</p>
</div>
</li>
<li class="flex items-start gap-md">
<div class="mt-1 w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-primary text-[16px]">check</span>
</div>
<div>
<p class="font-headline-sm text-[18px] text-on-surface">Encrypted Local Persistence</p>
<p class="text-label-sm text-on-surface-variant">Your data stays fast by living close to your browser.</p>
</div>
</li>
<li class="flex items-start gap-md">
<div class="mt-1 w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-primary text-[16px]">check</span>
</div>
<div>
<p class="font-headline-sm text-[18px] text-on-surface">Deep Tool Integration</p>
<p class="text-label-sm text-on-surface-variant">Connect your existing development or design stack natively.</p>
</div>
</li>
</ul>
</div>
<div class="relative">
<div class="aspect-square glass-card rounded-xl flex items-center justify-center overflow-hidden">
<img alt="Performance Analytics Dashboard" class="w-full h-full object-cover opacity-40 mix-blend-luminosity hover:opacity-60 transition-opacity" data-alt="A sleek and technical dark mode analytics dashboard interface shown on a high-resolution display in a dimly lit, modern workspace. The UI features vibrant indigo-colored sparklines, data grids with glowing status chips, and a minimalist sidebar. The overall mood is professional, high-fidelity, and technologically advanced, echoing the premium dark SaaS brand identity with subtle glassmorphism effects and sharp typography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDydq1PJxdxIeZZIkwW19_0VaQbszTOHM4shGoTvcOyLz2j1PMhjLFw29VznY7kOrux_n-8s45PPJfOhYQ9-5Tcfq2_DWh3uPe1TgThrnRzg-fcal62LxAbndjtjLzt8d2UJ3vBdN1IbFH4TEO8EMvGnhl5OfiCtZiHHu_DOYg67O5ATOAVG2ZXJHIHnn7uMEN9HjPR4J8JID8V4g-6uGFA8EYDEeAXZb2l3uEgE0reluG6ylpCrIrVvThNekHCHxSgSHGcbgc88L-C"/>
</div>
</div>
</div>
</section>
<!-- Feature Cards -->
<section class="max-w-max-width mx-auto px-gutter mt-xl">
<div class="grid md:grid-cols-3 gap-lg">
<!-- Card 1 -->
<div class="glass-card p-xl rounded-xl hover:bg-white/5 transition-all group border border-white/5">
<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-lg group-hover:primary-glow transition-all">
<span class="material-symbols-outlined text-primary" data-icon="bolt">bolt</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-sm">Instant updates</h3>
<p class="text-on-surface-variant opacity-70">Experience zero-delay state changes across all platforms. Our custom streaming engine ensures real-time parity.</p>
</div>
<!-- Card 2 -->
<div class="glass-card p-xl rounded-xl hover:bg-white/5 transition-all group border border-white/5">
<div class="w-12 h-12 rounded-lg bg-secondary/10 flex items-center justify-center mb-lg group-hover:shadow-[0_0_20px_rgba(221,183,255,0.15)] transition-all">
<span class="material-symbols-outlined text-secondary" data-icon="visibility">visibility</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-sm">Task visibility</h3>
<p class="text-on-surface-variant opacity-70">Granular tracking with high-level visual summaries. Know exactly where your team stands at a glance.</p>
</div>
<!-- Card 3 -->
<div class="glass-card p-xl rounded-xl hover:bg-white/5 transition-all group border border-white/5">
<div class="w-12 h-12 rounded-lg bg-tertiary/10 flex items-center justify-center mb-lg group-hover:shadow-[0_0_20px_rgba(255,183,131,0.15)] transition-all">
<span class="material-symbols-outlined text-tertiary" data-icon="auto_awesome_motion">auto_awesome_motion</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-sm">Built to scale</h3>
<p class="text-on-surface-variant opacity-70">Architected for enterprise-grade throughput. Handle millions of activity data points without breaking a sweat.</p>
</div>
</div>
</section>
</main>

<!-- Embedded Insights + Network sections -->
<section id="insights" class="mt-xl py-xl bg-surface-container-low/50 scroll-mt-24">
    <div class="max-w-max-width mx-auto px-gutter">
        <header class="flex flex-col md:flex-row md:items-end justify-between mb-lg gap-md">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Performance Insights</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Deep-dive into your physiological strain and recovery cycles.</p>
            </div>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-lg">
            <section class="md:col-span-8 glass-card p-lg rounded-xl flex flex-col gap-md">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-headline-md text-headline-md">Recovery Score Trends</h3>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">HEART RATE VARIABILITY &amp; RESTING HEART RATE</p>
                    </div>
                    <div class="flex items-center gap-md">
                        <div class="flex items-center gap-base">
                            <div class="w-3 h-3 rounded-full bg-primary"></div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Recovery</span>
                        </div>
                        <div class="flex items-center gap-base">
                            <div class="w-3 h-3 rounded-full bg-secondary"></div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Baseline</span>
                        </div>
                    </div>
                </div>
                <div class="h-64 w-full relative mt-md">
                    <svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewBox="0 0 800 200">
                        <defs>
                            <linearGradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
                                <stop offset="0%" stop-color="#c0c1ff" stop-opacity="0.2"></stop>
                                <stop offset="100%" stop-color="#c0c1ff" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                        <line stroke="rgba(255,255,255,0.05)" stroke-width="1" x1="0" x2="800" y1="0" y2="0"></line>
                        <line stroke="rgba(255,255,255,0.05)" stroke-width="1" x1="0" x2="800" y1="50" y2="50"></line>
                        <line stroke="rgba(255,255,255,0.05)" stroke-width="1" x1="0" x2="800" y1="100" y2="100"></line>
                        <line stroke="rgba(255,255,255,0.05)" stroke-width="1" x1="0" x2="800" y1="150" y2="150"></line>
                        <line stroke="rgba(255,255,255,0.1)" stroke-width="1" x1="0" x2="800" y1="200" y2="200"></line>
                        <path d="M0,150 Q100,120 200,160 T400,100 T600,140 T800,80 L800,200 L0,200 Z" fill="url(#chartGradient)"></path>
                        <path class="chart-glow" d="M0,150 Q100,120 200,160 T400,100 T600,140 T800,80" fill="none" stroke="#c0c1ff" stroke-width="3"></path>
                        <line stroke="#ddb7ff" stroke-dasharray="8 4" stroke-width="1.5" x1="0" x2="800" y1="130" y2="130"></line>
                        <circle class="pulse-soft" cx="400" cy="100" fill="#c0c1ff" r="5"></circle>
                    </svg>
                </div>
                <div class="flex justify-between font-label-sm text-label-sm text-on-surface-variant pt-base">
                    <span>Nov 01</span><span>Nov 08</span><span>Nov 15</span><span>Nov 22</span><span>Nov 29</span>
                </div>
            </section>
            <section class="md:col-span-4 glass-card p-lg rounded-xl flex flex-col gap-md">
                <h3 class="font-headline-md text-headline-md">Workload Balance</h3>
                <p class="font-label-sm text-label-sm text-on-surface-variant">TRAINING VS. CAPACITY</p>
                <div class="flex flex-col gap-lg items-center py-md">
                    <div class="relative w-40 h-40">
                        <svg class="w-full h-full transform -rotate-90" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" fill="none" r="45" stroke="rgba(255,255,255,0.05)" stroke-width="8"></circle>
                            <circle class="chart-glow" cx="50" cy="50" fill="none" r="45" stroke="#6f00be" stroke-dasharray="283" stroke-dashoffset="70" stroke-linecap="round" stroke-width="8"></circle>
                        </svg>
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <span class="font-display-xl text-headline-lg">1.2</span>
                            <span class="font-label-sm text-label-sm text-secondary">OPTIMAL</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section id="network" class="mt-xl py-xl bg-surface-container-low/50 scroll-mt-24">
    <div class="max-w-max-width mx-auto px-gutter">
        <header class="flex flex-col md:flex-row justify-between items-end gap-md mb-xl">
            <div class="space-y-base">
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Network Ecosystem</h2>
            </div>
        </header>
        <div class="grid grid-cols-12 gap-lg">
            <section class="col-span-12 lg:col-span-8 h-[500px] relative rounded-xl overflow-hidden glass-card group">
                <div class="absolute inset-0 bg-[#0D0F14] opacity-50 z-0"></div>
                <div class="absolute inset-0 z-10">
                    <img alt="Network" class="w-full h-full object-cover opacity-60 mix-blend-screen grayscale group-hover:scale-105 transition-transform duration-[10s]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzbLUN2slzJG_RXKFaXVPQIS49QObgzYDpE_H9XnUDerLPi8nUBZYwAKrJWtAluMbGkBknOvr8k_7trXzsg0-MH8v8GDLvTqA3XUEkEtwWJngU3B9fnnsmfuTUkL3uKMfzN5Huinimsa8CSpTjerTyIlueOQQ8_KufcI-HkWhyAROAbNOZSg240vEnPSxg_MCciNLy-13Exwgtr1mMQmP0CKLZFcJSJVo-_Kx8Pd9HmL4DA0370MIK5vy_Bsa998IIyfcx7V2m6rM"/>
                </div>
                <div class="absolute inset-0 z-20 p-lg pointer-events-none flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <div class="bg-surface/60 backdrop-blur-md border border-white/5 p-md rounded-lg pointer-events-auto">
                            <h3 class="font-label-sm text-label-sm text-on-surface mb-xs">REAL-TIME FLOW</h3>
                            <div class="flex items-center gap-sm">
                                <div class="w-32 h-1 bg-white/10 rounded-full overflow-hidden"><div class="h-full bg-primary w-[75%] animate-pulse"></div></div>
                                <span class="font-label-sm text-label-sm text-primary">7.2 GB/s</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-surface/40 backdrop-blur-sm border-t border-white/5 -mx-lg p-lg flex justify-around">
                        <div class="text-center"><p class="font-label-sm text-label-sm text-on-surface-variant">NODE DENSITY</p><p class="font-body-lg text-body-lg text-on-surface font-bold">1,024 High</p></div>
                        <div class="text-center"><p class="font-label-sm text-label-sm text-on-surface-variant">LATENCY</p><p class="font-body-lg text-body-lg text-on-surface font-bold">14ms AVG</p></div>
                        <div class="text-center"><p class="font-label-sm text-label-sm text-on-surface-variant">ANOMALIES</p><p class="font-body-lg text-body-lg text-error font-bold">0 Detected</p></div>
                    </div>
                </div>
            </section>
            <section class="col-span-12 lg:col-span-4 glass-card rounded-xl flex flex-col max-h-[500px]">
                <div class="p-md border-b border-white/10 flex justify-between items-center">
                    <h2 class="font-headline-md text-headline-md text-on-surface">Activity Feed</h2>
                    <span class="px-sm py-[2px] bg-primary/10 text-primary font-label-sm rounded-lg">LIVE</span>
                </div>
                <div class="flex-1 overflow-y-auto custom-scrollbar p-md space-y-md">
                    <div class="flex gap-md group">
                        <div class="relative">
                            <div class="w-10 h-10 rounded-full overflow-hidden border border-primary/30">
                                <img alt="Avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqtXQ_fJ6fvJgxUrrvpp-S_YUuKpjXn_sNqkyNXDrP-slkGJBlkpu9Y3MS-jsSXVfh3N_25iilDqvPP0e3Xa--OL--lYEgGee95hw3AHU9BD6B_kIBREo54UtduNec6uQe0ZyOpg9hoKV89CvOS2KvssgLFEfuE224bt9-haNcWoP30m1fNlkmFawXuqqsmJBOLdTk0zqnvLROtRemh1IsL8CpmGl32a8wuYt5EXYxQNN0t8o--W7c8vJhJmvJKtf4J_462kj6Ya0"/>
                            </div>
                        </div>
                        <div class="flex-1 border-b border-white/5 pb-md">
                            <div class="flex justify-between items-start mb-base"><span class="font-body-md font-bold text-on-surface">Alex Rivera</span><span class="font-label-sm text-on-surface-variant">2m ago</span></div>
                            <p class="text-on-surface-variant text-sm">Completed "Peak Flow" Session (94% Efficiency)</p>
                        </div>
                    </div>
                </div>
                <button class="p-md text-primary font-label-sm uppercase hover:bg-primary/5 transition-all w-full text-center" type="button">View Entire Feed</button>
            </section>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="w-full py-xl bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant">
<div class="flex flex-col md:flex-row justify-between items-center px-gutter max-w-max-width mx-auto gap-md">
<div class="flex flex-col items-center md:items-start">
<div class="font-headline-sm text-headline-sm font-bold text-on-surface">VITALITY PERFORMANCE</div>
<p class="text-label-sm text-on-surface-variant opacity-60">High-Fidelity Productivity Stack</p>
</div>
<div class="flex gap-lg">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-all" href="#">Privacy</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-all" href="#">Terms</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-all" href="#">API</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-all" href="#">Support</a>
</div>
<div class="font-label-sm text-label-sm text-on-surface-variant opacity-50">
                © 2024 VITALITY PERFORMANCE. ALL RIGHTS RESERVED.
            </div>
</div>
</footer>
<script>
        // Simple micro-interaction for feature cards
        document.querySelectorAll('.glass-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });
    </script>
</body></html>


