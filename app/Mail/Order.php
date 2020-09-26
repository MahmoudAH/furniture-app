<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // return $this->view('.nviewame');
        return $this->from('mail@example.com', 'Mailtrap')
            ->subject('new order')
            ->markdown('email')
            ->with([
                'name' => 'New Mailtrap User',
                'email' => 'https://mailtrap.io/inboxes'
            ]);
    }
}
