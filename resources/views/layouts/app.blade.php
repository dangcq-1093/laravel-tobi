<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flickity.min.css') }}" rel="stylesheet">
    <title>Tobi</title>
</head>
<body>
    @include('component.menu')
    @include('component.home.banner')
    @include('component.sumary')
    @include('component.project-description')
    @include('component.timeline')
    @include('component.result')
    @include('component.project-impact')
    @include('component.slide')
    @include('component.footer')

    <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
</body>
</html>