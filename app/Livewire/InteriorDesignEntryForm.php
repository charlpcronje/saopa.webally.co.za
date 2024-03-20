<?php

namespace App\Http\Livewire\Entries;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Entry;

class InteriorDesignEntryForm extends Component
{
    use WithFileUploads;

    // Declare properties for form fields
    public $firstName;
    public $surname;
    // ...

    protected $rules = [
        'firstName' => 'required',
        'surname' => 'required',
        // ...
    ];

    public function render()
    {
        return view('livewire.entries.interior-design-entry-form');
    }

    public function submit()
    {
        $this->validate();

        // Process and store the entry data
        $entry = Entry::create([
            'first_name' => $this->firstName,
            'surname' => $this->surname,
            // ...
        ]);

        // Process and store the uploaded files
        // ...

        // Redirect or show success message
        session()->flash('success', 'Interior design entry submitted successfully.');
        $this->reset();
    }
}