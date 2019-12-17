<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--Scripts, Styles and CSRF here--}}
    @include("layouts.head")
</head>
<body>
<div id="app">
    {{--Nav here--}}
    @include("layouts.nav")
    <main class="py-4">
        @yield('content')
    </main>
    {{--footer here--}}
    @include("layouts.footer")
</div>
</body>
</html>
