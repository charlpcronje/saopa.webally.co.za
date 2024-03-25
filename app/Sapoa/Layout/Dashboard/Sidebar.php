<?php
// app/Sapoa/Layout/Dashboard/Sidebar.php
namespace App\Sapoa\Layout\Dashboard;

use Illuminate\View\View;
use Livewire\Component;

class Sidebar extends Component
{
    public function render(): View
    {
        return view('layouts.dashboard.sidebar');
    }
}
