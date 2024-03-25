<?php
// app/Sapoa/Layout/Shared/GoogleFont.php
namespace App\Sapoa\Layout\Shared;

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
        return view('layouts.shared.google-font');
    }
}
