<?php

namespace App\Listeners;

use App\Events\NewVendor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Bogardo\Mailgun\Facades\Mailgun;

class AddNewVendorAdminToMarketingList implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  NewVendor $event
     * @return void
     */
    public function handle(NewVendor $event)
    {
        Mailgun::api()->post("lists/" . env('MAILGUN_NEWSLETTER_ALIAS') . "/members", [
            'address' => $event->user->email,
            'name' => $event->user->name,
            'subscribed' => 'yes',
            'upsert' => 'yes'
        ]);
    }
}
