<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class SettingsComponent extends Component
{
    public Setting $setting;

    protected $rules = [
        'setting.name'   => 'required|string',
        'setting.email'   => 'required|email',
        'setting.address'   => 'required',
        'setting.phone'   => 'required',
        'setting.facebook'   => 'nullable|url',
        'setting.twitter'   => 'nullable|url',
        'setting.instagram'   => 'nullable|url',
        'setting.linkedin'   => 'nullable|url',
    ];

    public function mount()
    {
        $this->setting = Setting::find(1);
    }

    public function submit()
    {
        $this->validate();

        $this->setting->save();

        session()->flash('message', 'Settings Updated Successfyly');
    }

    public function render()
    {
        return view('admin.settings.settings-component');
    }
}
