<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CryptoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $template = $this->data['template'];
        $subject = ucfirst($template) . ' Notification';

        return $this->subject($subject)
            ->view("emails.{$template}")
            ->with(['data' => $this->data]);
    }
}
