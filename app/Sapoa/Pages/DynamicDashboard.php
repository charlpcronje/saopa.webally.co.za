<?php
// app/Sapoa/Pages/DynamicDashboard.php
namespace App\Sapoa\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DynamicDashboard extends Component
{
    public function render()
    {
        $user = Auth::user();
        $component = '';

        if ($user->isAdmin()) {
            $component = 'admin.dashboard';
        } elseif ($user->isJudge()) {
            $component = 'judge.dashboard';
        } elseif ($user->isUser()) {
            $component = 'user.dashboard';
        }

        return view('pages.dynamic-dashboard', compact('component'))
            ->layout('layouts.app', ['title' => 'Dashboard']); // Specify your default layout and title
    }
}
