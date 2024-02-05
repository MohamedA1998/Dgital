<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProject extends Component
{
    use WithFileUploads;

    public $project, $name, $description, $link, $image, $category_id, $categorys;

    protected $listeners = ['EditProject'];

    protected $rules = [
        'name'        => 'required',
        'description' => 'required',
        'link'        => 'nullable|url',
        'image'       => 'nullable',
        'category_id' => 'required',
    ];

    public function attributes()
    {
        return [
            'category_id'   => 'Category'
        ];
    }

    public function EditProject(Project $project)
    {
        $this->project = $project;
        $this->name = $project->name;
        $this->description = $project->description;
        $this->link = $project->link;
        $this->category_id = $project->category_id;

        $this->resetValidation();

        $this->dispatch('EditModelToggle');
    }

    public function submit()
    {
        $data = $this->validate($this->rules, [], $this->attributes());

        if ($this->image) {
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();

            $this->image->storeAs('images', $imageName, 'public');

            $data['image'] = 'storage/images/' . $imageName;

            unlink($this->project->image);
        } else {
            unset($data['image']);
        }

        $this->project->update($data);

        $this->dispatch('EditModelToggle');
    }

    public function mount()
    {
        $this->categorys = Category::all();
    }

    public function render()
    {
        return view('admin.projects.update-project');
    }
}
