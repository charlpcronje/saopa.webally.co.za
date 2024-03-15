<?php
// LeftNavButton.php
namespace App\Livewire;

use Livewire\Component;

class LeftNavButton extends Component
{
    public $text;
    public $icon;
    public $link;
    public $subButtons;

    public function mount($text, $icon, $link, $subButtons = [])
    {
        $this->text = $text;
        $this->icon = $icon;
        $this->link = $link;
        $this->subButtons = $subButtons;
    }

    public function render()
    {
        return view('livewire.left-nav-button');
    }
}
