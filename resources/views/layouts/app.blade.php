<!doctype html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Philosophy') }}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/all.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body id="top">

@include('layouts.header')

@yield('content')

@include('layouts.extra')
@include('layouts.footer')
@include('layouts.preloader')

<!-- Java Script
    ================================================== -->
<script src="{{ asset('js/all.js') }}"></script>

</body>

</html>

