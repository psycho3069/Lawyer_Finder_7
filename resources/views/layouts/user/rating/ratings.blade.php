@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @if(auth()->user()->type == 'admin')
        @include('layouts.admin.menu')
    @else
        @include('layouts.user.menu')
    @endif

    <div class="body-margin">
        <div class="container p-0 justify-content-center row" style="margin-top: 56px;">
            
            @if(auth()->user()->type == 'lawyer')
                @if(auth()->user()->lawyer->admin_approval == 0)  
                    <div class="alert-warning text-danger">
                        <a href="{{ route('lawyer-verify',auth()->user()->lawyer) }}">@lang('rating.verify_msg') 
                            <button class="btn btn-outline-info">@lang('rating.verify_btn')</button>
                        </a>
                        @lang('rating.or') 
                        <a href="{{ route('lawyer.edit',auth()->user()->id) }}"> 
                            <button class="btn btn-outline-primary">@lang('rating.update')</button>
                        </a>
                    </div>
                @elseif(auth()->user()->lawyer->admin_approval == 1)
                    <div class="alert-info text-dark">
                        <a href="{{ route('lawyer-verify',auth()->user()->lawyer) }}">@lang('rating.upload_msg') 
                            <button class="btn btn-outline-info">@lang('rating.upload_btn')</button>
                        </a>
                    </div>
                @elseif(auth()->user()->lawyer->admin_approval == 3)
                    <div class="alert-danger text-dark">
                        <a href="{{ route('lawyer-verify-recheck',auth()->user()->lawyer) }}">@lang('rating.check_msg') 
                            <button class="btn btn-outline-info">@lang('rating.check_btn')</button>
                        </a>
                    </div>
                @endif
            @endif

            <div class="col-md-12">
                <h2>@lang('rating.title')</h2>
                <hr>
                @foreach($ratings as $key => $rating)
                    <div class="card" style="border: solid maroon 1px; margin: 5px;">
                        <div class="row card-header pt-2 bg-info">
                            <div class="col-md-4">
                                {{ '#' }}<span lang="@if(App::isLocale('bn')){{ 'bang' }}@endif">{{ ++$key }}</span>
                            </div>
                            <div class="col-md-4">
                                @for($i = 0; $i <$rating->value; $i++)
                                    <div class="clip-star"></div>
                                @endfor
                                
                            </div>
                            <div class="col-md-4">
                                @if(auth()->user()->type == 'lawyer')
                                    @lang('rating.given_by') {{ ': '.$rating->client->user->name }}
                                @elseif(auth()->user()->type == 'client')
                                    @lang('rating.given_to') {{ ': '.$rating->lawyer->user->name }}
                                @else
                                    {{ $rating->client->user->name.' => '.$rating->lawyer->user->name }}
                                @endif
                                
                            </div>
                        </div>
                        @if($rating->text != null)
                            <div class="row card-body pt-2 pb-2 justify-content-center">
                                <div class="col-md-11 text-justify" style="min-height: 50px; font-size: 16px;">
                                    {{ $rating->text }}
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
