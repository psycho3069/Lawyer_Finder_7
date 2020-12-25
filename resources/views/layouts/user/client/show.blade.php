@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @include('layouts.user.menu')

    <div class="body-margin">
        <div class="container p-0" style="margin-top: 56px;">
            <div class="row">
                <div class="col-md-6 text-lg-left p-3">
                    <div class="basic" style="min-height: 100px; margin-top: 40px;">

                        <h1 style="background-color: #f1d1d2; display: inline; padding: 20px 10px 20px 10px;">
                            {{ $client->user->name }}
                        </h1>
                        {{-- <h4 style="padding: 10px 5px 10px 5px;">
                            {{ strtoupper($client->type) }} {{ '('.$client->specialty->name.' ' }} @lang('client.specialist'){{ ')' }}
                        </h4> --}}
                    </div>
                    <div class="other">
                        <h5><i class="fas fa-at fa-sm text-primary" style="height: 20px; width: 20px;"></i>&nbsp{{ $client->user->email }}</h5>
                        <h5><i class="fas fa-phone-square-alt fa-sm text-primary" style="height: 20px; width: 20px;"></i>&nbsp{{ $client->user->contact }}</h5>
                        <h5><i class="fas fa-star fa-sm text-primary" style="height: 20px; width: 20px;"></i>&nbsp{{ $client->ratings }}</h5>
                        <h5><i class="fas fa-percent fa-sm text-primary" style="height: 20px; width: 20px;"></i>&nbsp{{ $client->success_rate }}</h5>
                    </div>

                    @if(auth()->user()->type == 'client')

                        <div class="stars justify-content-center text-center">
                            @if(Session::has('error'))
                                <div id="success-status" style="min-height: 30px; border: solid maroon 1px; border-radius: 5%;" class="alert-danger text-md-center">
                                    {{ Session::get('error') }}
                                </div>
                            @elseif(Session::has('star'))
                                <div id="success-status" style="min-height: 30px; border: solid maroon 1px; border-radius: 5%;" class="alert-success text-md-center">
                                    {{ Session::get('star') }}
                                </div>
                            @endif

                            {{-- <form action="{{ route('rating.store') }}" method="POST">
                                @csrf

                                <input type="hidden" id="client_id" name="client_id" value="{{ $client->id }}">

                                @for ($i = 5; $i > 0; $i--)
                                    <input class="star star-{{ $i }}" id="star-{{ $i }}" type="radio" value="{{ $i }}" name="star"
                                    @if($client->rating->where('giver_id',$client->id)->first())
                                        @if($client->rating->where('giver_id',$client->id)->first()->value == $i)
                                            {{ 'checked' }}
                                        @endif
                                    @endif
                                    />
                                    <label class="star star-{{ $i }}" for="star-{{ $i }}"></label>
                                @endfor

                                <button style="height: 37px; width: 237px; border-radius: 0px; margin-left: 15px;" name="submit" type="submit" id="submit-button" value="Submit" class="button btn btn-primary"><i class="fas fa-star-half-alt text-warning" style="height: 20px; width: 20px;"></i>&nbsp 
                                    @if($client->rating->where('giver_id',$client->id)->first())
                                        @lang('client.update')
                                    @else
                                        @lang('client.rate')
                                    @endif
                                </button>
                            </form> --}}
                        </div>
                        <div class="justify-content-center text-center">
                            <a href="{{ route('give-rating',['client_id' => $client->id]) }}" class="button btn-primary"><i class="fas fa-feather-alt text-success" style="height: 20px; width: 20px;"></i>&nbsp @lang('client.review')</a>

                        </div>

                    @endif
                    
                </div>
                <div class="col-md-6">
                    <img class="" src="{{ URL::asset('/storage/'.config('chatify.user_avatar.folder').'/'.$client->user->avatar) }}" style="border-radius: 10%; height: 350px; width: 350px;">
                </div>
            </div>
            {{-- <div style="margin-top: 20px;" class="row text-center justify-content-center">
                <h2 class="text-primary" style="border: solid maroon 2px; border-left: 0; border-right: 0;">@lang('client.bio')</h2>
                <div class="col-md-12">
                    <p class="text-justify">
                        {{ $client->profile_bio }}
                    </p>
                </div>
            </div> --}}

            <div style="margin-top: 20px; margin-bottom: 50px;" class="row text-center justify-content-center">
                <div class="row">
                    <h2 class="text-primary" style="border-radius: 0; border: solid maroon 2px; border-left: 0; border-right: 0;">@lang('client.rating')</h2>
                </div>

                <div class="col-md-12">
                    @foreach($ratings as $key => $rating)
                        <div class="card" style="border: solid maroon 1px; margin: 5px;">
                            <div class="row card-header pt-2 bg-info">
                                <div lang="@if(App::isLocale('bn')){{ 'bang' }}@endif" class="col-md-4">
                                    {{ '#'.++$key }}
                                </div>
                                <div class="col-md-4">
                                    @for($i = 0; $i <$rating->value; $i++)
                                        <div class="clip-star"></div>
                                    @endfor
                                    
                                </div>
                                <div class="col-md-4">
                                   @lang('lawyer.taken'){{ ': '.$rating->lawyer->user->name }}
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
</div>

@endsection

@section('footer-script')

@endsection