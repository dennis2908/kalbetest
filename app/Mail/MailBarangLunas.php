<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Requests\orderRequest;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use App\sale;
use App\User;
use App\Address;
use Session;

class MailBarangLunas extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	public $BarangLunas;
	
    public function __construct($BarangLunas)
    {
        $this->BarangLunas = $BarangLunas;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->subject('Terima Kasih Telah Belanja di '.$this->BarangLunas->sender)
                    ->from('dennismichaelmanullang@yahoo.com')
                    ->view('mails.BarangLunas')
                    ->text('mails.BarangLunasPlain');
    }
}
