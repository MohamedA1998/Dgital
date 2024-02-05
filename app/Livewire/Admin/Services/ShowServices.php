<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ShowServices extends Component
{
    public  $name, $description, $icon;

    protected $listeners = ['ShowService'];

    public function ShowService(Service $service)
    {
        $this->name = $service->name;

        $this->description = $service->description;

        $this->icon = $service->icon;

        $this->dispatch('ShowModelToggle');
    }

    public function render()
    {
        return view('admin.services.show-services');
    }
}
