<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('css/shop-homepage.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ url('js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
  </head>

  <body>
  @include('include.header')

  @yield('content')

  
  <script src=" {{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
