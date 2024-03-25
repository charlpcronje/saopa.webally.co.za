<?php
// app/Sapoa/Layout/Dashboard/SearchButton.php
namespace App\Sapoa\Layout\Dashboard;

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
        return view('layouts.dashboard.search-button');
    }
}
