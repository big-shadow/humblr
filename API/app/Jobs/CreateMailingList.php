<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateMailingList implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $subdomain;
    public $vendor_id;
    public $vendor_title;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($subdomain, $vendor_id, $vendor_title)
    {
        $this->subdomain = $subdomain;
        $this->vendor_id = $vendor_id;
        $this->vendor_title = $vendor_title;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailer = App::make('MailerInterface');
        $mailer->createMailingList($this->subdomain, $this->vendor_id, $this->vendor_title);
    }
}
