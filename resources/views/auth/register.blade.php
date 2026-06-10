<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VITALITY | Register</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<!-- Geist Font simulation via standard sans for execution -->
<style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        :root {
            --font-geist: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        body {
            font-family: var(--font-geist);
            background-color: #111318;
            color: #e2e2e9;
            overflow-x: hidden;
        }
        .glass-panel {
            background: rgba(22, 25, 32, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .glow-indigo {
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.15);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface-container-low": "#1a1b21",
                      "on-error-container": "#ffdad6",
                      "primary": "#c0c1ff",
                      "outline": "#908fa0",
                      "inverse-on-surface": "#2e3036",
                      "on-tertiary-fixed": "#301400",
                      "on-surface": "#e2e2e9",
                      "surface-container-high": "#282a2f",
                      "secondary": "#ddb7ff",
                      "primary-fixed": "#e1e0ff",
                      "surface-container-highest": "#33353a",
                      "on-tertiary": "#4f2500",
                      "primary-fixed-dim": "#c0c1ff",
                      "inverse-surface": "#e2e2e9",
                      "tertiary": "#ffb783",
                      "on-primary-fixed": "#07006c",
                      "surface-tint": "#c0c1ff",
                      "surface-variant": "#33353a",
                      "tertiary-container": "#d97721",
                      "surface-dim": "#111318",
                      "surface": "#111318",
                      "on-secondary": "#490080",
                      "secondary-fixed-dim": "#ddb7ff",
                      "secondary-fixed": "#f0dbff",
                      "outline-variant": "#464554",
                      "secondary-container": "#6f00be",
                      "surface-container-lowest": "#0c0e13",
                      "primary-container": "#8083ff",
                      "on-error": "#690005",
                      "tertiary-fixed": "#ffdcc5",
                      "on-primary": "#1000a9",
                      "tertiary-fixed-dim": "#ffb783",
                      "error-container": "#93000a",
                      "surface-bright": "#37393f",
                      "on-primary-container": "#0d0096",
                      "inverse-primary": "#494bd6",
                      "on-tertiary-fixed-variant": "#703700",
                      "on-secondary-container": "#d6a9ff",
                      "background": "#111318",
                      "surface-container": "#1e1f25",
                      "on-background": "#e2e2e9",
                      "on-tertiary-container": "#452000",
                      "on-primary-fixed-variant": "#2f2ebe",
                      "on-secondary-fixed-variant": "#6900b3",
                      "on-secondary-fixed": "#2c0051",
                      "error": "#ffb4ab",
                      "on-surface-variant": "#c7c4d7"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "xs": "4px",
                      "lg": "24px",
                      "xl": "48px",
                      "margin-desktop": "64px",
                      "base": "4px",
                      "max-width": "1280px",
                      "gutter": "24px",
                      "sm": "8px",
                      "md": "16px",
                      "margin-mobile": "16px"
              },
              "fontFamily": {
                      "display-xl": ["Inter", "sans-serif"],
                      "body-lg": ["Inter", "sans-serif"],
                      "headline-lg": ["Inter", "sans-serif"],
                      "label-sm": ["JetBrains+Mono", "monospace"],
                      "headline-md": ["Inter", "sans-serif"],
                      "body-md": ["Inter", "sans-serif"]
              },
              "fontSize": {
                      "display-xl-mobile": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.03em", "fontWeight": "700"}],
                      "display-xl": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                      "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                      "label-sm": ["12px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                      "headline-md": ["24px", {"lineHeight": "1.4", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                      "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}]
              }
            },
          },
        }
      </script>
</head>
<body class="min-h-screen bg-background text-on-surface">
<!-- TopAppBar Simplified for Registration -->
<header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-margin-desktop py-md bg-transparent backdrop-blur-md">
<div class="font-display-xl text-display-xl font-bold tracking-tighter text-on-surface">VITALITY</div>
<div class="flex items-center gap-lg">
<span class="font-label-sm text-label-sm text-on-surface-variant hidden md:block">ALREADY HAVE AN ACCOUNT?</span>
<a class="font-label-sm text-label-sm text-primary hover:text-white transition-colors" href="{{ route('login') }}">Sign In</a>
</div>
</header>
<main class="flex flex-col md:flex-row min-h-screen pt-24 md:pt-0">
<!-- Left Side: Registration Form -->
<section class="w-full md:w-[45%] flex flex-col justify-center px-margin-mobile md:px-margin-desktop py-xl">
<div class="max-w-md w-full mx-auto space-y-xl">
<div class="space-y-sm">
<h1 class="font-headline-lg text-headline-lg text-on-surface">Ignite Your Precision.</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Join the ecosystem for high-performance activity tracking and deep biomechanical insights.</p>
</div>
<form class="space-y-lg" method="POST" action="{{ route('register') }}">
@csrf
<div class="space-y-md">
<div class="group">
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs group-focus-within:text-primary transition-colors" for="name">FULL NAME</label>
<input class="w-full bg-surface-container-lowest border-outline-variant focus:border-primary focus:ring-0 rounded-lg text-body-md p-md transition-all" placeholder="John Doe" type="text" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"/>
</div>
<div class="group">
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs group-focus-within:text-primary transition-colors" for="email">WORK EMAIL</label>
<input class="w-full bg-surface-container-lowest border-outline-variant focus:border-primary focus:ring-0 rounded-lg text-body-md p-md transition-all" placeholder="name@company.com" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email"/>
</div>
<div class="group">
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs group-focus-within:text-primary transition-colors" for="password">PASSWORD</label>
<input class="w-full bg-surface-container-lowest border-outline-variant focus:border-primary focus:ring-0 rounded-lg text-body-md p-md transition-all" placeholder="••••••••" type="password" id="password" name="password" required autocomplete="new-password"/>
</div>
</div>
<button class="w-full bg-[#6366f1] hover:bg-[#4f46e5] text-white font-headline-md text-headline-md py-md rounded-xl transition-all glow-indigo flex items-center justify-center gap-md" type="submit">
                        Create Account
                        <span class="material-symbols-outlined">arrow_forward</span>
</button>
<div class="relative py-md">
<div class="absolute inset-0 flex items-center"><div class="w-full border-t border-outline-variant"></div></div>
<div class="relative flex justify-center text-label-sm"><span class="px-md bg-background text-on-surface-variant">OR CONTINUE WITH</span></div>
</div>
<a href="{{ route('google.redirect') }}" class="w-full border border-outline-variant hover:bg-surface-container-high text-on-surface font-body-md text-body-md py-md rounded-xl transition-all flex items-center justify-center gap-md">
<svg class="w-5 h-5" viewbox="0 0 24 24">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="currentColor"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="currentColor"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.26.81-.58z" fill="currentColor"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="currentColor"></path>
</svg>
                        Sign up with Google
                    </a>
</form>
<p class="font-label-sm text-label-sm text-center text-on-surface-variant">
                    By proceeding, you agree to our <a class="text-primary hover:underline" href="#">Terms of Service</a> and <a class="text-primary hover:underline" href="#">Privacy Policy</a>.
                </p>
</div>
</section>
<!-- Right Side: Visual/Dashboard Preview -->
<section class="hidden md:flex w-[55%] bg-surface-container-lowest relative overflow-hidden items-center justify-center p-xl">
<!-- Background Decoration -->
<div class="absolute -top-1/4 -right-1/4 w-[800px] h-[800px] bg-[#6366f1]/5 rounded-full blur-[120px]"></div>
<div class="absolute -bottom-1/4 -left-1/4 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-[100px]"></div>
<div class="relative z-10 w-full max-w-4xl space-y-xl">
<!-- Preview Image Frame -->
<div class="glass-panel p-2 rounded-2xl shadow-2xl rotate-1 hover:rotate-0 transition-transform duration-700">
<img class="w-full h-auto rounded-xl object-cover grayscale-[30%] hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida/AP1WRLsoDX4n4dA89yI4SEIGiXzf3eYnVBXBmPEYz-AvWkc-b_m4wGzF8E4kr8dS6bTU-yAxcV682jZhYize9ZFVqmkggMXSnA-o-yKgMiCh2YDCXxnQQZCsYG3dhD9EpVkD6xPixff8xUSJdPKvQypdhNoTTIJXcRKhmLa1TnVtELR0QP_MAb3T-_vnIaCb91VnZuAWlyPidsC46xwov8mZDQTNFUR4AjK3jFbs2t2N8Z1ObT3IFfHBO1v0Oruq"/>
</div>
<!-- Testimonial / Features Overlay -->
<div class="grid grid-cols-2 gap-lg">
<div class="glass-panel p-lg rounded-xl space-y-sm">
<div class="flex items-center gap-sm text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">analytics</span>
<span class="font-label-sm text-label-sm">REAL-TIME ANALYTICS</span>
</div>
<p class="font-body-md text-on-surface">Sub-millisecond data synchronization across all your connected devices.</p>
</div>
<div class="glass-panel p-lg rounded-xl space-y-sm">
<div class="flex items-center gap-sm text-tertiary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">security</span>
<span class="font-label-sm text-label-sm">ENTERPRISE SECURITY</span>
</div>
<p class="font-body-md text-on-surface">End-to-end encryption for your most sensitive biometric activity data.</p>
</div>
</div>
<div class="pt-xl flex items-center gap-lg">
<div class="flex -space-x-4">
<img alt="" class="w-10 h-10 rounded-full border-2 border-surface-container-lowest" data-alt="A professional headshot of a female executive in her early 30s, looking directly at the camera with a confident smile. The background is a blurred office environment with cool blue and dark charcoal tones, matching a high-end corporate aesthetic. The lighting is soft and focused on her face, highlighting her sharp features and professional attire." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1oWGQlcCIWywoBo5LC0gc9eTMUAklrcCgPmqcP6xnj85jOzY4gnFiYNGRb-ptYmuXvfCytOLeeiODyyHtdaSV8I7-1YAvEJuXB5HoeXqfq7YRaQTcmsiIbOuQ55kTIKBBIzwBxzRoQhFRdSC1uJGhhBC_6YTqf0dgj6P2LwkXMb49xpSLq01XLVEbWPf-3iB_98sZSQ709zSsQhWmxgnMa0dyoPS4D4q3Uv_uZ2PNXdT5OwIbG5gO-CUFYs1mjpiQo5WfuvlSJ9NI"/>
<img alt="" class="w-10 h-10 rounded-full border-2 border-surface-container-lowest" data-alt="A close-up portrait of a male data scientist wearing a dark knit sweater and thin-framed glasses. He has a thoughtful expression, looking slightly off-camera. The lighting is low-key, with deep shadows and soft highlights in a premium dark-mode studio setting. The overall color palette is dominated by obsidian, indigo accents, and cool grey tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6QlFspTdilVPU-FwJZ_71YEMhwPb-Bsb4h573w1RlF4s7kxmgM3jRcxONZ9FpvE8HUOCsgia6znoxktaAJmrOapGxB939q3KAgFhYYcRI8SIZNa082HImx1cszZBaSfkdZEYxiytdHvPnAv4TFpcpD72-bQnD7YEtfpJgy1XNgbVc2klZnEFCRQDTUtLxPOhyfrhM8-RTtU1SHO537Oc3n5SmOtfc4iWK91E9BO2JKT5-pUQES84JzyjlrZA8bDvBRRMlzp9wAVML"/>
<img alt="" class="w-10 h-10 rounded-full border-2 border-surface-container-lowest" data-alt="A portrait of a young woman with a sleek, modern aesthetic, wearing a minimalist black outfit. She is laughing naturally in a tech-forward studio space with subtle geometric light patterns in the background. The mood is energetic and sophisticated, utilizing a dark-mode palette with vibrant indigo and violet glow effects to emphasize a digital lifestyle." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJP8eQd2edEEmoyej4PGCJnZve2Q45A87_UfT5ac-i63sJU7pHWmEKY3yzA-m985BqXJTA2BLTwNZdCSjCw-zm_ZlmgXRZTTLa4KutP0lRjNz_aSE5qyNuUoS_RXqrD39z3pctELEV0P02HGeNk0RyqcluC3s9jLe85VAZ1tbB7UKCxtaIX_fjEuAuKIlwJjEBelGR91mGHESd4SEAQw2A6yw_RWl4uhQ9h6T3Em5hIpiEiaQCdxarzhQ6VjySi_b7XMrVZAtGqKmN"/>
</div>
<p class="font-label-sm text-label-sm text-on-surface-variant">Trusted by 25,000+ athletes and professionals.</p>
</div>
</div>
</section>
</main>
<!-- Footer Integrated at Bottom of Form Side -->
<footer class="md:fixed bottom-0 left-0 md:w-[45%] w-full px-margin-mobile md:px-margin-desktop py-lg flex flex-col md:flex-row justify-between items-center gap-md bg-background md:bg-transparent">
<div class="font-label-sm text-label-sm text-on-surface-variant">© 2024 VITALITY Tracker. Precision in Motion.</div>
<div class="flex gap-lg">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-all" href="#">Privacy Policy</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-all" href="#">Terms</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-all" href="#">Support</a>
</div>
</footer>
<script>
        // Micro-interaction for input fields
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('label')?.classList.add('text-primary');
            });
            input.addEventListener('blur', () => {
                input.parentElement.querySelector('label')?.classList.remove('text-primary');
            });
        });
    </script>
</body></html>

