<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Password Reset Successful | SupportTrack</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&amp;family=Geist:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>

<style>
        body {
            background-color: #0F1115;
            color: #e2e2e8;
        }
        .glass-panel {
            background: rgba(26, 29, 35, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .success-ring {
            animation: ring-pulse 2s infinite ease-in-out;
        }
        @keyframes ring-pulse {
            0% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.2; }
            100% { transform: scale(1); opacity: 0.5; }
        }
    </style>
</head>
<body class="min-h-screen flex flex-col font-body-md text-body-md overflow-hidden">
<header class="bg-surface border-b border-white/10 docked full-width top-0 z-50">
    <div class="flex justify-between items-center w-full px-margin py-base max-w-container-max mx-auto">
        <div class="font-display-md text-display-md font-extrabold text-primary">SupportTrack</div>
        <div class="flex items-center gap-md">
            <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-colors">help_outline</span>
            <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-colors">account_circle</span>
        </div>
    </div>
</header>

<main class="flex-grow flex items-center justify-center relative px-margin py-lg">
    <div class="absolute inset-0 z-0 opacity-20 pointer-events-none"></div>

    <div class="glass-panel w-full max-w-[480px] rounded-xl p-lg flex flex-col items-center text-center performance-glow relative z-10 transition-all duration-500 transform scale-100">
        <div class="relative mb-lg">
            <div class="success-ring absolute inset-0 bg-primary/20 rounded-full blur-xl"></div>
            <div class="w-24 h-24 rounded-full bg-primary-container/20 flex items-center justify-center relative">
                <span class="material-symbols-outlined text-primary text-[64px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            </div>
        </div>

        <h1 class="font-headline-lg text-headline-lg text-on-surface mb-sm">Password Reset Successful</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant mb-lg leading-relaxed">
            Your password has been updated. You can now sign in to your specialist account.
        </p>

        <button
            class="w-full py-md px-lg bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline-md rounded-lg hover:scale-[1.02] active:scale-95 transition-all duration-200 shadow-lg shadow-primary/20 mb-md"
            type="button"
            onclick="window.location.href='{{ route('login') }}'"
        >
            Sign In
        </button>

        <p class="font-label-md text-label-md text-on-surface-variant/60" id="redirect-timer">
            Redirecting in <span id="seconds">5</span> seconds...
        </p>

        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-1/2 h-[2px] bg-gradient-to-r from-transparent via-primary to-transparent opacity-30"></div>
    </div>
</main>

<footer class="bg-surface border-t border-white/5 full-width bottom-0">
    <div class="w-full py-lg px-margin flex flex-col md:flex-row justify-between items-center gap-md max-w-container-max mx-auto">
        <div class="font-label-lg text-label-lg text-on-surface">© 2024 SupportTrack Internal Systems. All rights reserved.</div>
        <div class="flex gap-md">
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors" href="#">Security Policy</a>
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors" href="#">Privacy Guard</a>
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors" href="#">System Status</a>
        </div>
    </div>
</footer>

<script>
        let count = 5;
        const timerElement = document.getElementById('seconds');
        const target = '{{ route('login') }}';

        const countdown = setInterval(() => {
            count--;
            if (timerElement) timerElement.textContent = count;
            if (count <= 0) {
                clearInterval(countdown);
                window.location.href = target;
            }
        }, 1000);

        document.addEventListener('mousemove', (e) => {
            const card = document.querySelector('.glass-panel');
            if (!card) return;
            const xAxis = (window.innerWidth / 2 - e.pageX) / 45;
            const yAxis = (window.innerHeight / 2 - e.pageY) / 45;
            card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
        });
    </script>
</body></html>

