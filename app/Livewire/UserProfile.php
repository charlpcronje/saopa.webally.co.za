<?php
// app/Livewire/UserProfile.php
namespace App\Livewire;

use Livewire\Component;

class UserProfile extends Component
{
    public function render()
    {
        return view('livewire.user-profile')->layout('layouts.app');
    }
}