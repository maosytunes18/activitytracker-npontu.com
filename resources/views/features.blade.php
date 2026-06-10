<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Features | VITALITY</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/geist@1.3.0/dist/fonts/geist.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/jetbrains-mono@1.0.6/css/jetbrains-mono.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=JetBrains+Mono:wght@100..900&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "inverse-on-surface": "#2e3036",
                    "on-tertiary-fixed": "#301400",
                    "on-primary-fixed": "#07006c",
                    "surface-container-high": "#282a2f",
                    "on-primary-container": "#0d0096",
                    "surface-bright": "#37393f",
                    "inverse-surface": "#e2e2e9",
                    "surface-container": "#1e1f25",
                    "surface": "#111318",
                    "on-secondary-container": "#d6a9ff",
                    "on-tertiary-fixed-variant": "#703700",
                    "on-background": "#e2e2e9",
                    "inverse-primary": "#494bd6",
                    "on-surface-variant": "#c7c4d7",
                    "outline": "#908fa0",
                    "surface-container-lowest": "#0c0e13",
                    "on-error": "#690005",
                    "error": "#ffb4ab",
                    "surface-container-low": "#1a1b21",
                    "tertiary-fixed-dim": "#ffb783",
                    "tertiary-container": "#d97721",
                    "on-tertiary-container": "#452000",
                    "primary-fixed-dim": "#c0c1ff",
                    "surface-dim": "#111318",
                    "on-secondary-fixed-variant": "#6900b3",
                    "surface-container-highest": "#33353a",
                    "surface-variant": "#33353a",
                    "on-primary-fixed-variant": "#2f2ebe",
                    "on-primary": "#1000a9",
                    "secondary-fixed": "#f0dbff",
                    "primary-container": "#8083ff",
                    "tertiary-fixed": "#ffdcc5",
                    "surface-tint": "#c0c1ff",
                    "primary": "#c0c1ff",
                    "error-container": "#93000a",
                    "background": "#111318",
                    "tertiary": "#ffb783",
                    "outline-variant": "#464554",
                    "primary-fixed": "#e1e0ff",
                    "secondary-fixed-dim": "#ddb7ff",
                    "secondary-container": "#6f00be",
                    "secondary": "#ddb7ff",
                    "on-surface": "#e2e2e9",
                    "on-tertiary": "#4f2500",
                    "on-secondary-fixed": "#2c0051",
                    "on-secondary": "#490080",
                    "on-error-container": "#ffdad6"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "xl": "48px",
                    "lg": "24px",
                    "sm": "8px",
                    "base": "4px",
                    "md": "16px",
                    "margin-desktop": "64px",
                    "margin-mobile": "16px",
                    "gutter": "24px",
                    "xs": "4px",
                    "max-width": "1280px"
            },
            "fontFamily": {
                    "headline-lg": ["Geist"],
                    "display-xl-mobile": ["Geist"],
                    "body-md": ["Geist"],
                    "label-sm": ["JetBrains Mono"],
                    "body-lg": ["Geist"],
                    "headline-md": ["Geist"],
                    "display-xl": ["Geist"]
            },
            "fontSize": {
                    "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                    "display-xl-mobile": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.03em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "1.4", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "display-xl": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            background-color: #0D0F14;
            color: #e2e2e9;
            font-family: 'Geist', sans-serif;
        }
        .glass-card {
            background: rgba(22, 25, 32, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            border-color: rgba(99, 102, 241, 0.3);
            background: rgba(22, 25, 32, 0.9);
            transform: translateY(-4px);
        }
        .glow-accent {
            box-shadow: 0 0 20px 0 rgba(99, 102, 241, 0.15);
        }
    </style>
</head>
<body class="bg-surface overflow-x-hidden">
<header class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface/80 backdrop-blur-md border-b border-white/10 h-16">
<div class="flex justify-between items-center px-gutter max-w-max-width mx-auto h-full">
<a class="font-headline-md text-headline-md font-bold tracking-tighter text-primary" href="/">VITALITY</a>
<nav class="hidden md:flex gap-lg items-center">
<a class="font-body-md text-body-md text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="#">Dashboard</a>
<a class="font-body-md text-body-md text-primary font-bold border-b-2 border-primary pb-1 transition-colors duration-200" href="#">Features</a>
<a class="font-body-md text-body-md text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="#">Network</a>
<a class="font-body-md text-body-md text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="#">Insights</a>
</nav>
<div class="flex items-center gap-md">
<a href="{{ route('login') }}" class="px-md py-sm font-label-sm text-label-sm text-primary border border-primary/30 rounded-lg hover:bg-primary/10 transition-all active:scale-95">Sign In</a>
<a href="{{ route('register') }}" class="px-md py-sm font-label-sm text-label-sm bg-primary-container text-on-primary-container rounded-lg font-bold hover:opacity-90 transition-all active:scale-95">Register</a>
</div>
</div>
</header>
<main class="pt-32 pb-xl px-margin-mobile md:px-margin-desktop max-w-max-width mx-auto">
<section class="mb-32 text-center">
<span class="inline-block px-md py-xs rounded-full bg-primary/10 border border-primary/20 text-primary font-label-sm text-label-sm mb-md tracking-widest uppercase">Peak Human Performance</span>
<h1 class="font-display-xl text-display-xl md:text-display-xl mb-md leading-tight text-on-surface">Precision Intelligence <br/><span class="text-primary">for Human Capital.</span></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Go beyond simple metrics. Our proprietary biomechanical and neural mapping engine provides the highest-fidelity performance data ever made accessible to the individual.</p>
</section>
<div class="grid grid-cols-1 md:grid-cols-12 gap-lg mb-32">
<div class="md:col-span-8 glass-card rounded-xl p-lg flex flex-col md:flex-row gap-lg group">
<div class="flex-1">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-lg"><span class="material-symbols-outlined text-primary text-3xl">accessibility_new</span></div>
<h3 class="font-headline-lg text-headline-lg mb-md">Biomechanical Analysis</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-lg">Leveraging high-frequency IMU sensors to map kinetic chains in real-time. Identify postural deviations, joint stress clusters, and gait efficiency with sub-millimeter precision.</p>
<ul class="space-y-sm mb-lg">
<li class="flex items-center gap-sm font-label-sm text-label-sm text-on-surface"><span class="material-symbols-outlined text-primary text-md">check_circle</span> Real-time joint angle optimization</li>
<li class="flex items-center gap-sm font-label-sm text-label-sm text-on-surface"><span class="material-symbols-outlined text-primary text-md">check_circle</span> Asymmetry detection & correction</li>
<li class="flex items-center gap-sm font-label-sm text-label-sm text-on-surface"><span class="material-symbols-outlined text-primary text-md">check_circle</span> Force production mapping</li>
</ul>
<button class="flex items-center gap-xs font-label-sm text-label-sm text-primary hover:gap-sm transition-all">EXPLORE ENGINE <span class="material-symbols-outlined text-sm">arrow_forward</span></button>
</div>
<div class="flex-1 relative min-h-[300px] bg-surface-container-lowest rounded-lg border border-outline-variant overflow-hidden">
<img class="absolute inset-0 w-full h-full object-cover mix-blend-luminosity opacity-40 group-hover:opacity-60 transition-opacity" data-alt="" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7BUx9oDDlqPBs-hhk6aE3vSpXZ9iKVrLwDRmc3oyOukkhRw8Bfrl_Sg9ubaneY92g_5FEOE9HFR0BNA7vnDTrWto9yxEMuHyrbzvazKt2ll8Ewgupd-5sfRvw1IseE5DhHsLnBGSmDVG-i493srW-kpIDFxtTscd-zpx7WUPx5ovfSCjHS77D93DYmiGm7SYw2uAvrdmhlppgvQ3qNGAg-iZ_2JCcSIhsWvpZk6ZVfxpE_J3R3ggKreywpWdLqNg1mefdlMoZyYQ"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest via-transparent to-transparent"></div>
<div class="absolute bottom-md left-md right-md">
<div class="h-1 bg-outline-variant rounded-full w-full overflow-hidden"><div class="h-full bg-primary w-3/4 animate-pulse"></div></div>
<div class="flex justify-between mt-xs font-label-sm text-[10px] text-primary/60"><span>KINETIC LOAD</span><span>84.2%</span></div>
</div>
</div>
</div>
<div class="md:col-span-4 glass-card rounded-xl p-lg flex flex-col group">
<div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center mb-lg"><span class="material-symbols-outlined text-secondary text-3xl">psychology</span></div>
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
<div class="w-12 h-12 bg-tertiary/10 rounded-lg flex items-center justify-center mb-lg"><span class="material-symbols-outlined text-tertiary text-3xl">timeline</span></div>
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
<section class="glass-card rounded-xl p-xl text-center relative overflow-hidden">
<h2 class="font-headline-lg text-headline-lg mb-md">Ready for the Next Phase?</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xl mx-auto mb-xl">Join the VITALITY network and gain access to the most advanced human performance dashboard ever created.</p>
<div class="flex flex-col md:flex-row gap-md justify-center">
<button class="px-xl py-md bg-primary text-on-primary font-bold rounded-lg hover:opacity-90 transition-all active:scale-95">GET STARTED NOW</button>
<button class="px-xl py-md border border-outline text-on-surface font-bold rounded-lg hover:bg-white/5 transition-all active:scale-95">TALK TO A COACH</button>
</div>
</section>
</main>
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest w-full py-xl border-t border-outline-variant">
<div class="flex flex-col md:flex-row justify-between items-center px-gutter max-w-max-width mx-auto gap-md">
<div class="flex flex-col items-center md:items-start gap-sm">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">VITALITY</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">© 2024 VITALITY PERFORMANCE. ALL RIGHTS RESERVED.</span>
</div>
<div class="flex gap-lg">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Privacy</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Terms</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">API</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Support</a>
</div>
</div>
</footer>
</body></html>

