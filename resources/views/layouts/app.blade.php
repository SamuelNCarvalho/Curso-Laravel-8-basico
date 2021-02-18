<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo @yield('page_title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @auth
        @include('partials.header')
    @endauth
    <main role="main" class="container">
        @include('partials.alerts')
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
