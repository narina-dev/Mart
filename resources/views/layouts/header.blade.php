<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('plugins/axios/axios.min.js') }}"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    {{-- <link rel="stylesheet" href="style.css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark fixed" style="background-color:#2f353a;">

            <div class="container">
                <a class="navbar-brand" href="#">Egermatt</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('welcome')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.create')}}">Sell</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Wishlist</a>
                        </li>
                        @if(!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register')}}">Register</a>
                        </li>
                        @endif
                        @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('posts')}}">Posts</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link ml-5 text-primary" href="#"><i class="fa fa-user-circle"
                                    aria-hidden="true"></i>

                                {{ Auth::user()->name }}</a>
                        </li>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>

</html>
