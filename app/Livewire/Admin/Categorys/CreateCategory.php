<?php

namespace App\Livewire\Admin\Categorys;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;

    protected $rules = [
        'name'        => 'required',
    ];

    public function submit()
    {
        Category::create($this->validate());

        $this->dispatch('CreateModelToggle');

        $this->reset(['name']);
    }

    public function render()
    {
        return view('admin.categorys.create-category');
    }
}
