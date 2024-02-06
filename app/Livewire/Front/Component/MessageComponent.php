<?php

namespace App\Livewire\Front\Component;

use App\Models\Message;
use Livewire\Component;

class MessageComponent extends Component
{
    public $name, $email, $subject, $message;

    protected $rules = [
        'name'          => 'required',
        'email'         => 'required|email',
        'subject'       => 'required',
        'message'       => 'required',
    ];

    public function submit()
    {
        Message::create($this->validate());

        $this->reset(['name', 'email', 'subject', 'message']);

        session()->flash('message', 'Message Was Sent Successfuly');
    }

    public function render()
    {
        return view('front.component.message-component');
    }
}
