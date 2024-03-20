<?php
// app/Http/Livewire/ProgressBar.php

namespace App\Http\Livewire;

use Livewire\Component;

class ProgressBar extends Component
{
    public $progress;

    public function mount($progress)
    {
        $this->progress = $progress;
    }

    public function render()
    {
        return view('livewire.progress-bar');
    }
}