@extends('layouts.app')

@section('content')
<div class="container-x" style="margin-top: 50px;">

	@if(auth()->user()->type == 'admin')
        @include('layouts.admin.menu')
    @else
        @include('layouts.user.menu')
    @endif
    

    <div class="body-margin pb-5">
        <div class="container pt-5 pb-5" style="margin-top: 50px;">
      		<div class="row">

                <div class="p-2 col-md-3 col-sm-6">
                    <div data-appear="true" data-animation="zoomIn" class="counter_item text-center pt-2 pb-2 m-2" style="border: solid maroon 2px;">
                        <div class="counter-image">
                            <img src="{{ url('svg/users.svg') }}" height="50" alt="Users">
                        </div>
                        <div class="counter-info">
                            <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $users->count() }}</div>
                            <h5>@lang('welcome.users')</h5>
                        </div>
                    </div>
                </div>

                <div class="p-2 col-md-3 col-sm-6">
                    <div class="counter_item text-center pt-2 pb-2 m-2" style="border: solid maroon 2px;">
                        <div data-appear="true" data-animation="zoomIn" class="counter-image">
                            <img src="{{ url('svg/brain.svg') }}" height="50" alt="Users">
                        </div>
                        <div class="counter-info">
                            <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $lawyers->count() }}</div>
                            <h5>@lang('welcome.lawyers')</h5>
                        </div>
                    </div>
                </div>

                <div class="p-2 col-md-3 col-sm-6">
                    <div class="counter_item text-center pt-2 pb-2 m-2" style="border: solid maroon 2px;">
                        <div data-appear="true" data-animation="zoomIn" class="counter-image">
                            <img src="{{ url('svg/speed.svg') }}" height="50" alt="Users">
                        </div>
                        <div class="counter-info">
                            <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $clients->count() }}</div>
                            <h5>@lang('welcome.clients')</h5>
                        </div>
                    </div>
                </div>

                <div class="p-2 col-md-3 col-sm-6">
                    <div data-appear="true" data-animation="zoomIn" class="counter_item text-center pt-2 pb-2 m-2" style="border: solid maroon 2px;">
                        <div class="counter-image">
                            <img src="{{ url('svg/victory.svg') }}" height="50" alt="Users">
                        </div>
                        <div class="counter-info">
                            <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $casefiles->count() }}</div>
                            <h5>@lang('welcome.cases')</h5>
                        </div>
                    </div>
                </div>

                <div class="p-2 col-md-3 col-sm-6">
                    <div data-appear="true" data-animation="zoomIn" class="counter_item text-center pt-2 pb-2 m-2" style="border: solid maroon 2px;">
                        <div class="counter-image">
                            <img src="{{ url('svg/favorites.svg') }}" height="50" alt="Users">
                        </div>
                        <div class="counter-info">
                            <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $ratings->count() }}</div>
                            <h5>@lang('welcome.ratings')</h5>
                        </div>
                    </div>
                </div>

                <div class="p-2 col-md-3 col-sm-6">
                    <div class="counter_item text-center pt-2 pb-2 m-2" style="border: solid maroon 2px;">
                        <div data-appear="true" data-animation="zoomIn" class="counter-image">
                            <img src="{{ url('svg/message.svg') }}" height="50" alt="Users">
                        </div>
                        <div class="counter-info">
                            <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $feedbacks->count() }}</div>
                            <h5>@lang('welcome.feedbacks')</h5>
                        </div>
                    </div>
                </div>

                <div class="p-2 col-md-3 col-sm-6">
                    <div class="counter_item text-center pt-2 pb-2 m-2" style="border: solid maroon 2px;">
                        <div data-appear="true" data-animation="zoomIn" class="counter-image">
                            <img src="{{ url('svg/user.svg') }}" height="50" alt="Users">
                        </div>
                        <div class="counter-info">
                            <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $lawyers->where('admin_approval',1)->count() }}</div>
                            <h5>@lang('welcome.requests')</h5>
                        </div>
                    </div>
                </div>

                <div class="p-2 col-md-3 col-sm-6">
                    <div data-appear="true" data-animation="zoomIn" class="counter_item text-center pt-2 pb-2 m-2" style="border: solid maroon 2px;">
                        <div class="counter-image">
                            <img src="{{ url('svg/inbox.svg') }}" height="50" alt="Users">
                        </div>
                        <div class="counter-info">
                            <div class="counter-value" @if(!App::isLocale('en')) lang="bang" @endif>{{ $notices->count() }}</div>
                            <h5>@lang('welcome.notices')</h5>
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
