<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 & MySQL CRUD Tutorial</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('bootstrap-4.5.3/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
</head>

<body>
    <div class="container">
        @yield('main')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    {{-- <script src="{{ asset('bootstrap-4.5.3/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
</body>

</html>
