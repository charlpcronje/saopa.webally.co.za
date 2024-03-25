<?php
// app/Sapoa/Pages/Entries/EntryDetails.php
namespace App\Sapoa\Pages\Entries;

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
        return view('pages.entries.entry-details');
    }
}