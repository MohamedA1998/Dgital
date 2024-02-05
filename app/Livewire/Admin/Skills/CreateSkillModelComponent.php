<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class CreateSkillModelComponent extends Component
{
    public $name, $progress;

    protected $rules = [
        'name'        => 'required',
        'progress'    => 'required|min:1|max:100|numeric'
    ];

    public function submit()
    {
        Skill::create($this->validate());

        $this->dispatch('CreateModelToggle');

        $this->reset(['name', 'progress']);
    }

    public function render()
    {
        return view('admin.skills.create-skill-model-component');
    }
}
