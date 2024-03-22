<?php
// app/Livewire/PageTitle.php
namespace App\Livewire;

use Livewire\Component;

class PageTitle extends Component
{
    // H-L-PageTitle-C1-1-A+
    public $title = 'Home';

    public function mount($title = null)
    {
        if ($title) {
            $this->title = $title;
        }
    }

    public function render()
    {
        return view('livewire.page-title');
    }
}
