<?php

namespace App\Mail;

use App\Models\ContactLead;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactLeadMailable extends Mailable
{
    use Queueable, SerializesModels;

    /** @var ContactLead $lead */
    public ContactLead $lead;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactLead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-lead.new-lead');
    }
}
