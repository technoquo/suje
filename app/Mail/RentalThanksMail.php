<?php

namespace App\Mail;

use App\Models\OrderItem;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\RentalItem;

class RentalThanksMail extends Mailable
{
    use Queueable, SerializesModels;

    public $item;

    public function __construct(OrderItem  $item)
    {
        $this->item = $item;
    }

    public function build()
    {
        return $this->subject('Merci pour votre retour !')
            ->view('emails.rental-thanks');
    }
}
