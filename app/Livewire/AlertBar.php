<?php
// app/Livewire/AlertBar.php
namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class AlertBar extends Component
{
    public string $message = '';
    public string $type = 'info';
    public bool $sticky = false;
    public int $fadeInTime = 1000;
    public int $fadeOutTime = 1000;
    public int $showTime = 5000;

    protected $listeners = ['showAlert'];

    public function showAlert($message, $type = 'info', $sticky = false, $fadeInTime = 1000, $fadeOutTime = 1000, $showTime = 5000)
    {
        $this->message = $message;
        $this->type = $type;
        $this->sticky = $sticky;
        $this->fadeInTime = $fadeInTime;
        $this->fadeOutTime = $fadeOutTime;
        $this->showTime = $showTime;
        $this->emit('alertShown');
    }

    public function dismiss()
    {
        $this->message = '';
    }

    public function render(): View
    {
        return view('livewire.alert-bar');
    }
}