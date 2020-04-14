<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('blog/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/css/aos.css') }}">
    <link href="{{ asset('blog/css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('blog/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/css/style.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div id="app">
    <div class="site-wrap">
      @include('widgets.topbar')
      @yield('content')
      @include('widgets.newsletter')
      @include('widgets.footer')
    </div>
  </div>
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>
  <script src="{{asset('blog/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('blog/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('blog/js/jquery-ui.js')}}"></script>
  <script src="{{ asset('blog/js/app.js') }}" defer></script>
  <script src="{{asset('blog/js/popper.min.js')}}"></script>
  <script src="{{asset('blog/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('blog/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('blog/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('blog/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('blog/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('blog/js/aos.js')}}"></script>
  <script src="{{asset('blog/js/jquery.fancybox.min.js')}}')}}"></script>
  <script src="{{asset('blog/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('blog/js/jquery.mb.YTPlayer.min.js')}}"></script>
  <script src="{{asset('blog/js/main.js')}}"></script>
</body>
</html>
