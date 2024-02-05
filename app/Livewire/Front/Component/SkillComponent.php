<?php

namespace App\Livewire\Front\Component;

use App\Models\Skill;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class SkillComponent extends Component
{
    public function render()
    {
        $count = Route::is('front.index') ? 3 : 9;

        return view('front.component.skill-component', [
            'skills' => Skill::take($count)->latest()->get()
        ]);
    }
}
