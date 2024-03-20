<?php
// app/Livewire/EntryRatingForm.php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;
use App\Models\Criteria;
use App\Models\Rating;

class EntryRatingForm extends Component
{
    public Entry $entry;
    public $ratings = [];

    protected $rules = [
        'ratings.*' => 'required|integer|between:1,10',
    ];

    public function mount(Entry $entry)
    {
        $this->entry = $entry;
    }

    public function submitRating()
    {
        $this->validate();

        foreach ($this->ratings as $criterionId => $score) {
            Rating::create([
                'entry_id' => $this->entry->id,
                'criterion_id' => $criterionId,
                'score' => $score,
                'judge_id' => auth()->user()->id,
            ]);
        }

        $this->reset('ratings');

        $this->emit('ratingSubmitted');
    }

    public function render()
    {
        $criteria = Criteria::all();
        return view('livewire.entry-rating-form', compact('criteria'));
    }
}