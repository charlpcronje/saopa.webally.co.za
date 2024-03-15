
# Sidebar Component

The `Sidebar` component represents the sidebar navigation of the application. It includes the branding block and left navigation buttons.

### Blade Template

```html
<!-- resources/views/livewire/sidebar.blade.php -->
<aside class="sidebar bg-gray-800 text-white w-64 min-h-screen">
    <div class="branding-block bg-gray-900 p-4">
        <h1 class="text-xl font-bold">SAPOA Awards</h1>
        <h2 class="text-gray-400">Dashboard</h2>
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
```

### Class Code

```php
// app/Http/Livewire/Sidebar.php
namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Sidebar extends Component
{
    public function render(): View
    {
        return view('livewire.sidebar');
    }
}
```

### Usage

To include the `Sidebar` component in your layout, simply add the following code in your main layout file:

```html
<livewire:sidebar />
```

Generate the `Sidebar` component using the following Artisan command:

```bash
php artisan make:livewire Sidebar
```