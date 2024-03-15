<?php
// app/Livewire/LoginForm.php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $email;
    public $password;

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
                $this->redirect(route('dashboard'));
            } elseif ($user->hasRole('judge')) {
                $this->redirect(route('judge.profile'));
            } else {
                $this->redirect(route('user.profile'));
            }
        }
        

        $this->emit('showAlert', 'Invalid credentials', 'error');
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}