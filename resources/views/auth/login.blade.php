@php($appName = config('app.name', 'Activity Tracker'))

<!DOCTYPE html>
<html class="dark" lang="en"><head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', $appName) · SupportTrack</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css','resources/js/app.js'])

    <style>
        body {
            background-color: #111317;
            color: #e2e2e8;
            overflow-x: hidden;
        }
        .glass-card {
            background: rgba(26, 29, 35, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .glass-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3), 0 0 15px rgba(176, 198, 255, 0.05);
            border-color: rgba(176, 198, 255, 0.2);
        }
        .performance-glow {
            filter: drop-shadow(0 0 8px rgba(0, 238, 112, 0.4));
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="font-body-md text-body-md">
    <!-- Technical Background Layer -->
    <div class="fixed inset-0 z-0">
        <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-secondary-container/5 rounded-full blur-[120px]"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <main class="relative z-10 w-full max-w-[440px] px-8 pt-16 mx-auto">
        <!-- Brand Header -->
        <div class="text-center mb-10">
            <div class="inline-flex items-center gap-6 mb-6 group cursor-default">
                <div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center performance-glow group-hover:scale-110 transition-transform duration-300">
                    <span class="material-symbols-outlined text-on-primary-container !text-3xl" data-weight="fill">confirmation_number</span>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">SupportTrack</h1>
            </div>
            <p class="font-body-md text-on-surface-variant">Precision Support Admin Portal</p>
        </div>

        <!-- Login Card -->
        <div class="glass-card rounded-xl p-8 performance-glow">
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                @if (session('status'))
                    <div class="rounded-xl bg-emerald-500/10 ring-1 ring-emerald-400/20 px-4 py-3 text-sm text-emerald-200">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Email Field -->
                <div class="space-y-2">
                    <label class="font-label-lg text-label-lg text-on-surface-variant block ml-1" for="email">Specialist Email</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline !text-[20px]">mail</span>
                        <input
                            class="w-full h-14 pl-12 pr-4 bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg text-on-surface font-body-md transition-all outline-none"
                            id="email" name="email" placeholder="name@supporttrack.io" type="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                        />
                    </div>
                    @error('email')
                        <p class="text-sm text-error mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="space-y-2">
                    <div class="flex justify-between items-center px-1">
                        <label class="font-label-lg text-label-lg text-on-surface-variant block" for="password">Password</label>
                        @if (Route::has('password.request'))
                            <a class="font-label-md text-label-md text-primary hover:text-on-primary-fixed-variant transition-colors" href="{{ route('password.request') }}">Forgot Password?</a>
                        @else
                            <span class="font-label-md text-label-md text-primary/70">Forgot Password?</span>
                        @endif
                    </div>

                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline !text-[20px]">lock</span>
                        <input
                            class="w-full h-14 pl-12 pr-12 bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg text-on-surface font-body-md transition-all outline-none"
                            id="password" name="password" placeholder="••••••••••••" type="password" required autocomplete="current-password"
                        />
                        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors" type="button" aria-label="Toggle password visibility">
                            <span class="material-symbols-outlined !text-[20px]">visibility</span>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-sm text-error mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me Toggle -->
                <div class="flex items-center gap-4 px-1">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input class="sr-only peer" type="checkbox" name="remember" @checked(old('remember'))>
                        <div class="w-10 h-5 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-secondary-container"></div>
                    </label>
                    <span class="font-label-lg text-label-lg text-on-surface-variant">Remember Me</span>
                </div>

                <!-- Sign In Action -->
                <button class="w-full h-14 btn-gradient rounded-lg font-headline-md text-headline-md text-on-primary-container hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center gap-4 performance-glow shadow-primary-container/20" type="submit">
                    Sign In
                    <span class="material-symbols-outlined !text-[20px]">login</span>
                </button>

            </form>

            <footer class="mt-8 flex justify-between items-center px-2 opacity-70">
                <p class="font-label-md text-label-md">v2.4.0-build.82</p>
                <div class="flex gap-6">
                    <a class="font-label-md text-label-md hover:text-primary transition-colors" href="#">Privacy</a>
                    <a class="font-label-md text-label-md hover:text-primary transition-colors" href="#">Status</a>
                </div>
            </footer>
        </div>
    </main>

    <script>
        const toggleBtn = document.querySelector('button[type="button"]');
        const passwordInput = document.getElementById('password');
        const icon = toggleBtn?.querySelector('.material-symbols-outlined');

        toggleBtn?.addEventListener('click', () => {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.textContent = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                icon.textContent = 'visibility';
            }
        });
    </script>
</body>
</html>

