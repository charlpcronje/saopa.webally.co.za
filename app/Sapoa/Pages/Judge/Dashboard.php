<?php
// app/Sapoa/Pages/Judge/Dashboard.php
namespace App\Sapoa\Pages\Judge;

use Livewire\Component;
use App\Models\Entry;
use App\Models\Criteria;

class Dashboard extends Component
{
    public $assignedEntries;
    public $ratingCriteria;

    public function mount()
    {
        $this->assignedEntries = Entry::whereHas('judges', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->get();
        
        $this->ratingCriteria = Criteria::all();
    }

    public function render()
    {
        return view('pages.judge.dashboard');
    }
}