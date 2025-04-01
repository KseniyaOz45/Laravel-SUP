<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title', 'SUP')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arsenal+SC&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=BIZ+UDPGothic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carlito&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap-Calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Clock-Real-Time-real-time-clock.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Clock-Real-Time.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Features-Image-images.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Lightbox-Gallery-No-Gutters-baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Navbar-With-Button-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Powerful-Calendar.css') }}">
</head>

<body>
    @if (Route::currentRouteName() == 'index')
        @include('layouts.index-header')
    @else
        @include('layouts.default-header')
    @endif

    @yield('content')

    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/bs-init.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="{{ asset('js/Lightbox-Gallery-No-Gutters-baguetteBox.min.js') }}"></script>
    <script src="{{ asset('js/Lightbox-Gallery-No-Gutters-Lightbox-Gallery.js') }}"></script>
    <script src="{{ asset('js/Powerful-Calendar-style.js') }}"></script>
</body>

</html>
