<?php

namespace App\Actions;

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
        $this->getOrCreateContactLead($formData);
    }

    /**
     * get or create new ContactLead model
     *
     * @param array $formData
     * @return ContactLead
     */
    private function getOrCreateContactLead(array $formData): ContactLead
    {
        return ContactLead::firstOrCreate($formData);
    }
}
