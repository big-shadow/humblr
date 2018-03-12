<?php

namespace App\Listeners;

use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Events\NewVendor;
use App\Jobs\AddUserToMailingList;
use App\Jobs\CreateMailingList;
use App\Jobs\SendEmail;

class NewVendorJobs
{
    use DispatchesJobs;

    /**
     * Handle the event.
     *
     * @param  NewVendor $event
     * @return void
     */
    public function handle(NewVendor $event)
    {
        $createMailingListJob = new CreateMailingList(
            $event->vendor->subdomain,
            $event->vendor->id,
            $event->vendor->title
        );

        $addToListJob = new AddUserToMailingList(
            env('MAILGUN_NEWSLETTER_ALIAS'),
            $event->user->email,
            $event->user->name
        );

        $createMailingListJob->withChain([
            $addToListJob
        ])->dispatch();

        $sendEmail = new SendEmail(
            'emails.welcome',
            $event->user->name,
            $event->user->email,
            'Welcome to ' . env('APP_NAME') . ', ' . $event->user->name . '.',
            ['name' => $event->user->name, 'email' => $event->user->email]
        );

        $this->dispatch($sendEmail);
    }
}
