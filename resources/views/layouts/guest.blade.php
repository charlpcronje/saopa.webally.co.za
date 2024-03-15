{{-- resources/views/layouts/guest.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | SAPOA Awards Dashboard</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="font-figtree text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <!-- Static Top Navbar -->
        <div class="fixed top-0 w-full bg-white shadow">
            <!-- Your Navbar Content -->
        </div>
        <!-- Main Content -->
        <div class="w-full flex flex-col items-center mt-20"> <!-- mt-20 to make space for the navbar -->
            <div>
                <!-- Your Logo Here -->
            </div>
            <div class="w-full sm:max-w-md px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>
