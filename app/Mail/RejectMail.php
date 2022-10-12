<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RejectMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $pesan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$pesan)
    {
        $this->user = $user;
        $this->pesan = $pesan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Sorry')->view('email.rejected');
    }
}
