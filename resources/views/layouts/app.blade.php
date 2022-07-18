<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.cdnfonts.com/css/operator-mono" rel="stylesheet">

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @stack('styles')

        <!-- Scripts -->
        @livewireStyles

        @wireUiScripts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewire('livewire-ui-modal')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
