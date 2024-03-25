<?php
// app/Sapoa/Auth/ResendVerificationEmail.php
namespace App\Sapoa\Auth;

use Livewire\Component;

class ResendVerificationEmail extends Component
{
    public function resend() {
        auth()->user()->sendEmailVerificationNotification();
        session()->flash('message', 'Verification link sent!');
    }

    public function render()
    {
        return view('auth.resend-verification-email')->layout('components.layouts.app');
    }
}

