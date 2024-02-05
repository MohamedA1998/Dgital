<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class UpdateCounter extends Component
{
    public $counter, $name, $count, $icon;

    protected $rules = [
        'name'        => 'required',
        'count'    => 'required|min:1|numeric',
        'icon'        => 'required|string'
    ];

    protected $listeners = ['EditCounter'];

    public function EditCounter(Counter $counter)
    {
        $this->counter = $counter;

        $this->name = $counter->name;

        $this->count = $counter->count;

        $this->icon = $counter->icon;

        $this->resetValidation();

        $this->dispatch('EditModelToggle');
    }

    public function submit()
    {
        $this->counter->update($this->validate());

        $this->dispatch('EditModelToggle');
    }

    public function render()
    {
        return view('admin.counters.update-counter');
    }
}
