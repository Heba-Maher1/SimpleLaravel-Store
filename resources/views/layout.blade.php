<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* ! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>

    <link rel="stylesheet" href="{{ url('css/style.css') }}">

<body class="antialiased">
    <div class="co flex justify-between realtive py-4 px-6">
        <div class="logo">myStore</div>
        <nav>
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('home.about')}}">About</a>
            <a href="{{route('computer.index')}}">Computer</a>
            <a href="{{route('home.contact')}}">Contact</a>
            <a href="{{route('computer.create')}}">Create</a>
        </nav>
    </div>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @yield('content')
    </div>
</body>

</html>