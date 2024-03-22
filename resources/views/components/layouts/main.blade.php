{{-- resources/views/components/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'SAPOA Awards') }}</title>
        
        <!-- Favicon -->
        <livewire:favicon/>

        <!-- Fonts -->
        <livewire:google-font font="Inter" weights="100..900" />

        <!-- Styles and Script -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
<body>
    <div class="flex">
        <!-- Sidebar -->
        <livewire:sidebar />
        
        <div class="flex-1">
            <!-- Header Bar -->
            <livewire:headerbar />
    
            <!-- Main Content -->
            <main class="main-content p-4">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>