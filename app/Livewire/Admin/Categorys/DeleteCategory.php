<?php

namespace App\Livewire\Admin\Categorys;

use App\Models\Category;
use Livewire\Component;

class DeleteCategory extends Component
{
    public $category;

    protected $listeners = ['DeleteCategory'];

    public function DeleteCategory(Category $category)
    {
        $this->category = $category;

        $this->dispatch('DeleteModelToggle');
    }

    public function submit()
    {
        $this->category->delete();

        $this->dispatch('DeleteModelToggle');
    }

    public function render()
    {
        return view('admin.categorys.delete-category');
    }
}
