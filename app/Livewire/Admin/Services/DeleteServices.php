<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class DeleteServices extends Component
{
    public $service;

    protected $listeners = ['DeleteService'];

    public function DeleteService(Service $service)
    {
        $this->service = $service;

        $this->dispatch('DeleteModelToggle');
    }

    public function submit()
    {
        $this->service->delete();

        $this->dispatch('DeleteModelToggle');
    }

    public function render()
    {
        return view('admin.services.delete-services');
    }
}
