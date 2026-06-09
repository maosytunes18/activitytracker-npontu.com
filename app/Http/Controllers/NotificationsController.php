<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        // Built-in Laravel database notifications
        $notificationsQuery = $user->notifications()->latest();

        $unreadCount = (clone $notificationsQuery)->whereNull('read_at')->count();

        $notifications = $notificationsQuery->paginate(15);


        return view('notifications.index', compact('notifications', 'unreadCount'));
    }

    public function markAllRead(Request $request)
    {
        $user = Auth::user();

        $user->unreadNotifications->markAsRead();

        return back()->with('status', 'Notifications marked as read.');
    }
}

