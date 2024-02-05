<?php

namespace App\Livewire\Admin\Subscribers;

use Livewire\Component;
use App\Models\Subscriber;

class DeleteSubscribers extends Component
{
    public $subscriber;

    protected $listeners = ['DeleteSubscriber'];

    public function DeleteSubscriber(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;

        $this->dispatch('DeleteModelToggle');
    }

    public function submit()
    {
        $this->subscriber->delete();

        $this->dispatch('DeleteModelToggle');
    }

    public function render()
    {
        return view('admin.subscribers.delete-subscribers');
    }
}
