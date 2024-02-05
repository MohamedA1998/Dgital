<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CounterComponent extends Component
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
        return view('admin.counters.counter-component', [
            'counters'    => Counter::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
