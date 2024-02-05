<?php

namespace App\Livewire\Front\Component;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribeComponent extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|unique:subscribers,email'
    ];

    public function submit()
    {
        Subscriber::create($this->validate());

        $this->reset('email');

        session()->flash('message', 'Subscribes Successfuly');
    }

    public function render()
    {
        return view('front.component.subscribe-component');
    }
}
