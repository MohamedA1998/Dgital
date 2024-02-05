<?php

namespace App\Livewire\Admin\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class AdminLogin extends Component
{
    public $email, $password, $remember;

    protected $rules = [
        'email' => 'required|email|string',
        'password'  => 'required|string',
        'remember'  => 'nullable'
    ];

    public function submit()
    {
        $this->validate();

        $credentials = ['email' => $this->email, 'password' => $this->password, 'role' => 'ADMIN'];

        if (!Auth::attempt($credentials, $this->remember)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        return to_route('admin.index');
    }

    public function render()
    {
        return view('admin.auth.admin-login');
    }
}
