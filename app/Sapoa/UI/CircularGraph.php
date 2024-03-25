<?php
// app/Sapoa/UI/CircularGraph.php
namespace App\Sapoa\UI;

use Livewire\Component;

class CircularGraph extends Component
{
    public $percentage;

    public function mount($percentage)
    {
        $this->percentage = $percentage;
    }

    public function render()
    {
        return view('ui.circular-graph');
    }
}