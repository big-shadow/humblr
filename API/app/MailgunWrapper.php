<?php
/**
 * Created by PhpStorm.
 * User: rw
 * Date: 12/03/18
 * Time: 3:57 PM
 */

namespace App;

use Bogardo\Mailgun\Facades\Mailgun;

class MailgunWrapper implements MailerInterface
{
    public function sendEmail($template, $name, $email, $subject, $data = [])
    {
        Mailgun::send('emails.welcome', $data, function ($message) use ($name, $email, $subject) {
            $message->to($email, $name)->subject($subject);
        });
    }

    public function createMailingList($subdomain, $vendor_id, $vendor_title)
    {
        Mailgun::api()->post('lists', [
            'address' => $subdomain . '@' . env('MAILGUN_DOMAIN'),
            'name' => $vendor_id . " - " . $vendor_title
        ]);
    }

    public function addUserToMailingList($list, $email, $name)
    {
        Mailgun::api()->post("lists/" . $list . "/members", [
            'address' => $email,
            'name' => $name,
            'subscribed' => 'yes',
            'upsert' => 'yes'
        ]);
    }
}