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

        Mail::to('admin@test.com')
            ->send(new UserRegistered($user));
    }
}
