<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============--> 
    {{-- <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"> --}}
    <link href="frontend/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="frontend/css/style.css" rel="stylesheet">

</head>
<style>
    .container {
        width:unset !important;
    }
</style>
<body>
    <div id="app">
        

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html> 


<script type="text/javascript" src="{{asset('frontend/js/scrollreveal.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
    