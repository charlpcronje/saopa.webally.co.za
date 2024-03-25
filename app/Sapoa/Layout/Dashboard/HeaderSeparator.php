<?php

// app/Sapoa/Layout/Dashboard/HeaderSeparator.php
namespace App\Sapoa\Layout\Dashboard;

use Illuminate\View\View;
use Livewire\Component;

class HeaderSeparator extends Component
{
    public function render(): View
    {
        return view('layouts.dashboard.header-separator');
    }
}
