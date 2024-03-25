<?php
// app/Sapoa/Pages/Entries/EntryCard.php
namespace App\Sapoa\Pages\Entries;

use Livewire\Component;
use App\Models\Entry;

class EntryCard extends Component
{
    public Entry $entry;

    public function mount(Entry $entry)
    {
        $this->entry = $entry;
    }

    public function render()
    {
        return view('pages.entries.entry-card');
    }
}