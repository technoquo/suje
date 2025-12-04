<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\OrderItem;

class RentalPenaltyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $item;

    public function __construct(OrderItem $item)
    {
        $this->item = $item;
    }

    public function build()
    {
        return $this->subject('Pénalité pour retour tardif')
            ->view('emails.rental-penalty');
    }
}