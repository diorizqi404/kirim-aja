<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\FormData;

class FormDataStored extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $formName;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $formName)
    {
        $this->data = $data;
        $this->formName = $formName;
    }

    public function build()
    {
        $domain = $_SERVER['HTTP_HOST'];
        $createAt = FormData::where('form_id', $this->data['form_id'])->first()->create_at;
        $createAt = date('H:i d-m-Y');
        return $this->view('formDataStored')
            ->with('data', $this->data)
            ->with('createAt', $createAt)
            ->with('domain', $domain);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Submission baru!!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'formDataStored',
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
