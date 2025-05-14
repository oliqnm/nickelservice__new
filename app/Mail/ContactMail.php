<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $details;
    protected $template;

    /**
     * Create a new message instance.
     */
    public function __construct($details, $template = 'emails.contact')
    {
        $this->details = $details;
        $this->template = $template;
    }

    public function build()
    {
        return $this->subject('Nouveau message de votre site')
                    ->view($this->template)
                    ->with([
                        'details' => $this->details,
                    ]);
    }


}