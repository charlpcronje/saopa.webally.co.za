{{-- resources/views/components/layouts/blank.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ 'SAPOA | '.$title ?? 'SAPOA' }}</title>

        <!-- Favicon -->
        <livewire:favicon/>

        <!-- Fonts -->
        <livewire:google-font font="Inter" weights="100..900" />

        <!-- Styles and Script -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
