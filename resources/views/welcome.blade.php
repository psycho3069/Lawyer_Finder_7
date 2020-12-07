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

@section('content')
    <div class="text-white justify-content-center text-center" style="margin-top: 70px; min-height: 400px; background-color: #d03737; padding-top: 50px;">
        <div class="p-0 align-content-center" style="font-size: 16px; vertical-align: center;">

            <div id="animate-area" class="text-dark" style="background-image: url('img/home-supreme-court.png')">
                <h1 class="animate__animated animate__tada">@lang('welcome.title')</h1>

                <p class="animate__animated animate__bounceInLeft">
                    @lang('welcome.lawyer_finder_moto')
                </p>

                <p class="animate__animated animate__bounceInRight">
                    @lang('welcome.lawyer_finder_submoto')
                </p>
                <div class="justify-content-center">
                    <a href="{{ route('register') }}" class="btn btn-info" style="border-radius: 0;height: 50px; width: 150px; font-size: larger;">@lang('welcome.register')</a>
                </div>
            </div>

        </div>
    </div>

    {{-- <div style="min-height: 150px; background-image: linear-gradient(to bottom, #d03737, #ffffff);">
        
    </div> --}}

    <div class="text-black justify-content-center text-left p-5 m-4 faq_list_items" style="min-height: 500px; background-color: white;">
        <h1 class="text-center" style="padding: 50px 0px 0px 0px;">@lang('welcome.how_register')</h1>
        <h5 class="text-center" style="padding: 10px 0px 50px 0px;">@lang('welcome.procedure_register')</h5>

        <div class="item">
            <div class="item_index float-left numbers">@lang('welcome.hi1')</div>
            <div class="item_data">
                <h5><strong>@lang('welcome.ht1')</strong></h5>
                <div class="answer"><p>@lang('welcome.hd1')</p></div>
            </div>
        </div>

        <div class="item">
            <div class="item_index float-left numbers">@lang('welcome.hi2')</div>
            <div class="item_data">
                <h5><strong>@lang('welcome.ht2')</strong></h5>
                <div class="answer"><p>@lang('welcome.hd2')</p></div>
            </div>
        </div>

        <div class="item">
            <div class="item_index float-left numbers">@lang('welcome.hi3')</div>
            <div class="item_data">
                <h5><strong>@lang('welcome.ht3')</strong></h5>
                <div class="answer"><p>@lang('welcome.hd3')</p></div>
            </div>
        </div>

        <div class="item">
            <div class="item_index float-left numbers">@lang('welcome.hi4')</div>
            <div class="item_data">
                <h5><strong>@lang('welcome.ht4')</strong></h5>
                <div class="answer"><p>@lang('welcome.hd4')</p></div>
            </div>
        </div>

        <div class="justify-content-center" style="font-size: 16px;">
            <button class="btn btn-success" style="border-radius: 0;"><a href="{{ url('/register-details') }}">@lang('welcome.show')</a></button>
        </div>

    </div>
    <div class="row text-black justify-content-center text-left p-5 m-4" style="min-height: 500px;">
        <div class="col-md-6">
            <img src="{{url('/svg/question-mark.svg')}}" alt="" height="400" width="400" style="opacity: 75%;">
        </div>
        <div class="p-0 col-md-6" style="font-size: 16px;">
            <h1 class="text-center" style="padding: 50px 0px 0px 0px;">@lang('welcome.question')</h1>
            <p>@lang('welcome.answer',[ 'faq' => 'faq', 'contact' => 'contact-us'])</p>
        </div>
    </div>
@endsection

@section('footer-script')

@endsection