<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'DeleteModelToggle' => '$refresh',
        'ShowModelToggle' => '$refresh',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.messages.messages-component', [
            'messages'    => Message::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
