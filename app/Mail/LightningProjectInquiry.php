<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LightningProjectInquiry extends Mailable
{
    public array $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build(): LightningProjectInquiry
    {
        return $this->subject('New Lighting Project Inquiry')
            ->view('emails.lighting_project_inquiry');
    }
}
