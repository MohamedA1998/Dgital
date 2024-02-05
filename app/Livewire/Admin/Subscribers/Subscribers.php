<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithPagination;

class Subscribers extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = ['DeleteModelToggle' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.subscribers.subscribers', [
            'subscribers'    => Subscriber::where('email', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
