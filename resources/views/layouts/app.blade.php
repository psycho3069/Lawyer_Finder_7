<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('app.title')</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/45fd1ea0f3.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/colorlib-search-9/custom-materialize.js') }}" defer></script>
    <script src="{{ asset('js/colorlib-search-9/flatpickr.js') }}" defer></script>

    <!-- Icon -->
    <link rel="icon" type="image/png" href="{{url('/storage/logo/logo.png')}}" />

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
        @include('layouts.style')
    </style>
</head>

<body @yield('body-tag') style="background-color: white;">
    <div id="app">
        <nav id="navbar" class="navbar fixed-top navbar-expand-md navbar-light shadow-sm" @yield('div-navbar-tag')>
            <div class="container" @yield('div-container-tag')>
                <img style="width: 35px; color:maroon;" src="{{url('/storage/logo/logo.png')}}" alt="" class="img-fluid color-maroon">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    @auth
                        <h7 style="color:black; -webkit-text-stroke: medium;">&nbsp&nbsp{{ Str::upper(auth()->user()->type) }}{{ ' DASHBOARD' }}</h7>
                    @else
                        <h4 style="color:black">@lang('app.title')</h4>
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
                            <a class="nav-link text-black" href="{{ url('/home') }}"><i class="fas fa-home fa-sm text-primary"  style="height: 20px; width: 20px;"></i>@lang('app.home')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-black" href="{{ route('register-details') }}"><i class="fas fa-registered fa-sm text-primary"  style="height: 20px; width: 20px;"></i>@lang('app.how_to_apply')</a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link text-black" href="{{ route('notice.index') }}"><i class="fas fa-flag fa-sm text-primary"  style="height: 20px; width: 20px;"></i>@lang('app.notice_board')</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('login') }}"><i class="fas fa-user-lock fa-sm text-primary"  style="height: 20px; width: 20px;"></i>@lang('app.login')</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-black" href="{{ route('register') }}"><i class="fas fa-user-plus fa-sm text-primary"  style="height: 20px; width: 20px;"></i>@lang('app.register')</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="background-color: #f1d1d2;" id="navbarDropdown" class="nav-link dropdown-toggle text-black" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-shield fa-sm text-primary"  style="height: 20px; width: 20px;"></i>{{ Auth::user()->name }}
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


                        <!-- Switch Locale -->
                        <li class="nav-item">
                            @if(App::isLocale('en'))
                                <a class="nav-link text-black" href="{{ route('locale','bn') }}">{{ __('বাংলা') }}</a>
                            @else
                                <a class="nav-link text-black" href="{{ route('locale','en') }}">{{ __('English') }}</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="margin-bottom: 160px;">
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')

    <script type="text/javascript">
        $(document).ready( function () {
            $('#datatable').dataTable();
            $('#success-status').delay(3000).fadeOut('slow');
        });

        document.addEventListener('DOMContentLoaded', function() {
          // When the event DOMContentLoaded occurs, it is safe to access the DOM

        })
    </script>
    <script>
        $("[lang='bang']").text(function(i, val) {
            return val.replace(/\d/g, function(v) {
                return String.fromCharCode(v.charCodeAt(0) + 0x09B6);
            });
        });
        // const persianDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        // const number = 44653420;

        // $(document).ready( function () {
        //     var v = $('#num').val()
        
        //     convertedNumber = String(number).replace(/\d/g, function(digit) {
        //         return persianDigits[digit]
        //     })
        //     console.log(v) // ۴۴۶۵۳۴۲۰
        // });
        
    </script>
        @yield('footer-script')
</body>
</html>
