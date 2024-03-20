<?php
// app/Livewire/GoogleFont.php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Validation\ValidationException;

class GoogleFont extends Component
{
    public $font;
    public $weights;

    public function mount()
    {
        if (empty($this->font) || empty($this->weights)) {
            throw ValidationException::withMessages([
                'font' => 'The font property is required.',
                'weights' => 'The weights property is required.',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.google-font');
    }
}
