<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SocialAuthController extends \Illuminate\Routing\Controller
{
    public function redirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')
            ->scopes(['email', 'profile'])
            ->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
        } catch (\Throwable $e) {
            Log::error('Google OAuth callback failed', [
                'error' => $e->getMessage(),
            ]);

            return redirect()->route('login')
                ->with('error', 'Google sign-in failed.');
        }

        $email = $googleUser->getEmail();
        $name = $googleUser->getName() ?? $googleUser->getNickname() ?? 'Google User';

        if (!$email) {
            return redirect()->route('login')
                ->with('error', 'Google did not provide an email address.');
        }

        $user = User::query()->where('email', $email)->first();

        if (!$user) {
            // Populate required fields with safe defaults.
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt(bin2hex(random_bytes(24))),
                'employee_id' => $request->input('employee_id') ?: 'google-' . bin2hex(random_bytes(4)),
                'department' => 'General',
                'phone' => $googleUser->getPhone() ?: null,
            ]);
        }

        auth()->login($user, true);

        return redirect()->intended('/dashboard');
    }
}

