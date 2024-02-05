<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'CreateModelToggle' => '$refresh',
        'DeleteModelToggle' => '$refresh',
        'EditModelToggle' => '$refresh'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.services.services-component', [
            'services'    => Service::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
