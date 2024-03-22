{{-- resources/views/livewire/sidebar.blade.php --}}
<aside class="sidebar bg-gray-800 text-white w-64 min-h-screen text-xs" style="background-color:#313131">
    <div class="branding-block" style="background-color:#D33026; padding:18px">
        <h2 class="font-bold" style="font-size:14px; font-weight:bold">SAPOA Awards <span class="text-sm" style="font-weight:100">DASHBOARD</span></h2>
    </div>
    <nav class="left-navigation space-y-2">
        <livewire:left-nav-button text="Search" icon="search" />
        <livewire:left-nav-button text="Dashboard" link="/dashboard" icon="dashboard_white" />
        <livewire:left-nav-button text="Admin" :has-sub-buttons="true" :sub-buttons="[
            ['text' => 'View Admins', 'link' => '/admins'],
            ['text' => 'Link Admins', 'link' => '/link-admins'],
            ['text' => 'Add Admin', 'link' => '/add-admin'],
        ]"  />
        <livewire:left-nav-button text="Judges" :has-sub-buttons="true" :sub-buttons="[
            ['text' => 'View Judges', 'link' => '/judges'],
            ['text' => 'Link Judges to Entries', 'link' => '/link-judges'],
            ['text' => 'Add Judge', 'link' => '/add-judge'],
        ]"  />
        <livewire:left-nav-button text="Entries" :has-sub-buttons="true" :sub-buttons="[
            ['text' => 'All Entries', 'link' => '/entries'],
            ['text' => 'Judge Entries', 'link' => '/judge-entries'],
            ['text' => 'Payments', 'link' => '/payments'],
        ]"  />
        <livewire:left-nav-button text="List Users" link="/users"  />
    </nav>
</aside>