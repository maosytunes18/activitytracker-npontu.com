<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VITALITY | Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=JetBrains+Mono:wght@100..800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-dim": "#111318",
                    "on-error-container": "#ffdad6",
                    "outline": "#908fa0",
                    "on-secondary-fixed-variant": "#6900b3",
                    "primary-container": "#8083ff",
                    "surface-container-lowest": "#0c0e13",
                    "primary-fixed": "#e1e0ff",
                    "surface-container-low": "#1a1b21",
                    "on-surface": "#e2e2e9",
                    "error-container": "#93000a",
                    "secondary": "#ddb7ff",
                    "surface-bright": "#37393f",
                    "tertiary-fixed": "#ffdcc5",
                    "surface-container-high": "#282a2f",
                    "secondary-fixed-dim": "#ddb7ff",
                    "on-secondary": "#490080",
                    "inverse-surface": "#e2e2e9",
                    "secondary-fixed": "#f0dbff",
                    "on-primary-fixed": "#07006c",
                    "outline-variant": "#464554",
                    "on-secondary-fixed": "#2c0051",
                    "inverse-on-surface": "#2e3036",
                    "on-background": "#e2e2e9",
                    "surface-container-highest": "#33353a",
                    "primary-fixed-dim": "#c0c1ff",
                    "primary": "#c0c1ff",
                    "surface-tint": "#c0c1ff",
                    "on-surface-variant": "#c7c4d7",
                    "background": "#111318",
                    "on-error": "#690005",
                    "error": "#ffb4ab",
                    "on-primary-fixed-variant": "#2f2ebe",
                    "surface": "#111318",
                    "surface-container": "#1e1f25",
                    "tertiary-container": "#d97721",
                    "surface-variant": "#33353a",
                    "on-tertiary-container": "#452000",
                    "on-primary-container": "#0d0096",
                    "secondary-container": "#6f00be",
                    "tertiary-fixed-dim": "#ffb783",
                    "on-tertiary-fixed": "#301400",
                    "on-secondary-container": "#d6a9ff",
                    "on-primary": "#1000a9",
                    "tertiary": "#ffb783",
                    "on-tertiary-fixed-variant": "#703700",
                    "on-tertiary": "#4f2500",
                    "inverse-primary": "#494bd6"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "margin-desktop": "64px",
                    "xl": "48px",
                    "gutter": "24px",
                    "lg": "24px",
                    "base": "4px",
                    "max-width": "1280px",
                    "md": "16px",
                    "margin-mobile": "16px",
                    "xs": "4px",
                    "sm": "8px"
            },
            "fontFamily": {
                    "headline-md": ["Geist"],
                    "label-sm": ["JetBrains+Mono"],
                    "body-md": ["Geist"],
                    "display-xl-mobile": ["Geist"],
                    "body-lg": ["Geist"],
                    "display-xl": ["Geist"],
                    "headline-lg": ["Geist"]
            },
            "fontSize": {
                    "headline-md": ["24px", {"lineHeight": "1.4", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "label-sm": ["12px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "display-xl-mobile": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.03em", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "display-xl": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                    "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.02em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            background-color: #111318;
            color: #e2e2e9;
            overflow: hidden;
        }

        .grid-pattern {
            background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 32px 32px;
        }

        .glass-card {
            background-color: #16181D;
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
        }

        .indigo-glow:focus-within {
            box-shadow: 0 0 15px 0 rgba(99, 102, 241, 0.2);
            border-color: #6366f1;
        }

        .animate-subtle-drift {
            animation: drift 20s linear infinite alternate;
        }

        @keyframes drift {
            from { background-position: 0% 0%; }
            to { background-position: 100% 100%; }
        }
    </style>
</head>
<body class="font-body-md text-body-md antialiased">
<main class="min-h-screen flex flex-col md:flex-row">
<!-- Left Panel: Brand & Atmosphere -->
<section class="hidden md:flex flex-1 relative flex-col justify-center items-start px-margin-desktop overflow-hidden bg-surface-dim">
<!-- Background Decoration -->
<div class="absolute inset-0 grid-pattern opacity-40 animate-subtle-drift pointer-events-none"></div>
<div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/10 rounded-full blur-[120px] pointer-events-none"></div>
<div class="absolute bottom-0 right-0 w-full h-1/2 bg-gradient-to-t from-primary/5 to-transparent pointer-events-none"></div>
<div class="relative z-10 space-y-md">
<div class="flex items-center gap-xs">
<span class="material-symbols-outlined text-primary text-[40px]" style="font-variation-settings: 'FILL' 1;">bolt</span>
<h1 class="font-headline-md text-headline-md font-bold tracking-tighter text-primary">VITALITY</h1>
</div>
<p class="font-display-xl text-display-xl max-w-xl">
                    Track your work.<br/>
<span class="text-on-surface-variant">Stay in flow.</span>
</p>
<div class="pt-lg">
<div class="flex items-center gap-sm">
<div class="flex -space-x-sm">
<div class="w-8 h-8 rounded-full border-2 border-surface-dim bg-surface-container-high flex items-center justify-center overflow-hidden">
<img alt="User" class="w-full h-full object-cover" data-alt="A portrait of a professional developer with a friendly expression, styled in a minimalist vector art fashion against a dark neutral background, consistent with a high-end tech dashboard aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAG5fPUqqFhWLKQ9eH3R64TzzgcdOc5UFE7JaRg50QTyNbW4BRO7IKyq-Dd-8XR6YpSlzPAymK-Qj-j9p3SHXv9p-cO-gF6bDsqjH5_oPjHdowlbN1odVghR77lj_uSPEdiq-Jwa4LDN3kMoMDkHrwbAxohFiGCUjw6b2DdRTiu_M63HkdKdAE8bg2wKr9X6YwtRBxFZaWVA0Yn7IfR2yu3ib3HEjks2km8K_hqImaOSH32-BwHkbc6c3KFytzvlQx_VlluXqOREZ4B"/>
</div>
<div class="w-8 h-8 rounded-full border-2 border-surface-dim bg-surface-container-high flex items-center justify-center overflow-hidden">
<img alt="User" class="w-full h-full object-cover" data-alt="A profile illustration of a creative professional woman wearing modern glasses, rendered in a crisp and clean digital art style using a palette of deep grays and indigo accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWQdlV2zdSH4YGKCxFx7Q4FF050qIFHW0Yzd7iANZOBn8ZoL7gctXfN2GeUEiorCXGk5FMG-KtvqFVaiE8_B2wwlW-fuL_B52qThmL0eH7IQQdU74nTGH1GmFJHqYgupjMrQtSm-OJBfSPRi--hh29azBez-NuawGtodwHmen9atT7MeN1vQlL-ch7kPEN1vIkhoiv4ifCI-PoqMTNUJztycxyhXbazwq7mx1iPK1QWNK2tEL4gsCmgRbS8Y4qD8uN67Cpi-kpKbzs"/>
</div>
<div class="w-8 h-8 rounded-full border-2 border-surface-dim bg-surface-container-high flex items-center justify-center overflow-hidden">
<img alt="User" class="w-full h-full object-cover" data-alt="A minimalist avatar of a focused software engineer, featuring clean lines and a sophisticated dark-mode color scheme, emphasizing professional clarity and technical expertise." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_1ZB9whp_wKG17-HFpeylq-tbmECaeAyy3DdwFDa980D0OA2Tm_xpzyiLdEBfm2cweyjFwpJ1MRbeECPdbaf22v2TymYLe0BW0q4bYmCI_LYZDgfzjU1sspwXRmWvTnOeZ1nAVcBQXKPhrQHNaPdtcDjNfq7SkEaIm7i8GK2WLndXvE6YPE1pAYY8GuF7qC49SEp_Xa5O5SaF0vW2QImvvgx4tAA8HTjlwDw1Sb0GqpuAsyh014xeeBJ-Q-M7Tn3UIypjkvBddsrL"/>
</div>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Join 50k+ achievers</span>
</div>
</div>
</div>
<!-- Footer for Left Panel -->
<footer class="absolute bottom-lg left-margin-desktop">
<p class="font-label-sm text-label-sm text-on-surface-variant/50">© 2024 VITALITY. Track your work. Stay in flow.</p>
</footer>
</section>
<!-- Right Panel: Login Form -->
<section class="flex-1 flex items-center justify-center p-margin-mobile md:p-margin-desktop bg-surface-container-lowest">
<div class="w-full max-w-md space-y-xl">
<!-- Logo for Mobile Only -->
<div class="md:hidden flex flex-col items-center gap-xs mb-lg">
<span class="material-symbols-outlined text-primary text-[48px]" style="font-variation-settings: 'FILL' 1;">bolt</span>
<h1 class="font-headline-md text-headline-md font-bold tracking-tighter text-primary">VITALITY</h1>
</div>
<div class="space-y-sm">
<h2 class="font-headline-lg text-headline-lg text-on-surface">LOGIN</h2>
<p class="font-body-md text-on-surface-variant">Welcome back. Enter your credentials to continue.</p>
</div>
<div class="glass-card p-xl rounded-xl space-y-lg shadow-2xl">
<form action="{{ route('login') }}" class="space-y-lg" method="POST">
@csrf
<!-- Email Field -->
<div class="space-y-xs group">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest group-focus-within:text-primary transition-colors" for="email">Email Address</label>
<div class="relative flex items-center bg-surface-dim border border-outline-variant rounded-lg transition-all duration-200 indigo-glow overflow-hidden">
<span class="material-symbols-outlined absolute left-md text-outline-variant group-focus-within:text-primary">mail</span>
<input class="w-full bg-transparent border-none py-md pl-xl pr-md text-on-surface placeholder:text-outline/40 focus:ring-0 outline-none" id="email" name="email" placeholder="name@company.com" required type="email" value="{{ old('email') }}" autofocus autocomplete="username"/>
</div>
</div>
<!-- Password Field -->
<div class="space-y-xs group">
<div class="flex justify-between items-end">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest group-focus-within:text-primary transition-colors" for="password">Password</label>
<a class="font-label-sm text-label-sm text-primary hover:text-primary-container transition-colors" href="{{ route('password.request') }}">Forgot Password?</a>
</div>
<div class="relative flex items-center bg-surface-dim border border-outline-variant rounded-lg transition-all duration-200 indigo-glow overflow-hidden">
<span class="material-symbols-outlined absolute left-md text-outline-variant group-focus-within:text-primary">lock</span>
<input class="w-full bg-transparent border-none py-md pl-xl pr-md text-on-surface placeholder:text-outline/40 focus:ring-0 outline-none" id="password" name="password" placeholder="••••••••" required type="password" autocomplete="current-password"/>
</div>
</div>
<!-- Remember Me -->
<div class="flex items-center gap-sm">
<label class="inline-flex items-center gap-xs cursor-pointer">
<input type="checkbox" class="rounded" name="remember" {{ old('remember') ? 'checked' : '' }}>
<span class="font-label-sm text-label-sm text-on-surface-variant">Remember me</span>
</label>
</div>
<!-- Login Button -->
<button class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-headline-md text-headline-md py-md rounded-full shadow-lg shadow-indigo-500/20 active:scale-[0.98] transition-all flex items-center justify-center gap-sm" type="submit">
                            Login
                            <span class="material-symbols-outlined">arrow_forward</span>
</button>
</form>
<div class="relative py-md">
<div class="absolute inset-0 flex items-center"><div class="w-full border-t border-outline-variant"></div></div>
<div class="relative flex justify-center text-label-sm uppercase tracking-widest"><span class="bg-[#16181D] px-md text-on-surface-variant/40">Or continue with</span></div>
</div>
<!-- Social Logins (visual only) -->
<div class="grid grid-cols-1 gap-md">
<a href="{{ route('google.redirect') }}" class="flex items-center justify-center gap-sm py-md border border-outline-variant rounded-lg hover:bg-white/5 transition-colors active:scale-[0.98]">
<svg class="w-5 h-5" viewbox="0 0 24 24">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="currentColor"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="currentColor"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="currentColor"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="currentColor"></path>
</svg>
<span class="font-label-sm text-label-sm">Google</span>
</a>
</div>
</div>
<div class="text-center pt-md">
<p class="font-body-md text-on-surface-variant">
                        Don't have an account?
                        <a class="text-primary font-bold hover:underline" href="{{ route('register') }}">Create Account</a>
</p>
</div>
</div>
</section>
</main>
<script>
        // Micro-interaction for input focus
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('border-primary');
            });
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('border-primary');
            });
        });
    </script>
</body></html>

