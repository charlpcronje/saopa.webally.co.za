<?php
// app/Livewire/EntryTable.php
namespace App\Http\Livewire\Entries;

use Livewire\Component;
use App\Models\Entry;

class EntryTable extends Component
{
    public function render()
    {
        $entries = Entry::with('user')->latest()->paginate(10);

        return view('livewire.entries.entry-table', compact('entries'));
    }
}