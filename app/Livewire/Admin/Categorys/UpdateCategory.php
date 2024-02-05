<?php

namespace App\Livewire\Admin\Categorys;

use App\Models\Category;
use Livewire\Component;

class UpdateCategory extends Component
{
    public $category, $name;

    protected $listeners = ['UpdateCategory'];

    protected $rules = [
        'name'        => 'required',
    ];

    public function UpdateCategory(Category $category)
    {
        $this->category = $category;

        $this->name = $category->name;

        $this->resetValidation();

        $this->dispatch('EditModelToggle');
    }

    public function submit()
    {
        $this->category->update($this->validate());

        $this->dispatch('EditModelToggle');
    }

    public function render()
    {
        return view('admin.categorys.update-category');
    }
}
