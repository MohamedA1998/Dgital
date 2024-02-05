<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    public $pageName;
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->pageName = request()->route()->uri;
        return view('layouts.admin');
    }
}
