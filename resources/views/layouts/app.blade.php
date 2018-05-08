<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ url('images/logo2.png') }}" />
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('css/shop-homepage.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ url('js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>    
</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
