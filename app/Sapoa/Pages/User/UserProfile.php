<?php
// app/Sapoa/Pages/User/UserProfile.php
namespace App\Sapoa\Pages\User;

use Livewire\Component;

class UserProfile extends Component
{
    public function render()
    {
        return view('user.user-profile')->layout('layouts.app');
    }
}