<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;
use Illuminate\View\View;

class MasterLayout extends Component
{
    public $pageName;


    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $this->pageName = request()->route()->uri;
        // $this->pageName = explode('.', Route::currentRouteName())[1];
        return view('layouts.master');
    }
}
