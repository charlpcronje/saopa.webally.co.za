<?php
// app/Livewire/SearchButton.php
namespace App\Livewire;

use Livewire\Component;

class SearchButton extends Component
{
    public $showSearchInput = false;

    public function toggleSearchInput()
    {
        $this->showSearchInput = !$this->showSearchInput;
    }

    public function render()
    {
        return view('livewire.search-button');
    }
}
