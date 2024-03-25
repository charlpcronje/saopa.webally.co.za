<?php
// app/Sapoa/Layout/Dashboard/LeftNavButton.php

namespace App\Sapoa\Layout\Dashboard;

use Livewire\Component;

class LeftNavButton extends Component
{
    public string $icon;
    public string $text;
    public string $link;
    public bool $hasSubButtons = false;
    public bool $isExpanded = false;
    public $subButtons = [];

    public function mount(string $text, string $link = '', bool $hasSubButtons = false, $subButtons = [], string $icon = '')
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->link = $link;
        $this->hasSubButtons = $hasSubButtons;
        $this->subButtons = $subButtons;
    }

    public function toggleSubButtons(): void
    {
        $this->isExpanded = !$this->isExpanded;
    }

    public function render()
    {
        return view('layouts.dashboard.left-nav-button');
    }
}