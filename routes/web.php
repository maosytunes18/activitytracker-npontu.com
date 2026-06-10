<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

/*
|----------------------------------------
| CLEAN ROUTES (NO BROKEN REFERENCES)
|----------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/notifications', [\App\Http\Controllers\NotificationsController::class, 'index'])
        ->name('notifications.index');

    Route::post('/notifications/mark-all-read', [\App\Http\Controllers\NotificationsController::class, 'markAllRead'])
        ->name('notifications.markAllRead');




    Route::get('/activities', [ActivityController::class, 'index'])
        ->name('activities.index');

    Route::get('/activities/create', [ActivityController::class, 'create'])
        ->name('activities.create');

    Route::post('/activities', [ActivityController::class, 'store'])
        ->name('activities.store');

    Route::get('/activities/{activity}', [ActivityController::class, 'show'])
        ->name('activities.show');

    Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])
        ->name('activities.edit');

    Route::put('/activities/{activity}', [ActivityController::class, 'update'])
        ->name('activities.update');

    Route::delete('/activities/{activity}', [ActivityController::class, 'destroy'])
        ->name('activities.destroy');

    Route::post('/activities/{activity}/updates', [\App\Http\Controllers\ActivityUpdateController::class, 'store'])
        ->name('activities.updates.store');

    Route::get('/tickets', [TicketController::class, 'index'])
        ->name('tickets.index');


    Route::get('/reports', [ReportController::class, 'index'])
        ->name('reports.index');

    Route::get('/reports/export.csv', [ReportController::class, 'exportCsv'])
        ->name('reports.export.csv');

    Route::get('/reports/print', [ReportController::class, 'print'])
        ->name('reports.print');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/features.php';
require __DIR__.'/socialite.php';


