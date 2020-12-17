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
                            <a href="{{ route('lawyer-verify',auth()->user()->lawyer) }}">{{ 'Please VERIFY your account and COMPLETE profile!!' }} 
                                <button class="btn btn-outline-info">Verify Account</button>
                            </a>
                            OR 
                            <a href="{{ route('lawyer.edit',auth()->user()->id) }}"> 
                                <button class="btn btn-outline-primary">Update Profile</button>
                            </a>
                        </div>
                    @elseif(auth()->user()->lawyer->admin_approval == 1)
                        <div class="alert-info text-dark">
                            <a href="{{ route('lawyer-verify',auth()->user()->lawyer) }}">{{ 'Your account approval is pending, please check again later and make sure your profile is complete and all the informations are real!!' }} 
                                <button class="btn btn-outline-info">Upload NID Again?</button>
                            </a>
                        </div>
                    @elseif(auth()->user()->lawyer->admin_approval == 3)
                        <div class="alert-danger text-dark">
                            <a href="{{ route('lawyer-verify-recheck',auth()->user()->lawyer) }}">{{ 'Your account approval is DECLINED, please check AGAIN and make sure your profile is complete and all the informations are real, then Request a Re-check!!' }} 
                                <button class="btn btn-outline-info">Re-Check</button>
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
                        {{-- {{ auth()->user()->lawyer->rating }} --}}
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-comment-alt fa-lg text-success"  style="height: 20px; width: 20px;"></i>&nbsp
                        @lang('profile.review'): 
                    </div>
                    <div class="col-md-5">
                        {{-- {{ auth()->user()->lawyer->review }} --}}
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
                        {{-- <h2>{{ $user->name }}'s Profile</h2>
                        <form enctype="multipart/form-data" action="/profile" method="POST">
                            <label>Update Profile Image</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form> --}}

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


    {{-- 
        
        <div class="col-md-4 user-info">
            <div class="">
                <span class="heading">User Rating</span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <p>4.1 average based on 254 reviews.</p>
                <hr style="border:3px solid #f1f1f1">
 --}}

                {{-- TODO:: add progress bar to each bar from here https://www.w3schools.com/bootstrap/bootstrap_progressbars.asp --}}
       {{--          <div class="row">
                  <div class="side">
                    <div>5 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>150</div>
                  </div>
                  <div class="side">
                    <div>4 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-4"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>63</div>
                  </div>
                  <div class="side">
                    <div>3 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-3"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>15</div>
                  </div>
                  <div class="side">
                    <div>2 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-2"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>6</div>
                  </div>
                  <div class="side">
                    <div>1 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-1"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>20</div>
                  </div>
                </div>
            </div>
        </div> --}}


{{-- <div class="row">
    <div class="col-md-3">{{ Str::upper(auth()->user()->type) }}{{ __(' Dashboard') }}</div>
    <div class="col-md-9">{{ 'Summary' }}</div>
</div> --}}
    {{-- <div class="card">
        <div class="card-header">{{ Str::upper(auth()->user()->type) }}{{ __(' Dashboard') }}</div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div> --}}