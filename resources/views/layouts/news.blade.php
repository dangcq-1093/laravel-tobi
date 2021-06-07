<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <title> News </title>
</head>
<body>
    @include('component.menu')
    @include('component.news')
    @include('component.footer')
</body>
</html>