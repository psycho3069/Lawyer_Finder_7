@extends('layouts.app')

@section('content')

<div class="" style="margin-top: 95px; border: solid lightgray 1px;">
    <div class="row justify-content-center" style="">

    	<section id="page-title">
                <h1>@lang('faq.title')</h1>
                <hr>

                {{-- <ol class="float-right" style="display:flex;">
                    <li class="breadcrumb-item"><a href="http://ims.ictd.gov.bd/">হোম</a></li>
                    <li class="breadcrumb-item"><a href="http://ims.ictd.gov.bd/contact">যোগাযোগ</a></li>
                </ol> --}}
        </section>
        <div class="col-md-12" style="background-color: white;">

	        <div class="page-body white-bg">

                <div class="faq_list_items">

                    <div class="item">
                        <div class="item_index float-left">@lang('faq.i1')</div>
                        <div class="item_data">
                            <h5><strong>@lang('faq.q1')</strong></h5>
                            <div class="answer"><p>@lang('faq.a1')</p></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_index">@lang('faq.i2')</div>
                        <div class="item_data">
                            <h5><strong>@lang('faq.q2')</strong></h5>
                            <div class="answer"><p>@lang('faq.a2')</p></div>
                        </div>
                    </div>
                </div>
	        </div>
        </div>
    </div>
</div>

@endsection

@section('footer-script')

@endsection