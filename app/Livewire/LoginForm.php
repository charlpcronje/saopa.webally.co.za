<?php
// app/Livewire/LoginForm.php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $email = "charl@fgx.co.za";
    public $password = "Pl@tinum4334";
    public $layout = 'layouts.app';
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user();
            if ($user->hasRole('admin')) {
                $this->redirect(route('admin.dashboard'));
            } elseif ($user->hasRole('judge')) {
                $this->redirect(route('judge.dashboard'));
            } else {
                $this->redirect(route('user.dashboard'));
            }
        }
        $this->dispatch('showAlert', 'Invalid credentials', 'error');
    }

    #[Layout('layouts.blank')]
    public function render()
    {
        return view('livewire.login-form')->layout('layouts.guest');
    }
}