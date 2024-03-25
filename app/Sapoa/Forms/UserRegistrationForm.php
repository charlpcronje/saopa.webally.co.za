<?php
// app/Sapoa/Forms/UserRegistrationForm.php
namespace App\Sapoa\Forms;

use Livewire\Component;
use App\Models\User;

class UserRegistrationForm extends Component
{
    public $email;
    public $password;
    public $confirmPassword;

    protected $rules = [
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'confirmPassword' => 'required|same:password',
    ];

    public function render()
    {
        return view('forms.user-registration-form');
    }

    public function submit()
    {
        $this->validate();

        // Create the user record
        $user = User::create([
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        // Redirect or show success message
        session()->flash('success', 'User registered successfully.');
        $this->reset();
    }
}