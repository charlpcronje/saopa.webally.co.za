<?php
// app/Livewire/User/Dashboard.php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Entry;
use App\Models\Invoice;


class Dashboard extends Component
{
    
    public $entries;
    public $invoices;
    public $paymentHistory;

    public function mount()
    {
        $this->entries = Entry::where('user_id', auth()->user()->id)->latest()->take(5)->get();
        $this->invoices = Invoice::where('user_id', auth()->user()->id)->latest()->take(5)->get();
    }

    #[Layout('layouts.dashboard')]
    public function render()
    {
        $totalEntries = Entry::where('user_id', auth()->user()->id)->count();
        $completedEntries = Entry::where('user_id', auth()->user()->id)->where('status', 'completed')->count();
        $totalInvoices = Invoice::where('user_id', auth()->user()->id)->count();
        $paidInvoices = Invoice::where('user_id', auth()->user()->id)->where('status', 'paid')->count();

        return view('livewire.user.dashboard', compact('totalEntries', 'completedEntries', 'totalInvoices', 'paidInvoices'));
    }
}