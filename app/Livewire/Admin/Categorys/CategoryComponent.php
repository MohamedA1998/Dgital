<?php

namespace App\Livewire\Admin\Categorys;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'DeleteModelToggle' => '$refresh',
        'EditModelToggle'   => '$refresh',
        'CreateModelToggle' => '$refresh',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.categorys.category-component', [
            'categorys'    => Category::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
