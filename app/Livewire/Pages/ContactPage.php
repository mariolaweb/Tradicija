<?php

namespace App\Livewire\Pages;

use App\Models\Contact;
use Livewire\Component;
use App\Mail\ContactMail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Component
{
    #[Validate('required|string|max:255')]
    public $name;
    #[Validate('required|email|max:255')]
    public $email;
    // #[Validate('nullable|regex:/^[0-9+\s\-]{1,4}$/')]
    // public $country_code;
    #[Validate('nullable|regex:/^[0-9+\s\-]{8,11}$/')]
    public $phone;
    #[Validate('required|string|min:5')]
    public $subject;
    #[Validate('required|string|min:10')]
    public $message;
    // #[Validate('accepted')]
    // public $termsAccepted = false;


    public function modelData()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            // 'phone' => "(" . $this->country_code . ") " . ltrim(preg_replace('/\s+/', '', $this->phone), '0'),
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
            'is_viewed' => false,
        ];
    }

    public function submitForm()
    {
        sleep(2);
        $this->validate();
        $data = $this->modelData();

      //  dd($data);

        $contact = Contact::create($data);

        Mail::to('tradicijabl@gmail.com')
        ->cc(['mariolawebpay@gmail.com'])
        ->send(new ContactMail($contact));

        $this->reset();
        session()->flash('message');
    }


    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.pages.contact-page');
    }
}
