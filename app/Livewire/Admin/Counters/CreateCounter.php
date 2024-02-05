<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CreateCounter extends Component
{
    public $name, $count, $icon;

    protected $rules = [
        'name'        => 'required',
        'count'    => 'required|min:1|numeric',
        'icon'        => 'required|string'
    ];

    public function submit()
    {
        Counter::create($this->validate());

        $this->dispatch('CreateModelToggle');

        $this->reset(['name', 'count', 'icon']);
    }

    public function render()
    {
        return view('admin.counters.create-counter');
    }
}
