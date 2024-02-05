<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProject extends Component
{
    use WithFileUploads;

    public $name, $description, $link, $image, $category_id, $categorys;

    protected $rules = [
        'name'        => 'required',
        'description' => 'required',
        'link'        => 'nullable|url',
        'image'       => 'required',
        'category_id' => 'required',
    ];

    public function attributes()
    {
        return [
            'category_id'   => 'Category'
        ];
    }

    public function mount()
    {
        $this->categorys = Category::all();
    }

    public function submit()
    {
        $data = $this->validate($this->rules, [], $this->attributes());

        $imageName = time() . '.' . $this->image->getClientOriginalExtension();

        $this->image->storeAs('images', $imageName, 'public');

        $data['image'] = 'storage/images/' . $imageName;

        Project::create($data);

        $this->dispatch('CreateModelToggle');

        $this->reset(['name', 'description', 'link', 'image', 'category_id']);
    }

    public function render()
    {
        return view('admin.projects.create-project');
    }
}
