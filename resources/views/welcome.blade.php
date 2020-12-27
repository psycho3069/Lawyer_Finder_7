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


    {{-- ----------------   PROCEDURE   ---------------- --}}
    <div class="row text-black justify-content-center text-left p-5 m-4 faq_list_items" style="min-height: 500px; background-color: white;">
        <div class="col-md-6 pt-5 mt-5" style="border: solid maroon 1px;">
            @if(App::isLocale('en'))
                <img src="{{url('/storage/logo/procedure_eng.jpg')}}" alt="" class="img-fluid">
            @else
                <img src="{{url('/storage/logo/procedure.jpg')}}" alt="" class="img-fluid">
            @endif
        </div>
        <div class="col-md-6"><h1 class="text-center" style="padding: 10px 0px 0px 0px;">@lang('welcome.how_register')</h1>
            <h5 class="text-center" style="padding: 10px 0px 10px 0px;">@lang('welcome.procedure_register')</h5>

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
    </div>


    <div class="container pb-5">
        <div class="section-header text-center pb-4">
            <h3 class="section-title">@lang('welcome.court_title')</h3>
            <div class="section-desc">@lang('welcome.court_sub')</div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <div class="category_type">
                    @if(App::isLocale('en'))
                        <img height="60" src="{{url('/img/supreme-court-english.png')}}" alt="">
                    @else
                        <img height="60" src="{{url('/img/supreme-court-bangla.png')}}" alt="">
                    @endif
                    
                    <div class="category_type_body">
                        <h5>@lang('welcome.supreme')</h5>
                        <div class="cat_excerpt text-justify">@lang('welcome.supreme_details')</div>
                    </div>
                </div>

                <div class="category_type mt50">
                    <img height="60" src="{{url('/img/output-onlinepngtools.png')}}" alt="">
                    <div class="category_type_body">
                        <h5>@lang('welcome.high')</h5>
                        <div class="cat_excerpt text-justify">@lang('welcome.high_details')</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 justify-content-center text-md-center">
                <div data-appear="true" data-animation="zoomIn" class="innov_bulb">
                    <figure>
                        <img style="width: 100%; height: auto;" class="img-fluid img img-responsive vertical-center" src="{{url('/img/supreme-court.jpg')}}" alt="Supreme Court">
                        <figcaption>@lang('welcome.fig_caption')</figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category_type">
                    <div class="category_type_body">
                        <img height="60" src="{{url('/img/criminal.png')}}" alt="">
                        <h5>@lang('welcome.judge')</h5>
                        <div class="cat_excerpt text-justify">@lang('welcome.judge_details')</div>
                    </div>
                </div>


                <div class="category_type mt50">
                    <img height="60" src="{{url('/img/law.png')}}" alt="">
                    <div class="category_type_body">
                        <h5>@lang('welcome.session')</h5>
                        <div class="cat_excerpt text-justify">@lang('welcome.session_details')</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5 justify-content-center text-md-center" style="background-color: #f1d1d2;">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div data-appear="true" data-animation="zoomIn" class="counter_item">
                    <div class="counter-image">
                        <img src="http://ims.ictd.gov.bd/assets/images/counter/users.svg" height="50" alt="Users">
                    </div>
                    <div class="counter-info">
                        <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $users->count() }}</div>
                        <h5>@lang('welcome.users')</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="counter_item">
                    <div data-appear="true" data-animation="zoomIn" class="counter-image">
                        <img src="http://ims.ictd.gov.bd/assets/images/counter/brain.svg" height="50" alt="Users">
                    </div>
                    <div class="counter-info">
                        <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $lawyers->count() }}</div>
                        <h5>@lang('welcome.lawyers')</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="counter_item">
                    <div data-appear="true" data-animation="zoomIn" class="counter-image">
                        <img src="http://ims.ictd.gov.bd/assets/images/counter/speed.svg" height="50" alt="Users">
                    </div>
                    <div class="counter-info">
                        <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $clients->count() }}</div>
                        <h5>@lang('welcome.clients')</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div data-appear="true" data-animation="zoomIn" class="counter_item">
                    <div class="counter-image">
                        <img src="http://ims.ictd.gov.bd/assets/images/counter/victory.svg" height="50" alt="Users">
                    </div>
                    <div class="counter-info">
                        <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $cases->count() }}</div>
                        <h5>@lang('welcome.cases')</h5>
                    </div>
                </div>
            </div>


        </div>
    </div>

    {{--------------------   FAQ   --------------------}}
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