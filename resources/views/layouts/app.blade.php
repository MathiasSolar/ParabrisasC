<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>
        @include('components.header')
        <main>
            @yield('content')
        </main>
        @include('components.footer')
    </body>
</html>