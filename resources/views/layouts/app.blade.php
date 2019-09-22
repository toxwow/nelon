<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nelon @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>

    <div id="app" class="main">
        <div class="header-container">
            <div class="container">
                <div class="row">
                    <div class="col-12 header-wrapper">
                        <div class="contact-wrapper">
                            <div class="address-wrapper d-flex align-items-center">
                                <img class="icon-contact" src="{{asset('images/pin-icon.png')}}" alt=""><p class="address">Stacja Kolejowa Zabłocie, ul. Kącik 24, Kraków</p>
                            </div>
                            <div class="contact">
                                <div class="phone-wrapper d-flex align-items-center">
                                    <img class="icon-contact" src="{{asset('images/phone-icon.png')}}" alt=""><p class="number">+48 518 622 180</p>
                                </div>
                                <div class="mail-wrapper d-flex align-items-center">
                                    <img class="icon-contact" src="{{asset('images/email-icon.png')}}" alt=""><p class="email">info@nelon.pl</p>
                                </div>
                            </div>
                        </div>
                        <div class="logo-wrapper">
                            <a href="/"><img src="{{asset('/images/logo_nelon.png')}}" alt=""></a>
                        </div>
                        <div class="social-wrapper">
                            <a href=""><img src="{{asset('/images/fb-logo.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('/images/instagram-logo.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('/images/tripadvisor-logo.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="sticky-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hamburger-wrapper">
                            <div class="d-flex">
                                <img class="icon-contact" src="{{asset('images/phone-icon.png')}}" alt="">
                                <p class="number">+48 518 622 180</p>
                            </div>
                                <a href="#" class="menu-button" id="menuButton">
                                <span class="burger-icon"></span>
                            </a>
                        </div>
                        <div class="menu-wrapper">
                            <a class="menu-item" href="{{route('home')}}">Home</a>
                            <a class="menu-item" href="{{route('about')}}">O nas</a>
                            <a class="menu-item" href="{{route('cafe')}}">Kawiarnia</a>
                            <a class="menu-item" href="">Cennik</a>
                            <a class="menu-item" href="">Regulamin</a>
                            <a class="menu-item" href="{{route('contact')}}">Kontakt</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="page-footer">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">copyright © 2018
            </div>
            <!-- Copyright -->
        </footer>
    </div>

    <script src="{{asset('js/index.js')}}" defer></script>
    @stack('scripts')
</body>
</html>

{{--<div id="app">--}}
    {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
        {{--<div class="container">--}}
            {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                {{--{{ config('app.name', 'Laravel') }}--}}
            {{--</a>--}}
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}

            {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="navbar-nav mr-auto">--}}

                {{--</ul>--}}

                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="navbar-nav ml-auto">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@guest--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                        {{--</li>--}}
                        {{--@if (Route::has('register'))--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--@else--}}
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                   {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                    {{--{{ __('Logout') }}--}}
                                {{--</a>--}}

                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                    {{--@csrf--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--@endguest--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

    {{--<main class="py-4">--}}
        {{--@yield('content')--}}
    {{--</main>--}}
{{--</div>--}}