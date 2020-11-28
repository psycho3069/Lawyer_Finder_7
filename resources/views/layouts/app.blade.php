<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('welcome.title') }}</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/45fd1ea0f3.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/colorlib-search-9/custom-materialize.js') }}" defer></script>
    <script src="{{ asset('js/colorlib-search-9/flatpickr.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colorlib-search-9/main.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.uikit.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" defer></script>


    <style type="text/css">
        @yield('style')
    </style>

</head>
<body @yield('body-tag')>
    <div id="app" @yield('div-app-tag')>
        <nav id="navbar" class="navbar fixed-top navbar-expand-md navbar-light shadow-sm" @yield('div-navbar-tag')>
            <div class="container" @yield('div-container-tag')>
                <a class="navbar-brand" href="{{ url('/') }}">
                    @auth
                        <h7 style="color:black; -webkit-text-stroke: medium;">{{ Str::upper(auth()->user()->type) }}{{ ' HOME' }}</h7>
                    @else
                        <h4 style="color:black">{{ __('welcome.title') }}</h4>
                    @endauth
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link text-black" href="{{ url('/home') }}">{{ __('welcome.home') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">{{ __('welcome.how_to_apply') }}</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('login') }}">{{ __('welcome.login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-black" href="{{ route('register') }}">{{ __('welcome.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-black" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">{{ __('Notice Board') }}</a>
                        </li>

                        <!-- Switch Locale -->
                        <li class="nav-item">
                            @if(App::isLocale('en'))
                                <a class="nav-link text-black" href="locale/bn">{{ __('বাংলা') }}</a>
                            @else
                                <a class="nav-link text-black" href="locale/en">{{ __('English') }}</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#datatable').dataTable();
            $('#success-status').delay(3000).fadeOut('slow');
        });

        document.addEventListener('DOMContentLoaded', function() {
          // When the event DOMContentLoaded occurs, it is safe to access the DOM

        })
    </script>
        @yield('footer-script')
</body>
</html>
