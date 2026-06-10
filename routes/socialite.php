<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialAuthController;

Route::get('auth/google/redirect', [SocialAuthController::class, 'redirectToGoogle'])
    ->name('google.redirect');

Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback'])
    ->name('google.callback');

