<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'DeleteModelToggle' => '$refresh',
        'CreateModelToggle' => '$refresh',
        'EditModelToggle' => '$refresh',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.projects.projects-component', [
            'projects'    => Project::with('category')->where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
