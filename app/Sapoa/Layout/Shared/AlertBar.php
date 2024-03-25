<?php
// app/Sapoa/Layout/Shared/AlertBar.php
namespace App\Sapoa\Layout\Shared;

use Livewire\Component;

class AlertBar extends Component
{
    public function showAlert(
        string $message,
        string $type = 'info',
        bool $sticky = false,
        int $showTime = 5000
    ): void {
        $this->dispatchBrowserEvent('alert-bar-show', [
            'message' => $message,
            'type' => $type,
            'sticky' => $sticky,
            'showTime' => $showTime,
        ]);
    }

    public function render()
    {
        return view('layouts.shared.alert-bar');
    }
}