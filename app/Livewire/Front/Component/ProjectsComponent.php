<?php

namespace App\Livewire\Front\Component;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class ProjectsComponent extends Component
{
    public $count = 6;

    public function render()
    {
        return view('front.component.projects-component', [
            'projects'  => Project::take($this->count)->latest()->get(),
            'categorys'  => Category::all()
        ]);
    }
}
