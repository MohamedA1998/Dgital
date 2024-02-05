<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class UpdateServices extends Component
{
    public $service, $name, $description, $icon;

    protected $listeners = ['EditService'];

    protected $rules = [
        'name'              => 'required',
        'description'       => 'required|string',
        'icon'              => 'required|string'
    ];

    public function EditService(Service $service)
    {
        $this->service = $service;

        $this->name = $service->name;

        $this->description = $service->description;

        $this->icon = $service->icon;

        $this->resetValidation();

        $this->dispatch('EditModelToggle');
    }

    public function submit()
    {
        $this->service->update($this->validate());

        $this->dispatch('EditModelToggle');
    }

    public function render()
    {
        return view('admin.services.update-services');
    }
}
