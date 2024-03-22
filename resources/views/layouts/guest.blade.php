{{-- resources/views/layouts/guest.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SAPOA Awards') }}</title>
    <!-- Favicon -->
    <livewire:favicon/>

    <!-- Fonts -->
    <livewire:google-font font="Inter" weights="100..900" />

    <!-- Styles and Script -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="font-figtree text-gray-900 antialiased">
    <livewire:alert-bar />
    <div class="min-h-screen flex flex-col items-center justify-center">
        <!-- Main Content -->
        <div class="w-full flex flex-col items-center mt-20">
            <div class="w-full sm:max-w-md px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
