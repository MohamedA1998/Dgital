<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class DeleteProject extends Component
{
    public $project;

    protected $listeners = ['DeleteProject'];

    public function DeleteProject(Project $project)
    {
        $this->project = $project;

        $this->dispatch('DeleteModelToggle');
    }

    public function submit()
    {
        unset($this->project->iamge);

        $this->project->delete();

        $this->dispatch('DeleteModelToggle');
    }

    public function render()
    {
        return view('admin.projects.delete-project');
    }
}
