{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ 'SAPOA Awards' }}@if(isset($title) && !empty($title)){{ ' | ' . $title }}@else{{ ' | Page Title' }}@endif</title>
        
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml"/>
        <meta name="theme-color" content="#292929"/>

        <!-- Fonts -->
        <livewire:google-font font="Inter" weights="100..900" />

        <!-- Styles and Script -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>
    </head>
    <body>
        <livewire:layout.shared.notice />
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