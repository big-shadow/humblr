<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\App;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $template;
    public $name;
    public $email;
    public $subject;
    public $data = [];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($template, $name, $email, $subject, $data)
    {
        $this->template = $template;
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailer = App::make('MailerInterface');
        $mailer->sendEmail($this->template, $this->name, $this->email, $this->subject, $this->data);
    }
}
