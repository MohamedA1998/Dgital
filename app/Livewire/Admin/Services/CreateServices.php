<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class CreateServices extends Component
{
    public $name, $description, $icon;

    protected $rules = [
        'name'              => 'required',
        'description'       => 'required|string',
        'icon'              => 'required|string'
    ];

    public function submit()
    {
        Service::create($this->validate());

        $this->dispatch('CreateModelToggle');

        $this->reset(['name', 'description', 'icon']);
    }

    public function render()
    {
        return view('admin.services.create-services');
    }
}
