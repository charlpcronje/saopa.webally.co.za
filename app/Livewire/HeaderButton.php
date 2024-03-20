<?php
// app/Livewire/HeaderButton.php
namespace App\Livewire;

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
        return view('livewire.header-button');
    }
}