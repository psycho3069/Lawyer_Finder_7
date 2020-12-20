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


    <div class="container">
        <div class="section-header text-center">
            <h3 class="section-title">Categories</h3>
            <div class="section-desc">ICT Division provides grants in following four categories</div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <div class="category_type">
                    <img height="60" src="" alt="">
                    <div class="category_type_body">
                        <h5>Innovation Fund</h5>
                        <div class="cat_excerpt">Innovation project that can contribute in the ICT sector for country’s socio-economic development,public service or create new innovation services can avail the funds.</div>
                    </div>
                </div>

                <div class="category_type mt50">
                    <img height="60" src="" alt="">
                    <div class="category_type_body">
                        <h5>Fellowship/Scholarship</h5>
                        <div class="cat_excerpt">Personal/Educational/Institutio organizations project that able to contribute by using ICT in country’s education, health, agriculture, economy, development of women can avail special grants.For Masters, M Phil, Doctoral and Postdoctoral degree and for highly Research content educational purpose, one can avail Fellowship grants.</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div data-appear="true" data-animation="zoomIn" class="innov_bulb">
                    <img src="" alt="Innovation">
                </div>
            </div>

            <div class="col-md-4">
                <div class="category_type">
                    <img height="60" src="" alt="">
                    <div class="category_type_body">
                        <h5>Special Grants</h5>
                        <div class="cat_excerpt">Personal/Educational/Institutio organizations project that able to contribute by using ICT in country’s education, health, agriculture, economy, development of women can avail special grants.</div>
                    </div>
                </div>


                <div class="category_type mt50">
                    <img height="60" src="" alt="">
                    <div class="category_type_body">
                        <h5>High Profile ICT  Scholarship</h5>
                        <div class="cat_excerpt">For high academic achievement in all stages of academic life and to continue the gratitude, one may avail High Profile Scholarship</div>
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