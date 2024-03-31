<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;


    public $packageName; // プロパティの追加

    public function __construct($packageName) // コンストラクタの修正
    {
        $this->packageName = $packageName;
    }

    public function build()
    {
        return $this->markdown('emails.user_confirmation')
                    ->with('packageName', $this->packageName);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'User Confirmation Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.user_confirmation',
        );
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
}
