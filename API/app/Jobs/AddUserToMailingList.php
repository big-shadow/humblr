<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\App;

class AddUserToMailingList implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $list;
    public $email;
    public $name;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($list, $email, $name)
    {
        $this->list = $list;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailer = App::make('MailerInterface');
        $mailer->addUserToMailingList($this->list, $this->email, $this->name);
    }
}
