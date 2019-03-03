<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./favicon.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'laravue-nav') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')

<!-- Styles -->
</head>
<body>
<div id="app">
    {{--<img src="{{ asset('svg/top.svg') }}" alt="top" class="scroll-top">--}}
    {{--@include('layouts.nav')--}}
    This is how we live!
    @yield('content')
    @yield('_footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('js')
</body>
</html>
