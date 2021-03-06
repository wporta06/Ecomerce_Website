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

<body>
    {{-- =====================  navebar  ======================= --}}
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm ">
            <div class="container ">
                <a class="navbar-brand text-white font-weight-bold" href="{{ url('/admin') }}">
                    My Admin Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest {{-- if just guest show login and register --}}
                            <li class="nav-item">
                                <a class="nav-link text-white " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        {{-- =====================  to test if the admin connected  ======================= --}}
                            @if (auth()->guard('admin')->check())
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Welcome, {{ auth()->guard('admin')->user()->name }}
                                        <span class="font-weight-bold badge badge-pill badge-warning">{{$orders->count()}}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('products_route') }}">
                                            My Dashboard
                                            <span class="font-weight-bold badge badge-pill badge-warning"> {{$products->count()}}</span>
                                        </a>
                                        <a class="dropdown-item" href="{{ route('orders_route') }}">
                                            My Orders
                                            <span class="font-weight-bold badge badge-pill badge-warning"> {{$orders->count()}}</span>
                                                                                </a>
                                        <a class="dropdown-item" href="{{ route('adminlogout_route') }}">
                                            {{ __('Logout') }}
                                        </a>
                                    </div>
                                </li>
                            @else
                            {{-- =====================  if the user connected show this ======================= --}}
                                
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- =============================== cody3 ================================= --}}
        {{-- for showing alert from alerts.blade.php --}}
        <div class="row bgg">
            <div class="col-md-8 mx-auto ">
                @include('layouts.alerts') {{-- alerts.blade.php file --}}
            </div>
        </div>
        {{-- ================================================================ --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
