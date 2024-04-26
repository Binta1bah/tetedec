<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AgentResister extends Mailable
{
    use Queueable, SerializesModels;

    public $agent;
    public $password;
    /**
     * Create a new message instance.
     */
    public function __construct($agent, $password)
    {
        $this->agent = $agent;
        $this->password = $password;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope();
    }

    public function build(): void
    {
        $this->view('emails.agentRegistered')
        ->with([
            'agent' => $this->agent,
            'password' => $this->password,
        ])
        ->subject('Bienvenue chez nous');
}


    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.agentResister',
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
