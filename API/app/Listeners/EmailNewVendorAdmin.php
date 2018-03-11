<?php

namespace App\Listeners;

use App\Events\NewVendor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Bogardo\Mailgun\Facades\Mailgun;

class EmailNewVendorAdmin implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  NewVendor $event
     * @return void
     */
    public function handle(NewVendor $event)
    {
        $data = [
            'name' => $event->user->email,
            'email' => $event->user->name,
        ];

        Mailgun::send('emails.welcome', $data, function ($message) use ($data) {
            $message->to($data['email'], $data['name'])
                ->subject('Welcome to ' . env('APP_NAME') . ', ' . $data['name'] . '.');
        });
    }
}
