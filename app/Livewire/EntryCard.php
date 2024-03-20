<?php
// app/Livewire/EntryCard.php

namespace App\Livewire;

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
        return view('livewire.entry-card');
    }
}