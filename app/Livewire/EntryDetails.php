<?php

namespace App\Http\Livewire\Entries;

use Livewire\Component;
use App\Models\Entry;

class EntryDetails extends Component
{
    public $entryId;
    public $entry;

    public function mount($entryId)
    {
        $this->entryId = $entryId;
        $this->entry = Entry::findOrFail($entryId);
    }

    public function render()
    {
        return view('livewire.entries.entry-details');
    }
}