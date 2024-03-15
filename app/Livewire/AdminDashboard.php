<?php
// app/Livewire/AdminDashboard.php

namespace App\Livewire; // Corrected namespace
use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.admin-dashboard')->layout('layouts.app');
    }
}
