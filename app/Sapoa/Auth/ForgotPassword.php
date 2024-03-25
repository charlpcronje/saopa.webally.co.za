<?php
// app/Sapoa/Auth/ForgotPassword.php
namespace App\Sapoa\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Component
{
    public $title = "Forgot Password";
    public $email;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function submit()
    {
        $this->validate();

        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status === Password::RESET_LINK_SENT) {
            session()->flash('status', __($status));
        } else {
            $this->addError('email', __($status));
        }
    }

    public function render()
    {
        return view('auth.forgot-password')->layout('layouts.guest',['title' => $this->title]);
    }
}
