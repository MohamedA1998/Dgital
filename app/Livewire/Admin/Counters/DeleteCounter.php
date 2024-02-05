<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class DeleteCounter extends Component
{
    public $counter;

    protected $listeners = ['DeleteCounter'];

    public function DeleteCounter(Counter $counter)
    {
        $this->counter = $counter;

        $this->dispatch('DeleteModelToggle');
    }

    public function submit()
    {
        $this->counter->delete();

        $this->dispatch('DeleteModelToggle');
    }

    public function render()
    {
        return view('admin.counters.delete-counter');
    }
}
