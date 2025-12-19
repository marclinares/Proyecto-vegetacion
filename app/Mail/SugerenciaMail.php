<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Sugerencia;

class SugerenciaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sugerencia;

    public function __construct(Sugerencia $sugerencia)
    {
        $this->sugerencia = $sugerencia;
    }

    public function build()
    {
        return $this->subject('Nueva sugerencia recibida')
                    ->markdown('emails.sugerencia');
    }
}
