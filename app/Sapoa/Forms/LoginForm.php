<?php
// app/Sapoa/Forms/LoginForm.php
namespace App\Sapoa\Forms;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Sapoa\Layout\Shared\Notice;

class LoginForm extends Component
{
    public $email = "";
    public $password = "";
    public $title = "Login";
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login(Notice $notice)
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user();
            if ($user->hasRole('admin')) {
                $this->redirect(route('pages.admin.dashboard'));
            } elseif ($user->hasRole('judge')) {
                $this->redirect(route('pages.judge.dashboard'));
            } else {
                $this->redirect(route('pages.user.dashboard'));
            }
        } else {
            $this->dispatch('error','Invalid credentials');
        }
    }

    public function render()
    {
        return view('forms.login-form')->layout('layouts.guest', ['title' => $this->title]);
    }
}