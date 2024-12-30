<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Spatie\Activitylog\Models\Activity;

class UserEventSubscriber
{
    /**
     * Handle user login events.
     */
    public function handleUserLogin(Login $event): void {
        $user = Auth::user();
        $ip = Request::ip();
        activity()
            ->causedBy($user)
            ->performedOn($user)
            ->event('log in')
            ->withProperties(['attributes' => [
                "IP Address" => $ip,
            ]])
            ->log('User Logged in');
    }

    /**
     * Handle user logout events.
     */
    public function handleUserLogout(Logout $event): void {
        $user = Auth::user();
        activity()
            ->causedBy($user)
            ->performedOn($user)
            ->event('log out')
            ->log('User Logged out');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @return array<string, string>
     */
    public function subscribe(Dispatcher $events): array
    {
        return [
            Login::class => 'handleUserLogin',
            Logout::class => 'handleUserLogout',
        ];
    }
}
