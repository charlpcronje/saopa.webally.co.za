<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Entry, Judge, Invoice, User};

/**
 * DC-DashboardController-C1-A+- Handles dashboard data aggregation and display
 */
class DashboardController extends Controller
{
    /**
     * DC-index-M1-A+- Display the dashboard with aggregated data
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetching entries data
        $entriesCount = Entry::count();
        $completedEntries = Entry::where('status', 'completed')->count();
        $disqualifiedEntries = Entry::where('status', 'disqualified')->count();

        // Fetching invoice data
        $totalInvoices = Invoice::count();
        $paidInvoices = Invoice::where('status', 'paid')->count();
        $pendingInvoices = Invoice::where('status', 'pending')->count();

        // Fetching judges data
        $judgesCount = Judge::count();
        $activeJudges = Judge::where('status', 'active')->count();

        // Fetching recent user activities
        $recentUsers = User::latest()->take(5)->get();

        // Preparing data for the dashboard view
        $data = [
            'entriesCount' => $entriesCount,
            'completedEntries' => $completedEntries,
            'disqualifiedEntries' => $disqualifiedEntries,
            'totalInvoices' => $totalInvoices,
            'paidInvoices' => $paidInvoices,
            'pendingInvoices' => $pendingInvoices,
            'judgesCount' => $judgesCount,
            'activeJudges' => $activeJudges,
            'recentUsers' => $recentUsers,
        ];

        return view('dashboard', $data);
    }
}
