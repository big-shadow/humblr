<?php
/**
 * Created by PhpStorm.
 * User: rw
 * Date: 12/03/18
 * Time: 3:56 PM
 */

namespace App;

interface MailerInterface
{
    public function sendEmail($template, $name, $email, $subject, $data = []);

    public function createMailingList($subdomain, $vendor_id, $vendor_title);

    public function addUserToMailingList($list, $email, $name);
}