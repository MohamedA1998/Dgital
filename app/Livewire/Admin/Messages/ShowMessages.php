<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class ShowMessages extends Component
{
    public $name, $email, $subject, $message;

    protected $listeners = ['ShowMessage'];

    public function ShowMessage(Message $message)
    {
        $this->name = $message->name;
        $this->email = $message->email;
        $this->subject = $message->subject;
        $this->message = $message->message;

        if ($message->status == false) {
            $message->update([
                'status'    => true
            ]);
        }

        $this->dispatch('ShowModelToggle');
    }

    public function render()
    {
        return view('admin.messages.show-messages');
    }
}
