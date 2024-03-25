{{-- resources/views/layouts/guest.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ 'SAPOA Awards' }}@if(isset($title) && !empty($title)){{ ' | ' . $title }}@else{{ ' | Page Title' }}@endif</title>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml"/>
        <meta name="theme-color" content="#292929"/>

        <!-- Fonts -->
        <livewire:layout.shared.google-font font="Inter" weights="100..900" />
        <!-- Styles and Script -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>
    </head>
    <body class="font-figtree text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col items-center justify-center">
            <!-- Main Content -->
            <div class="w-full flex flex-col items-center mt-20">
                <div class="w-full sm:max-w-md px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <livewire:layout.shared.notice /> 
    </body>
</html>
