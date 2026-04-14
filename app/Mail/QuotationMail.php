<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuotationMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $message;
    public string $employees;

    public function __construct(string $name, string $email, string $message, string $employees)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->employees = $employees;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Prośba o zapytanie ofertowe',
            to: config('mail.contact')
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.quotation-mail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
