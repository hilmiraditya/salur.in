<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Multi Auth Guard') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ url('images/logo2.png') }}" />
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('css/shop-homepage.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ url('js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>



    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @include('Pekerja.layout.header');
    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
