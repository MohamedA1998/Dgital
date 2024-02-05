<?php

namespace App\Livewire\Front\Component;

use App\Models\Service;
use Livewire\Component;

class ServiceComponent extends Component
{
    public $count = 3;

    public $iconHaveBackground = true;

    public function render()
    {
        return view('front.component.service-component', [
            'services'   => Service::take($this->count)->latest()->get()->shuffle()
        ]);
    }
}
