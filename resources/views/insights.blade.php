<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VITALITY | Insights Analytics</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=JetBrains+Mono:wght@100..800&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
        }
        .chart-glow { filter: drop-shadow(0 0 8px rgba(99, 102, 241, 0.4)); }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
        .pulse-soft { animation: pulse-soft 3s infinite; }
        @keyframes pulse-soft { 0%, 100% { opacity: 0.6; } 50% { opacity: 1; } }
    </style>
</head>
<body class="custom-scrollbar overflow-x-hidden">
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface/80 backdrop-blur-md border-b border-white/10 h-16">
<div class="flex justify-between items-center px-gutter max-w-max-width mx-auto h-full">
<div class="font-headline-md text-headline-md font-bold tracking-tighter text-primary">VITALITY</div>
<div class="hidden md:flex gap-lg items-center">
<a class="font-body-md text-body-md text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="#">Dashboard</a>
<a class="font-body-md text-body-md text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="#">Features</a>
<a class="font-body-md text-body-md text-primary font-bold border-b-2 border-primary pb-1 transition-colors duration-200" href="#">Network</a>
<a class="font-body-md text-body-md text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="#">Insights</a>
</div>
<button class="hidden md:block bg-primary text-on-primary font-body-md px-md py-base rounded-lg transition-all active:scale-95">Register</button>
</div>
</nav>
<main class="mt-20 px-gutter max-w-max-width mx-auto pb-xl">
<header class="flex flex-col md:flex-row md:items-end justify-between mb-lg gap-md">
<div>
<h1 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Performance Insights</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Deep-dive into your physiological strain and recovery cycles.</p>
</div>
<div class="flex gap-sm">
<button class="bg-surface-container-high px-md py-sm rounded-lg flex items-center gap-base font-label-sm text-label-sm border border-outline-variant hover:bg-surface-variant transition-all">
<span class="material-symbols-outlined text-[18px]">calendar_today</span>
                    Last 30 Days
                    <span class="material-symbols-outlined text-[18px]">expand_more</span>
</button>
<button class="bg-primary text-on-primary px-md py-sm rounded-lg flex items-center gap-base font-label-sm text-label-sm hover:opacity-90 transition-all">
<span class="material-symbols-outlined text-[18px]">download</span>
                    Export PDF
</button>
</div>
</header>
<div class="grid grid-cols-1 md:grid-cols-12 gap-lg">
<section class="md:col-span-8 glass-card p-lg rounded-xl flex flex-col gap-md">
<div class="flex justify-between items-center">
<div>
<h3 class="font-headline-md text-headline-md">Recovery Score Trends</h3>
<p class="font-label-sm text-label-sm text-on-surface-variant">HEART RATE VARIABILITY & RESTING HEART RATE</p>
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
<svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 800 200">
<defs>
<lineargradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#c0c1ff" stop-opacity="0.2"></stop>
<stop offset="100%" stop-color="#c0c1ff" stop-opacity="0"></stop>
</lineargradient>
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
<div class="absolute left-1/2 top-10 transform -translate-x-1/2 bg-surface-container-high border border-outline-variant p-sm rounded shadow-lg">
<span class="font-label-sm text-label-sm block text-on-surface-variant">Nov 14</span>
<span class="font-headline-md text-headline-md text-primary">88%</span>
</div>
</div>
<div class="flex justify-between font-label-sm text-label-sm text-on-surface-variant pt-base">
<span>Nov 01</span>
<span>Nov 08</span>
<span>Nov 15</span>
<span>Nov 22</span>
<span>Nov 29</span>
</div>
</section>
<section class="md:col-span-4 glass-card p-lg rounded-xl flex flex-col gap-md">
<h3 class="font-headline-md text-headline-md">Workload Balance</h3>
<p class="font-label-sm text-label-sm text-on-surface-variant">TRAINING VS. CAPACITY</p>
<div class="flex flex-col gap-lg items-center py-md">
<div class="relative w-40 h-40">
<svg class="w-full h-full transform -rotate-90" viewbox="0 0 100 100">
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
</main>
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant w-full py-xl mt-xl">
<div class="flex flex-col md:flex-row justify-between items-center px-gutter max-w-max-width mx-auto gap-md">
<div class="font-headline-sm text-headline-sm font-bold text-on-surface">VITALITY PERFORMANCE</div>
<div class="flex gap-lg">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Privacy</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Terms</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">API</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Support</a>
</div>
<div class="font-label-sm text-label-sm text-on-surface-variant opacity-80 uppercase tracking-widest">
                © 2024 VITALITY PERFORMANCE. ALL RIGHTS RESERVED.
</div>
</div>
</footer>
<script>
        console.log('Vitality Insights Dashboard initialized.');
</script>
</body></html>

