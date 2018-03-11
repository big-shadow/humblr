<?php

namespace App\Listeners;

use App\Events\NewVendor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Bogardo\Mailgun\Facades\Mailgun;

class QueueNewMailgunList implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  NewVendor $event
     * @return void
     */
    public function handle(NewVendor $event)
    {
        Mailgun::api()->post('lists', [
            'address' => $event->vendor->subdomain . '@' . env('MAILGUN_DOMAIN'),
            'name' => $event->vendor->id . " - " . $event->vendor->title
        ]);
    }
}
