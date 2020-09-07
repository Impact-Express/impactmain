<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ParcelDetailsSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('"Send My Parcel" Request Email Received From: '. $this->data['sender-company-name'])
                    ->from('testmail@codecameron.dev', 'Impact Express')
                    ->view('customer.emails.sendMyParcel-sent')
                    ->with('data', $this->data);
    }
}
