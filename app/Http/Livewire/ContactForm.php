<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    /**
     * The name person uses
     *
     * @var string $name
     */
    public string $name = '';

    /**
     * The email person uses
     *
     * @var string $email
     */
    public string $email = '';

    /**
     * The phone number person uses
     *
     * @var string $phone
     */
    public string $phone = '';

    /**
     * The attached message
     *
     * @var string $message
     */
    public string $message = '';

    /**
     * The person's preferred
     * way of contact
     *
     * @var int $preferred
     */
    public int $preferred = 0;

    /**
     * Submit contact lead
     *
     * @return void
     */
    public function submit()
    {
        // Here lies an empty Livewire action.
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
