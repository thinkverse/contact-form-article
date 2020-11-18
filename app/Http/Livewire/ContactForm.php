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
     * Validation rules
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|min:4',
        'phone' => 'nullable|min:4|required_if:preferred,1',
        'message' => 'nullable',
        'preferred' => 'required|min:0|max:1'
    ];

    /**
     * Validation messages
     *
     * @var array
     */
    protected $messages = [
        'phone.required_if' => 'We need a number to call when the preferred way of contact is by phone.',
    ];

    /**
     * Submit contact lead
     *
     * @return void
     */
    public function submit()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
