<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Title')</title>
    @include('template.bootstrap')
    <script src="{{ asset('bootstrap5.2/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body style="background-color: #F6F7EE ;overflow-x: hidden;">
    @include('template.header')

    
    @yield('konten');

    @include('template.footer')
</body>
</html>