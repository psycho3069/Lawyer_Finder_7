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
                            {{ $lawyer->user->name }}
                        </h1>
                        <h4 style="padding: 10px 5px 10px 5px;">
                            {{ strtoupper($lawyer->type) }} {{ '('.$lawyer->specialty->name.' Specialist)' }}
                        </h4>
                    </div>
                    <div class="other">
                        <h5><i class="fas fa-at fa-sm text-primary" style="height: 20px; width: 20px;"></i>&nbsp{{ $lawyer->user->email }}</h5>
                        <h5><i class="fas fa-phone-square-alt fa-sm text-primary" style="height: 20px; width: 20px;"></i>&nbsp{{ $lawyer->user->contact }}</h5>
                        <h5><i class="fas fa-star fa-sm text-primary" style="height: 20px; width: 20px;"></i>&nbsp{{ $lawyer->rating }}</h5>
                        <h5><i class="fas fa-percent fa-sm text-primary" style="height: 20px; width: 20px;"></i>&nbsp{{ $lawyer->success_rate }}</h5>
                    </div>
                    <div class="stars justify-content-center text-center">
                        @if (session('status'))
                            <div id="success-status" class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('rating.store') }}" method="POST">
                            @csrf

                            <input type="hidden" id="lawyer_id" name="lawyer_id" value="{{ $lawyer->id }}">

                            <input class="star star-5" id="star-5" type="radio" value="5" name="star"/>
                            <label class="star star-5" for="star-5"></label>
                            <input class="star star-4" id="star-4" type="radio" value="4" name="star"/>
                            <label class="star star-4" for="star-4"></label>
                            <input class="star star-3" id="star-3" type="radio" value="3" name="star"/>
                            <label class="star star-3" for="star-3"></label>
                            <input class="star star-2" id="star-2" type="radio" value="2" name="star"/>
                            <label class="star star-2" for="star-2"></label>
                            <input class="star star-1" id="star-1" type="radio" value="1" name="star"/>
                            <label class="star star-1" for="star-1"></label>

                            <button style="height: 37px; width: 237px; border-radius: 0px; margin-left: 15px;" name="submit" type="submit" id="submit-button" value="Submit" class="button btn btn-primary"><i class="fas fa-star-half-alt text-warning" style="height: 20px; width: 20px;"></i>&nbsp {{  __('Rate') }}</button>
                        </form>
                    </div>
                    <div class="justify-content-center text-center">
                        <a href="#" class="button btn-primary"><i class="fas fa-feather-alt text-success" style="height: 20px; width: 20px;"></i>&nbsp Write a review</a>

                    </div>
                </div>
                <div class="col-md-6">
                    <img class="" src="{{ URL::asset('/storage/'.config('chatify.user_avatar.folder').'/'.$lawyer->user->avatar) }}" style="border-radius: 10%; height: 350px; width: 350px;">
                </div>
            </div>
            <div style=" margin-top: 20px; margin-bottom: 50px;" class="row text-center justify-content-center">
                <h2 class="text-primary" style="border: solid maroon 2px; border-left: 0; border-right: 0;">Profile Bio</h2>
                <div class="col-md-12">
                    <p class="text-justify">
                        {{ $lawyer->profile_bio }}
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection

@section('footer-script')

@endsection