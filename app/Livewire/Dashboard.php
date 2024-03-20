<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;
use App\Models\Invoice;
use App\Models\Judge;
use App\Models\User;

class Dashboard extends Component
{
    public function render()
    {
        $entries = Entry::count();
        $invoices = Invoice::count();
        $judges = Judge::count();
        $recentlyActiveUsers = User::orderBy('last_login_at', 'desc')->take(10)->get();

        return view('livewire.dashboard', compact('entries', 'invoices', 'judges', 'recentlyActiveUsers'));
    }
}