<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DenunciaReincidenciaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $folio;

    /**
     * Create a new message instance.
     */
    public function __construct($folio)
    {
        //
        $this->folio = $folio;
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return $this->view('emails.denuncia-reincidencia') // la vista del correo
                    ->subject('Reincidencia de Denuncia')
                    ->from('soportewebssc@gmail.com', 'H.A.S. Coah'); // Correo y nombre del remitente
    }
}