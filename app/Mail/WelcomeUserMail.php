<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class WelcomeUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to the SAPOA Awards!'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.welcome',
            with: [
                'user' => $this->user,
                'contact' => [
                    'tel' => '011 883 0679',
                    'email' => 'reception@sapoa.org.za',
                    'physical' => 'WeWork Offices, The Link,173 Oxford Road, Rosebank, Johannesburg',
                    'postal' => 'P O Box 78544, Sandton 2146',
                ],
                'logoUrl' => 'https://sapoa.org.za/wp-content/uploads/2021/09/Sapoa-logo-165H-normal.png',
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        // If you have attachments, you can specify them here
        return [];
    }
}
