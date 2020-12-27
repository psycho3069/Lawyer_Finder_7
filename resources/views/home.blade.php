@extends('layouts.app')

@section('content')
<div class="container-x" style="margin-top: 50px;">

	@if(auth()->user()->type == 'admin')
        @include('layouts.admin.menu')
    @else
        @include('layouts.user.menu')
    @endif
    

    <div class="body-margin pb-5">
        <div class="container p-0 pb-5" style="margin-top: 50px;">
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
                            <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $casefiles->count() }}</div>
                            <h5>@lang('welcome.cases')</h5>
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
