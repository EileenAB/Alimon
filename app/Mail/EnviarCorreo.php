<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $email;
    public $pregunta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $email, $pregunta)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->pregunta = $pregunta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nueva pregunta de un cliente')
                ->view('sitio.includes.correo_es')
                ->with([
                    'nombre' => $this->nombre,
                    'email' => $this->email,
                    'pregunta' => $this->pregunta,
                ]);
    }
}
