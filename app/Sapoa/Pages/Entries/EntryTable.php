<?php
// app/Sapoa/Pages/Entries/EntryTable.php
namespace App\Sapoa\Pages\Entries;

use Livewire\Component;
use App\Models\Entry;

class EntryTable extends Component
{
    public function render()
    {
        $entries = Entry::with('user')->latest()->paginate(10);

        return view('pages.entries.entry-table', compact('entries'));
    }
}