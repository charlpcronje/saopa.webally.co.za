<?php
// app/Sapoa/UI/ProgressBar.php
namespace App\Sapoa\UI;

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
        return view('ui.progress-bar');
    }
}