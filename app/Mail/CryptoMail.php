<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CryptoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $template;
    public $cryptoType;
    public $quantity;

    public function __construct($template, $cryptoType, $quantity)
    {
        $this->template = $template;
        $this->cryptoType = $cryptoType;
        $this->quantity = $quantity;
    }

    public function build()
    {
        $subject = match ($this->template) {
            'giveaway' => 'Crypto Giveaway Notification',
            'airdrop' => 'Crypto Airdrop Confirmation',
            'refund' => 'Crypto Refund Processed',
        };

        $view = match ($this->template) {
            'giveaway' => 'emails.giveaway',
            'airdrop' => 'emails.airdrop',
            'refund' => 'emails.refund',
        };

        return $this->subject($subject)
            ->view($view)
            ->with([
                'cryptoType' => $this->cryptoType,
                'quantity' => $this->quantity,
            ]);
    }
}
