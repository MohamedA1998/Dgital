<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class UpdateSkillModelComponent extends Component
{
    public $skill, $name, $progress;

    protected $listeners = ['UpdateSkill'];

    protected $rules = [
        'name'        => 'required',
        'progress'    => 'required|min:1|max:100|numeric'
    ];

    public function UpdateSkill(Skill $skill)
    {
        $this->skill = $skill;

        $this->name = $skill->name;

        $this->progress = $skill->progress;

        $this->resetValidation();

        $this->dispatch('EditModelToggle');
    }

    public function submit()
    {
        $this->skill->update($this->validate());

        $this->dispatch('EditModelToggle');
    }

    public function render()
    {
        return view('admin.skills.update-skill-model-component');
    }
}
