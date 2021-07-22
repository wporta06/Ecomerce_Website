<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body >
    {{-- =====================  navebar  ======================= --}}
    <div id="app" class="navbarr">
        <nav class="navbar navbarr navbar-expand-md  navbar-light  shadow-sm bg-transparent" >
            <div class="container" >
               
                <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
                    <img src="{{asset('assets/logo.png')}}" width="70" height="70" alt="">
                    HIKEZ
                  </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                      <a class="nav-item nav-link {{ (request()->is('products/category/hiking-bags')) ? 'active' : '' }}" href="{{ url('http://127.0.0.1:8000/products/category/hiking-bags') }}">SHOP</a>
                      <a class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="{{ url('/about') }}">ABOUT</a>
                    </div>
                  </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest {{-- if just guest show login and register --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        {{-- =====================  to test if the admin connected  ======================= --}}
                           
                            {{-- =====================  if the user connected show this ======================= --}}
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- =============================== cody3 ================================= --}}
        {{-- for showing alert from alerts.blade.php --}}
        <div class="row">
            <div class="col-md-8 mx-auto ">
                @include('layouts.alerts') {{-- alerts.blade.php file --}}
            </div>
        </div>
        {{-- ================================================================ --}}

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
 {{-- footer --}}
 <footer class="bg-light text-center text-white bg-dark mt-5">

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="https://HIKEZ.com.com/">HIKEZ.com</a>

        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
                class="fab fa-facebook-f"></i></a>

        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
                class="fab fa-instagram"></i></a>
    </div>
    <!-- Copyright -->
</footer>
</html>
