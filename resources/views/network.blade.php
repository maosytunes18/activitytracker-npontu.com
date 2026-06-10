<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Vitality | Network Intelligence</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=JetBrains+Mono:wght@100..800&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=JetBrains+Mono:wght@100..900&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
            overflow-x: hidden;
        }
        .glass-card {
            background: rgba(22, 25, 32, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="font-body-md text-body-md">
<!-- TopNavBar Navigation Shell -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface/80 backdrop-blur-md border-b border-white/10 h-16">
<div class="flex justify-between items-center px-gutter max-w-max-width mx-auto h-full">
<div class="font-headline-md text-headline-md font-bold tracking-tighter text-primary">VITALITY</div>
<div class="hidden md:flex items-center gap-lg">
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="{{ route('dashboard') }}">Dashboard</a>
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="/features">Features</a>
<a class="text-primary font-bold border-b-2 border-primary pb-1" href="/network">Network</a>
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200" href="/insights">Insights</a>
</div>
<a href="{{ route('register') }}" class="bg-primary text-on-primary px-md py-sm rounded-xl font-label-sm uppercase tracking-wider transition-all active:scale-95 hover:opacity-90">Register</a>
</div>
</nav>
<main class="pt-24 pb-xl px-gutter max-w-max-width mx-auto">
<header class="flex flex-col md:flex-row justify-between items-end gap-md mb-xl">
<div class="space-y-base">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-primary text-[18px]" style="font-variation-settings: 'FILL' 1;">hub</span>
<span class="font-label-sm text-label-sm text-primary uppercase tracking-[0.2em]">Global Intelligence</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface">Network Ecosystem</h1>
</div>
<div class="flex gap-md w-full md:w-auto">
<div class="glass-card px-lg py-md flex-1 md:flex-none min-w-[160px] rounded-xl">
<p class="font-label-sm text-label-sm text-on-surface-variant mb-base">ACTIVE CONNECTIONS</p>
<p class="font-headline-md text-headline-md text-primary">12,842</p>
</div>
<div class="glass-card px-lg py-md flex-1 md:flex-none min-w-[160px] rounded-xl relative overflow-hidden">
<p class="font-label-sm text-label-sm text-on-surface-variant mb-base">NETWORK SYNC</p>
<div class="flex items-center gap-sm">
<p class="font-headline-md text-headline-md text-tertiary">99.8%</p>
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
</div>
<div class="absolute bottom-0 left-0 h-1 bg-tertiary/20 w-full">
<div class="h-full bg-tertiary w-[99.8%] shadow-[0_0_8px_rgba(255,183,131,0.5)]"></div>
</div>
</div>
</div>
</header>
<div class="grid grid-cols-12 gap-lg">
<section class="col-span-12 lg:col-span-8 h-[500px] relative rounded-xl overflow-hidden glass-card group">
<div class="absolute inset-0 bg-[#0D0F14] opacity-50 z-0"></div>
<div class="absolute inset-0 z-10">
<img alt="Network Flow Visualization" class="w-full h-full object-cover opacity-60 mix-blend-screen grayscale group-hover:scale-105 transition-transform duration-[10s]" data-alt="" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzbLUN2slzJG_RXKFaXVPQIS49QObgzYDpE_H9XnUDerLPi8nUBZYwAKrJWtAluMbGkBknOvr8k_7trXzsg0-MH8v8GDLvTqA3XUEkEtwWJngU3B9fnnsmfuTUkL3uKMfzN5Huinimsa8CSpTjerTyIlueOQQ8_KufcI-HkWhyAROAbNOZSg240vEnPSxg_MCciNLy-13Exwgtr1mMQmP0CKLZFcJSJVo-_Kx8Pd9HmL4DA0370MIK5vy_Bsa998IIyfcx7V2m6rM"/>
</div>
<div class="absolute inset-0 z-20 p-lg pointer-events-none flex flex-col justify-between">
<div class="flex justify-between items-start">
<div class="bg-surface/60 backdrop-blur-md border border-white/5 p-md rounded-lg pointer-events-auto">
<h3 class="font-label-sm text-label-sm text-on-surface mb-xs">REAL-TIME FLOW</h3>
<div class="flex items-center gap-sm">
<div class="w-32 h-1 bg-white/10 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[75%] animate-pulse"></div>
</div>
<span class="font-label-sm text-label-sm text-primary">7.2 GB/s</span>
</div>
</div>
<div class="flex gap-sm pointer-events-auto">
<button class="w-10 h-10 rounded-full bg-surface/80 border border-white/10 flex items-center justify-center hover:bg-primary/20 transition-all"><span class="material-symbols-outlined text-[20px]">fullscreen</span></button>
<button class="w-10 h-10 rounded-full bg-surface/80 border border-white/10 flex items-center justify-center hover:bg-primary/20 transition-all"><span class="material-symbols-outlined text-[20px]">settings</span></button>
</div>
</div>
<div class="bg-surface/40 backdrop-blur-sm border-t border-white/5 -mx-lg p-lg flex justify-around">
<div class="text-center">
<p class="font-label-sm text-label-sm text-on-surface-variant">NODE DENSITY</p>
<p class="font-body-lg text-body-lg text-on-surface font-bold">1,024 High</p>
</div>
<div class="text-center">
<p class="font-label-sm text-label-sm text-on-surface-variant">LATENCY</p>
<p class="font-body-lg text-body-lg text-on-surface font-bold">14ms AVG</p>
</div>
<div class="text-center">
<p class="font-label-sm text-label-sm text-on-surface-variant">ANOMALIES</p>
<p class="font-body-lg text-body-lg text-error font-bold">0 Detected</p>
</div>
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
<img alt="Athlete Avatar" class="w-full h-full object-cover" data-alt="" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqtXQ_fJ6fvJgxUrrvpp-S_YUuKpjXn_sNqkyNXDrP-slkGJBlkpu9Y3MS-jsSXVfh3N_25iilDqvPP0e3Xa--OL--lYEgGee95hw3AHU9BD6B_kIBREo54UtduNec6uQe0ZyOpg9hoKV89CvOS2KvssgLFEfuE224bt9-haNcWoP30m1fNlkmFawXuqqsmJBOLdTk0zqnvLROtRemh1IsL8CpmGl32a8wuYt5EXYxQNN0t8o--W7c8vJhJmvJKtf4J_462kj6Ya0"/>
</div>
<span class="absolute -bottom-1 -right-1 w-4 h-4 bg-[#0D0F14] rounded-full flex items-center justify-center"><span class="material-symbols-outlined text-primary text-[10px]" style="font-variation-settings: 'FILL' 1;">bolt</span></span>
</div>
<div class="flex-1 border-b border-white/5 pb-md">
<div class="flex justify-between items-start mb-base"><span class="font-body-md font-bold text-on-surface">Alex Rivera</span><span class="font-label-sm text-on-surface-variant">2m ago</span></div>
<p class="text-on-surface-variant text-sm">Completed "Peak Flow" Session (94% Efficiency)</p>
</div>
</div>
<div class="flex gap-md group">
<div class="relative">
<div class="w-10 h-10 rounded-full overflow-hidden border border-white/10">
<img alt="Athlete Avatar" class="w-full h-full object-cover" data-alt="" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAY5lnj0LTeaxzqsplJZGsyeCfmYW2Wirkd5wPq1x4houupkejTGMmLeADGq7cXyiPCjxGrQEbLMZGleY3szQdRgbwW48wYcWj5bHb_WJT9PDF39y-qZko6D6Up9X7LRC1KQYX1mORiIRAsPEs8CU5g33dGCRrv-HEw0XTH4Gbi6YzFUapPSEvJ4cihS_ZkGBGm1zZyb38IDcfh_EyAaUaAHin-Oj_FKLJT4x_3h6ZoeNDHWyPX5XY70M_gOgBtVcYbrGBobW9WVg0"/>
</div>
<span class="absolute -bottom-1 -right-1 w-4 h-4 bg-[#0D0F14] rounded-full flex items-center justify-center"><span class="material-symbols-outlined text-tertiary text-[10px]" style="font-variation-settings: 'FILL' 1;">sync</span></span>
</div>
<div class="flex-1 border-b border-white/5 pb-md">
<div class="flex justify-between items-start mb-base"><span class="font-body-md font-bold text-on-surface">Jordan Chen</span><span class="font-label-sm text-on-surface-variant">15m ago</span></div>
<p class="text-on-surface-variant text-sm">Synchronized biometric data from 3 nodes.</p>
</div>
</div>
<div class="flex gap-md group">
<div class="relative">
<div class="w-10 h-10 rounded-full overflow-hidden border border-white/10">
<img alt="Athlete Avatar" class="w-full h-full object-cover" data-alt="" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA08aoUDOEB6X5uiGeqjEkCC_oQuSX1zDCLpMlISDwayRjNJ0OexGn-Qd1u1qUxlvgnIrkeUTE5_HdToFKlssR_LEoReEaTmtkR6gSlom9zupMRig07ybASAbZ7wnUUJxCUGyvia-oI3gzMsjbUhdbljWS1rmLOb2NJIQZRYoNWW9UqgDckLViPO7mHHrMO6rWTHc0umyGGhKivzPW1mGoYRNEM1HbUaEcV4eHRMz0OCGVogN9l4TNKENPHGk5B11sRdpjffl38BDE"/>
</div>
<span class="absolute -bottom-1 -right-1 w-4 h-4 bg-[#0D0F14] rounded-full flex items-center justify-center"><span class="material-symbols-outlined text-primary text-[10px]" style="font-variation-settings: 'FILL' 1;">group</span></span>
</div>
<div class="flex-1 border-b border-white/5 pb-md">
<div class="flex justify-between items-start mb-base"><span class="font-body-md font-bold text-on-surface">Marcus Thorne</span><span class="font-label-sm text-on-surface-variant">42m ago</span></div>
<p class="text-on-surface-variant text-sm">Established a new connection with "Omega Team".</p>
</div>
</div>
</div>
<button class="p-md text-primary font-label-sm uppercase hover:bg-primary/5 transition-all w-full text-center">View Entire Feed</button>
</section>
<section class="col-span-12 glass-card rounded-xl overflow-hidden p-lg">
<div class="flex justify-between items-center mb-lg">
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Global Athlete Grid</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Real-time performance clusters across all zones.</p>
</div>
<div class="flex gap-sm bg-surface/50 p-1 rounded-xl border border-white/10">
<button class="px-md py-sm bg-primary text-on-primary rounded-lg font-label-sm transition-all">Map View</button>
<button class="px-md py-sm hover:bg-white/5 text-on-surface-variant rounded-lg font-label-sm transition-all">Grid View</button>
</div>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-md">
<div class="group relative aspect-square rounded-xl overflow-hidden cursor-pointer"><img alt="Athlete" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 grayscale hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcqk3Ea8G52pL8bmcLTy1zGn8dAr2YfYILlwy898dQ0lBYZ-Y4xCR7XKTMMW1eag4gWujH3y7leX0YO4LNP72Fg9lxFLycpPUWd3FDQ9HtR-HuDe3iro2R1s_h4VNDQIhINpQQUp0uadyvznW9Ygt4iIEnGhMBNtFStvDEllzoLxsIg07TNec4OGSJ-5ZeuZS8l5JWtVPrv_XaT6M50LiMIAONhNu7pjcE3TnMmwe2rnb6ZSXRZnhs3ItdlLnXNbIwETiJfD8yAC4"/><div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent opacity-80"></div><div class="absolute bottom-md left-md right-md"><p class="font-label-sm text-primary mb-xs">LONDON</p><p class="font-body-md font-bold text-on-surface">S. Varma</p></div></div>
<div class="group relative aspect-square rounded-xl overflow-hidden cursor-pointer"><img alt="Athlete" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 grayscale hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7-_yjcd6U-WroebwYfgn8NUP0I9e1EMwKSQW3rXj3tdyXA0VwB6f92AwQv_9gv0sDgbFG5_POF6tSQINokynbXjaoMwUSfGMdTIR_fsnm9gn5T1cXlfYmzTM24RipoQ-4P7dlUWuk5xrR1_s-X9EtIed3YgQ4aUAPxeuvfH89CaohnDmMlXDViX44-cEkb0dy6Q4QiANyJp0RdhOGjmUmKqZso1DdodmBkrx1oZq-7IeJgsIP-is1QJELEqc5MbCiGP3T5K-aiaw"/><div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent opacity-80"></div><div class="absolute bottom-md left-md right-md"><p class="font-label-sm text-primary mb-xs">TOKYO</p><p class="font-body-md font-bold text-on-surface">K. Tanaka</p></div></div>
<div class="group relative aspect-square rounded-xl overflow-hidden cursor-pointer"><img alt="Athlete" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 grayscale hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdDEZmZR4laFZMhB68-yaFdzJ6rjYNJCYo-yLlhz3sUENp6qBL3CuxD1fv8ZFfgb8sUyaa8CCgSuoM4p1lQ57DHD08Z53o-EVByxR6j4YLdzWFQ6WEVwFYcQ_XS1Kq4dHC8QvA4VsS8lpxtqaChpCusgTIyraGn3Rjb1-u2-1Q9fATPNCeGNAgssZrZjm-zfZBN-qV_9B_q5Pc_bmEeOv4nbraOQEOauc0XbHJ5d5b1ZVB6Q9xAUxPk56GwYI_AxP0JkMTdsuA9ew"/><div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent opacity-80"></div><div class="absolute bottom-md left-md right-md"><p class="font-label-sm text-primary mb-xs">NEW YORK</p><p class="font-body-md font-bold text-on-surface">J. Miller</p></div></div>
<div class="group relative aspect-square rounded-xl overflow-hidden cursor-pointer"><img alt="Athlete" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 grayscale hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAj7cGfv23cxhnheRPfkj2yodymOxeDmeBmbjy58UGj1iDB56PrJ_wBCyfkm4QG3xgeQP-jVinUqV9EPjHOTqfCOwXE3mMDtczWYV8V88H_4jpch105brxtEzk5H1E-bYd8aMfB6ML72133yvEeoIrqCSPmmxC-1zxM-9ns-7OWS7YP86qPO-jEDuxOeaoxXprM235hVdYqM8rbhLEZG2aeBMy7YyDc4zr7-CzTuwb7OGx7t91xWWsXOxQKxMvKv-qaSeAKOarilwc"/><div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent opacity-80"></div><div class="absolute bottom-md left-md right-md"><p class="font-label-sm text-primary mb-xs">BERLIN</p><p class="font-body-md font-bold text-on-surface">H. Weber</p></div></div>
<div class="group relative aspect-square rounded-xl overflow-hidden cursor-pointer"><img alt="Athlete" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 grayscale hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxm6vefAzYcpXFeKmIIU7XGMpq4Ac33jCidCSDnC0Iu9aOQam4YEgqwT7xWOTLdP0-0k6Bw6CMcCEAOa49sGcyeTHaOAFSWZ0JjodhTJS9hVRwuI18dVKjuKMoIGqFgkuXpl1DDvfzF7v2bRT8YgD7zJoPaYRugkQfQmIyIRpZRax4dCtu5780oOVFZc9YbKk2F1QuQqFZJDLf1VJfkxhih6ehIkn9OHX6ByUqPb2pHL6bKr5lz_A6HfAQ5D-CB5-oGhrR8pmfaoc"/><div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent opacity-80"></div><div class="absolute bottom-md left-md right-md"><p class="font-label-sm text-primary mb-xs">PARIS</p><p class="font-body-md font-bold text-on-surface">C. Dubois</p></div></div>
</div>
</section>
</div>
</main>
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant w-full py-xl mt-xl">
<div class="flex flex-col md:flex-row justify-between items-center px-gutter max-w-max-width mx-auto gap-md">
<div class="font-headline-sm text-headline-sm font-bold text-on-surface">VITALITY</div>
<div class="flex gap-lg">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Privacy</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Terms</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">API</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary underline transition-all" href="#">Support</a>
</div>
<div class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest opacity-80">© 2024 VITALITY PERFORMANCE. ALL RIGHTS RESERVED.</div>
</div>
</footer>
<script>
        document.addEventListener('mousemove', (e) => {
            document.querySelectorAll('.glass-card').forEach(card => {
                const rect = card.getBoundingClientRect();
                card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
                card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
            });
        });
    </script>
</body></html>

