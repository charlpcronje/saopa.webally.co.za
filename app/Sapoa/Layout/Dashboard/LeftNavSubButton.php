<?php
// app/Sapoa/Layout/Dashboard/LeftNavSubButton.php
namespace App\Sapoa\Layout\Dashboard;

use Illuminate\View\View;
use Livewire\Component;

class LeftNavSubButton extends Component
{
    public string $icon;
    public string $text;
    public string $link;

    public function mount(string $icon = 'dot', string $text = '', string $link = '')
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->link = $link;
    }

    public function render(): View
    {
        return view('layouts.dashboard.left-nav-sub-button');
    }
}