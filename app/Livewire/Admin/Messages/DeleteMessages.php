<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class DeleteMessages extends Component
{
    public $message;

    protected $listeners = ['DeleteMessage'];

    public function DeleteMessage(Message $message)
    {
        $this->message = $message;

        $this->dispatch('DeleteModelToggle');
    }

    public function submit()
    {
        $this->message->delete();

        $this->dispatch('DeleteModelToggle');
    }

    public function render()
    {
        return view('admin.messages.delete-messages');
    }
}
