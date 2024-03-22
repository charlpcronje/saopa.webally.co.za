<?php
// app/Livewire/Auth/ResendVerificationEmail.php
namespace App\Livewire\Auth;

use Livewire\Component;

class ResendVerificationEmail extends Component
{
    public function resend() {
        auth()->user()->sendEmailVerificationNotification();
        session()->flash('message', 'Verification link sent!');
    }

    public function render()
    {
        return view('livewire.auth.resend-verification-email')->layout('components.layouts.app');
    }
}

