<?php
// app/Livewire/LeftNavButton.php - Iteration 1 - A+
namespace App\Livewire;

use Livewire\Component;

/*
* L-LeftNavButton-C1-1-A+: Livewire Component for sidebar navigation buttons.
* This component handles the toggle functionality of sub-buttons (accordion behavior).
*/
class LeftNavButton extends Component
{
    public string $icon;
    public string $text;
    public string $link;
    public bool $hasSubButtons = false;
    public bool $subButtonsVisible = false;
    public string $buttonId;

    /*
    * L-LeftNavButton-M1-1-A+: Mount the component with initial values.
    */
    public function mount(string $icon, string $text, string $link = '', bool $hasSubButtons = false)
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->link = $link;
        $this->hasSubButtons = $hasSubButtons;
        $this->buttonId = uniqid('button_');
    }

    /*
    * L-LeftNavButton-M2-1-A+: Toggle the visibility of sub-buttons.
    */
    public function toggleSubButtons(): void
    {
        $this->subButtonsVisible = !$this->subButtonsVisible;
    }

    /*
    * L-LeftNavButton-M3-1-A+: Render the component view.
    */
    public function render()
    {
        return view('livewire.left-nav-button');
    }
}
