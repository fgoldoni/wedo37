<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {!! SEO::generate() !!}

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        @stack('styles')

        <!-- Scripts -->
        <wireui:scripts />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <div class="font-sans min-h-screen bg-gray-100 antialiased">
            @include('layouts.navigation')
            <main>
                {{ $slot }}
            </main>
        </div>

        @livewire('livewire-ui-modal')

        @stack('scripts')

        @livewireScripts
        <x-wedo.home.float-button></x-wedo.home.float-button>
    </body>
</html>
