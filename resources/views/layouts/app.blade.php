<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title',config('app.name', 'Laravel'))</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- custom css -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body dir="rtl">
    @include('partials/navbar')

    <div class="jumbotron text-center" >
        @include('partials/searchfrm')
    </div>
    <div class="container">
        @include('partials/categoryNav')
    </div>

    <hr>

    <div class="container text-right" >
        @yield('content')
    </div>

   @include('partials/footer')

   @yield('scripts')
</body>
</html>
