<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class ShowSkillModelComponent extends Component
{
    public $name, $progress;

    protected $listeners = ['ShowSkill'];

    public function ShowSkill(Skill $skill)
    {
        $this->name = $skill->name;

        $this->progress = $skill->progress;

        $this->dispatch('ShowModelToggle');
    }

    public function render()
    {
        return view('admin.skills.show-skill-model-component');
    }
}
