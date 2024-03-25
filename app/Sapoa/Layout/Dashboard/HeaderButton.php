<?php
// app/Sapoa/Layout/Dashboard/HeaderButton.php
namespace App\Sapoa\Layout\Dashboard;

use Illuminate\View\View;
use Livewire\Component;

class HeaderButton extends Component
{
    public string $icon;

    public function mount(string $icon)
    {
        $this->icon = $icon;
    }

    public function render(): View
    {
        return view('layouts.dashboard.header-button');
    }
}