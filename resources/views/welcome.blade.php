<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>
    @include("layouts.head")
</head>
<body>
{{--Nav here--}}
@include("layouts.nav")
<main>
    {{"Welcome Page"}}
</main>
{{--footer here--}}
@include("layouts.footer")
</body>

</html>
