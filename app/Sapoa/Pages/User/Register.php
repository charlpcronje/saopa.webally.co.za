<?php
// app/Sapoa/Pages/User/Register.php
namespace App\Sapoa\Pages\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeUserMail;

class Register extends Component
{
    public $name, $surname, $email, $password, $password_confirmation;
    public $title = 'Register';

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'surname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'min:8', 'confirmed'],
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => strtolower($this->email),
            'password' => Hash::make($this->password),
            'role_id' => Role::where('name', 'user')->first()->id,
        ]);

        event(new Registered($user));

        // Send Welcome Email
        Mail::to($this->email)->send(new WelcomeUserMail($user));

        // Login User
        Auth::login($user);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('pages.user.register')->layout('layouts.blank',['title' => $this->title]);
    }
}
