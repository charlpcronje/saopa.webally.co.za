{{-- resources/views/components/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SAPOA Awards') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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