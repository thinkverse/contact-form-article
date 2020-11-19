<?php

namespace App\Actions;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactLeadMailable;
use App\Models\ContactLead;

class EmailContactLeadAction
{
    /**
     * Handle saving our ContactLead
     *
     * @param array $formData
     * @return void
     */
    public function __invoke(array $formData)
    {
        $contactLead = $this->getOrCreateContactLead($formData);
        $this->sendContactLeadToEmail($contactLead);
    }

    /**
     * Get or create new ContactLead model
     *
     * @param array $formData
     * @return ContactLead
     */
    private function getOrCreateContactLead(array $formData): ContactLead
    {
        return ContactLead::firstOrCreate($formData);
    }

    /**
     * Send a new email notification
     *
     * @param ContactLead $contactLead
     * @return void
     */
    private function sendContactLeadToEmail(ContactLead $contactLead): void
    {
        Mail::to(['new-contact-lead@contact-form.test'])
            ->queue(new ContactLeadMailable($contactLead));
    }
}
