<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}} - {{$title}}</title>

        <script type="text/javascript" src="/js/app.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles
    </head>
    <body class="background">
        @include('layouts.header')

        {{ $slot }}
    
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    </body>
</html>