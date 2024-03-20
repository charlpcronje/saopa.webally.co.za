<?php
// app/Livewire/Admin/Dashboard.php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Entry;
use App\Models\Invoice;
use App\Models\Judge;
use App\Models\User;

class Dashboard extends Component
{
    public $totalEntries;
    public $entriesPercentage;
    public $totalInvoices;
    public $invoicesPercentage;
    public $totalJudges;
    public $judgesPercentage;
    public $totalUsers;
    public $usersPercentage;
    public $recentEntries;

    public function mount()
    {
        $this->totalEntries = Entry::count();
        $this->entriesPercentage = $this->calculatePercentage($this->totalEntries, Entry::count());
        $this->totalInvoices = Invoice::count();
        $this->invoicesPercentage = $this->calculatePercentage($this->totalInvoices, Invoice::count());
        $this->totalJudges = Judge::count();
        $this->judgesPercentage = $this->calculatePercentage($this->totalJudges, Judge::count());
        $this->totalUsers = User::count();
        $this->usersPercentage = $this->calculatePercentage($this->totalUsers, User::count());
        $this->recentEntries = Entry::latest()->take(5)->get();
    }

    private function calculatePercentage($value, $total)
    {
        return $total > 0 ? round(($value / $total) * 100) : 0;
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}