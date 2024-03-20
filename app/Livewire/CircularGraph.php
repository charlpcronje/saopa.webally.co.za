<?php
// app/Livewire/CircularGraph.php

namespace App\Livewire;

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
        return view('livewire.circular-graph');
    }
}