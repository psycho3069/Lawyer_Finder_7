@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 95px; border: solid lightgray 1px; background-color: white;">
    <div class="row justify-content-center">
        <div class="col-md-12" style="padding-bottom: 30px;">
        	<br>
        	<h3 style=""><b>@lang('register-details.title')</b></h3>
        	<hr>

        	<h4><b>@lang('register-details.step_1'):</b></h4>
        	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        	@lang('register-details.step_1d')</p>
        	<br>

        	<h4><b>@lang('register-details.step_2'):</b></h4>
        	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        	@lang('register-details.step_2d')</p>
        	<br>

        	<h4><b>@lang('register-details.step_3'):</b></h4>
        	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        	@lang('register-details.step_3d')</p>
        	<br>

        	<div class="row">
        		<a href="{{ route('register') }}" class="btn btn-primary" style="margin: 10px; padding: 10px; border-radius: 0; min-width: 100px; min-height: 40px;">
                    @lang('register-details.register')
                </a>
        		<a href="{{ route('welcome') }}" class="btn btn-primary" style="margin: 10px; padding: 10px; border-radius: 0; min-width: 100px; min-height: 40px;">
                    @lang('register-details.home')
                </a>
        	</div>

        </div>
    </div>
</div>
@endsection

@section('footer-script')

@endsection