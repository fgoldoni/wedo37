<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('images/logos/favicon.png') }}" type="image/png">
        {!! SEO::generate() !!}

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>

        <style>
            body {
                font-family: 'Josefin Sans';
            }
        </style>
        @stack('styles')

        <!-- Scripts -->
        <wireui:scripts />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-DJL7N46CXH"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-DJL7N46CXH');
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-240737354-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-240737354-1');
        </script>
    </head>
    <body>
        <div class="min-h-screen bg-gray-100 antialiased">
            @include('layouts.navigation')
            <main>
                {{ $slot }}
            </main>
        </div>

        @livewire('livewire-ui-modal')

        @stack('scripts')

        @livewireScripts
{{--        <x-wedo.home.float-button></x-wedo.home.float-button>--}}
    </body>
</html>
