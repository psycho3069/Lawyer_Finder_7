{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
 --}}

@extends('layouts.app')

@section('style')
    @include('layouts.style')
@endsection

@section('content')
    <div class="text-white justify-content-center text-center" style="margin-top: 70px; min-height: 350px; background-color: #d03737;">
        <div class="p-0 align-content-center" style="font-size: 16px; vertical-align: center;">
            <h1 class="animate__animated animate__tada">Lawyer Finder</h1>

            <p class="animate__animated animate__bounceInLeft">
                Lawyer Finder is an innovative and convenient web application where clients can easily find their desired lawyers and communicate with them easily.
            </p>

            <p class="animate__animated animate__bounceInRight">
                Another innovative drive for Digital Bangladesh
            </p>

            <!-- <div class="trap-container">
              <svg width="100%" height="100%" viewBox="0 50 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <polygon points="0,50 100,0 100,100 0,100">
                </polygon>
              </svg>
              <div class="trap-content">Lorem ipsum dollar si amet, Lorem ipsum dollar si amet, Lorem ipsum dollar si amet, 
              </div>
            </div> -->
            {{-- <h1 class="animate__animated animate__bounce">An animated element</h1> --}}
        </div>
    </div>
    <div class="text-black justify-content-center text-left p-5 m-4" style="min-height: 500px; background-color: #f1d1d2;">
        <h1 class="text-center">How To Register</h1>
        <div class="p-0" style="font-size: 16px;">
            <h3 class="">1 Enter Name</h3>
            <p class="">
                Enter your original name according to your NID card provided by your government.
            </p>
        </div>
        <div class="p-0" style="font-size: 16px;">
            <h3 class="">2 Enter Email Address</h3>
            <p class="">
                Enter your Email Address through which the administration may communicate with you or inform you of important notices.
            </p>
        </div>
        <div class="p-0" style="font-size: 16px;">
            <h3 class="">3 Enter A Secure Password</h3>
            <p class="">
                Enter a secure and difficult password and remember it for further login process. Then enter it again to confirm that you are typing it correctly.
            </p>
        </div>
        <div class="p-0" style="font-size: 16px;">
            <h3 class="">4 Enter Personal Details</h3>
            <p class="">
                Enter your contact number, location, birthdate, gender and type and submit as a client or a lawyer
            </p>
        </div>
        <div class="p-0" style="font-size: 16px;">
            <button class="btn btn-success"><a href="{{ url('/register-details') }}">Show In Details</a></button>
        </div>
    </div>
@endsection

@section('footer-script')

@endsection