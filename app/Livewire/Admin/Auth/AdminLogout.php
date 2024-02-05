<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;

class AdminLogout extends Component
{
    public function logout()
    {
        auth()->logout();

        session()->invalidate();

        session()->regenerateToken();

        return to_route('login');
    }

    public function render()
    {
        return view('admin.auth.admin-logout');
    }
}
