## Creating Livewire Page Components

To create a Livewire page component that extends the layout and includes the necessary layout components, follow these steps:

1. Generate a new Livewire component using the Artisan command:

```bash
php artisan make:livewire PageName
```

Replace `PageName` with the desired name of your page component.

2. Update the generated Livewire component class to extend the main layout:

```php
// app/Http/Livewire/PageName.php
namespace App\Http\Livewire;

use Livewire\Component;

class PageName extends Component
{
    public function render()
    {
        return view('livewire.page-name')->extends('layouts.app');
    }
}
```

3. Update the corresponding Blade view for the page component:

```html
<!-- resources/views/livewire/page-name.blade.php -->
@section('content')
    <!-- Page content goes here -->
@endsection
```



4. Define a route for the page component in the `routes/web.php` file:

```php
// routes/web.php
Route::get('/page-url', function () {
    return view('livewire.page-name');
});
```

Replace `/page-url` with the desired URL for the page.

5. Include the necessary layout components and the `@yield('content')` directive in your main layout file:

```html
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Head content -->
    @livewireStyles
</head>
<body>
    <div class="flex">
        <!-- Sidebar -->
        <livewire:sidebar />
        
        <div class="flex-1">
            <!-- Header Bar -->
            <header class="header-bar bg-gray-800 text-white p-4">
                <!-- Header bar content -->
            </header>
    
            <!-- Main Content -->
            <main class="main-content p-4">
                {{ $slot }}
            </main>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
```