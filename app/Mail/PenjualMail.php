<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PenjualMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $Penjual;
	
    public function __construct($Penjual)
    {
        $this->Penjual = $Penjual;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mohon Konfirmasi')->from('dennismichaelmanullang@yahoo.com')
                    ->view('mails.konfirmasi_penjual')
                    ->text('mails.konfirmasi_penjualPlain');
    }
}
