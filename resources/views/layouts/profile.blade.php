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

                <div class="user-basic col-md-6 row">
                    <div class="col-md-12">
                        <span>
                            <h3 style="text-decoration: underline; text-decoration-color: maroon; text-decoration-style: double;">@lang('profile.title_p')</h3>
                        </span>
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-address-book fa-lg text-primary" style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.contact'): 
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->contact }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-map-marker-alt fa-lg text-warning"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.location'):  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->location }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-birthday-cake fa-lg text-danger"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.birthdate'):   
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->birthdate }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-at fa-lg text-success"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.email'):  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->email }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-restroom fa-lg text-secondary"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.gender'):  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->gender }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-file-signature fa-lg text-info"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.register'):  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->created_at }}
                    </div>
                    <div class="col-md-12">
                        <span>
                            <h3 class="text-capitalize" style="text-decoration: underline; text-decoration-color: maroon; text-decoration-style: double;">@lang('profile.title_u')</h3>
                        </span>
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-file-invoice fa-lg text-primary"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.cases'): 
                    </div>
                    <div class="col-md-5">
                        {{ count(auth()->user()->lawyer->casefile) }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-star fa-lg text-warning"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.rating'): 
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->lawyer->rating->avg('value') }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-star-half-alt fa-lg text-danger"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.all'): 
                    </div>
                    <div class="col-md-5">
                        {{ count(auth()->user()->lawyer->rating) }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-comment-alt fa-lg text-success"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.review'): 
                    </div>
                    <div class="col-md-5">
                        {{ count(auth()->user()->lawyer->rating->where('text','!=',null)) }}
                    </div>
                </div>

                {{-- ---------User Image---------START------ --}}
                <div class="row col-md-6 justify-content-center text-md-center">
                    <div class="col-md-12 justify-content-center text-md-center row" style="padding-top: 15px;">
                        <img src="{{ URL::asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}" style="width:250px; height:250px; border-radius:50%;">
                        

                        <div class="col-md-12 text-md-center" style="color: maroon;"><h3>{{ auth()->user()->name }}</h3></div>
                        
                        <div class="col-md-12 text-md-center">
                            <center>
                                <a href="{{ route('lawyer.edit',auth()->user()->id) }}" type="button" class="btn btn-outline-primary w-95" style="vertical-align:middle; "><h4><i class="fas fa-edit fa-lg"  style="height: 20px; width: 20px; color: maroon;"></i>&nbsp&nbsp @lang('profile.edit')</h4></a>
                            </center>
                        </div>
                    </div>
                </div>
                {{-- ---------User Image---------END------ --}}

                <div class="row">
                    <div class="col-md-12 p-0 m-0">
                        
                        <div class="">
                            @for ($i = 5; $i > 0; $i--)
                                <input disabled class="star star-{{ $i }}" id="star-{{ $i }}" type="radio" value="{{ $i }}" name="star"
                                @if(round(auth()->user()->lawyer->rating->avg('value')) == $i)
                                    {{ 'checked' }}
                                @endif
                                />
                                <label class="star star-{{ $i }}" for="star-{{ $i }}"></label>
                            @endfor
                            <p>{{ auth()->user()->lawyer->rating->avg('value') }} average based on {{ count(auth()->user()->lawyer->rating) }} ratings.</p>
                            <hr style="border:3px solid #f1f1f1">

                            {{-- <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{ auth()->user()->lawyer->rating->avg('value')*10 }}%">
                                  {{ auth()->user()->lawyer->rating->avg('value') }}
                                  {{ auth()->user()->lawyer->rating->avg('value') }}
                                  {{ auth()->user()->lawyer->rating->avg('value') }}
                                  {{ auth()->user()->lawyer->rating->avg('value') }}
                                  {{ auth()->user()->lawyer->rating->avg('value') }}
                                  
                                </div>
                            </div> --}}
                            {{-- TODO:: add progress bar to each bar from here https://www.w3schools.com/bootstrap/bootstrap_progressbars.asp --}}
                            
                        </div>
                    </div>
                </div>

                
            @elseif(auth()->user()->type == 'client')
                
                <div class="user-basic col-md-6 row">
                    <div class="col-md-12">
                        <span>
                            <h3 style="text-decoration: underline; text-decoration-color: maroon; text-decoration-style: double;">@lang('profile.title_p')</h3>
                        </span>
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-address-book fa-lg text-primary" style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.contact'): 
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->contact }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-map-marker-alt fa-lg text-warning"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.location'):  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->location }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-birthday-cake fa-lg text-danger"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.birthdate'):   
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->birthdate }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-at fa-lg text-success"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.email'):  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->email }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-restroom fa-lg text-secondary"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.gender'):  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->gender }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-file-signature fa-lg text-info"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.register'):  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->created_at }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-file-invoice fa-lg text-primary"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.cases'): 
                    </div>
                    <div class="col-md-5">
                        {{ count(auth()->user()->client->casefile) }}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-star-half-alt fa-lg text-danger"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.all'): 
                    </div>
                    <div class="col-md-5">
                        {{-- {{ auth()->user()->client->rating }} --}}
                    </div>

                    <div class="col-md-5">
                        <i class="fas fa-comment-alt fa-lg text-success"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.review'): 
                    </div>
                    <div class="col-md-5">
                        {{-- {{ auth()->user()->client->review }} --}}
                    </div>
                </div>

                {{-- ---------User Image---------START------ --}}
                <div class="row col-md-6 justify-content-center text-md-center">
                    <div class="col-md-12 justify-content-center text-md-center row" style="padding-top: 15px;">
                        <img src="{{ URL::asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}" style="width:250px; height:250px; border-radius:50%;">
                        
                        <div class="col-md-12 text-md-center" style="color: maroon;"><h3>{{ auth()->user()->name }}</h3></div>
                        
                        <div class="col-md-12 text-md-center">
                            <center>
                                <a href="{{ route('client.edit',auth()->user()->id) }}" type="button" class="btn btn-secondary w-95" style="vertical-align:middle; "><h4><i class="fas fa-edit fa-lg"  style="height: 20px; width: 20px; color: maroon;"></i>&nbsp&nbsp @lang('profile.edit')</h4></a>
                            </center>
                        </div>
                    </div>
                </div>
                {{-- ---------User Image---------END------ --}}

                

            @endif
        </div>
    </div>
</div>

@endsection

@section('footer-script')

@endsection
