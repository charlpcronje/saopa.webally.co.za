<?php
// app/Livewire/HeaderDropdown.php
namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class HeaderDropdown extends Component
{
    public string $icon;
    public bool $isOpen = false;

    public function mount(string $icon)
    {
        $this->icon = $icon;
    }

    public function toggleDropdown(): void
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render(): View
    {
        return view('livewire.header-dropdown');
    }
}