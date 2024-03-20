<?php

// app/Livewire/HeaderSeparator.php
namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class HeaderSeparator extends Component
{
    public function render(): View
    {
        return view('livewire.header-separator');
    }
}
