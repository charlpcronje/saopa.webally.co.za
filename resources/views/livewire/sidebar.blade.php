{{-- resources/views/livewire/sidebar.blade.php --}}
<aside class="sidebar bg-gray-800 text-white w-64 min-h-screen">
    <div class="branding-block" style="background-color:#D33026; padding:18px">
        <!-- Branding block content -->
        <h2 class="font-bold" style="font-size:14px; font-weight:bold">SAPOA Awards <span class="text-sm" style="font-weight:100">DASHBOARD</span></h2>
    </div>
    <nav class="left-navigation p-4 space-y-2">
        <livewire:left-nav-button icon="search" text="Search" />
        <livewire:left-nav-button icon="dashboard_white" text="Dashboard" link="/dashboard" />
        <livewire:left-nav-button icon="chevron_down" text="Admin" :has-sub-buttons="true">
            <livewire:left-nav-sub-button text="View Admins" link="/admins" />
            <livewire:left-nav-sub-button text="Link Admins" link="/link-admins" />
            <livewire:left-nav-sub-button text="Add Admin" link="/add-admin" />
        </livewire:left-nav-button>
        <livewire:left-nav-button icon="chevron_down" text="Judges" :has-sub-buttons="true">
            <livewire:left-nav-sub-button text="View Judges" link="/judges" />
            <livewire:left-nav-sub-button text="Link Judges to Entries" link="/link-judges" />
            <livewire:left-nav-sub-button text="Add Judge" link="/add-judge" />
        </livewire:left-nav-button>
        <livewire:left-nav-button icon="chevron_down" text="Entries" :has-sub-buttons="true">
            <livewire:left-nav-sub-button text="All Entries" link="/entries" />
            <livewire:left-nav-sub-button text="Judge Entries" link="/judge-entries" />
            <livewire:left-nav-sub-button text="Payments" link="/payments" />
        </livewire:left-nav-button>
        <livewire:left-nav-button icon="list" text="List Users" link="/users" />
    </nav>
</aside>