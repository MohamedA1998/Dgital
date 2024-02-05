<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class DeleteSkillModelComponent extends Component
{
    public $skill;

    protected $listeners = ['DeleteSkill'];

    public function DeleteSkill(Skill $skill)
    {
        $this->skill = $skill;

        $this->dispatch('DeleteModelToggle');
    }

    public function submit()
    {
        $this->skill->delete();

        $this->dispatch('DeleteModelToggle');
    }

    public function render()
    {
        return view('admin.skills.delete-skill-model-component');
    }
}
