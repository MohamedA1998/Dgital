<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'CreateModelToggle' => '$refresh',
        'EditModelToggle'   => '$refresh',
        'DeleteModelToggle'   => '$refresh',
    ];

    public function render()
    {
        return view('admin.skills.skills-component', [
            'skills'    => Skill::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
