<?php

namespace App\Livewire\Front\Component;

use App\Models\Counter;
use Livewire\Component;

class CounterComponent extends Component
{
    public function render()
    {
        return view('front.component.counter-component', [
            'counters'   => Counter::take(4)->get()
        ]);
    }
}
