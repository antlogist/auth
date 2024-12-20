<?php

namespace App\Listeners;

use App\Mail\UserRegistered;
use Illuminate\Auth\Events\Registered as EventsRegistered;
use Illuminate\Support\Facades\Mail;

class SendRegisterNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EventsRegistered $event): void
    {

        $user = $event->user;
        $adminEmail = config('admin.email');

        Mail::to($adminEmail)
            ->send(new UserRegistered($user));
    }
}
