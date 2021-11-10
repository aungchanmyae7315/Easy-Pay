<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        {{-- <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"> --}}
        <link href="frontend/css/swiper-bundle.min.css" rel="stylesheet"></head>
        <link href="frontend/css/style.css" rel="stylesheet"></head>

</head>
@yield('css')
<body>
    @include('frontend.layouts.header')
    @include('frontend.layouts.body')
    @include('frontend.layouts.footer')   
    <script type="text/javascript" src="{{asset('frontend/js/scrollreveal.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
@yield('scripts')
</body>
</html>