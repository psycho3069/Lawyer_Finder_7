@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @if(auth()->user()->type == 'admin')
        @include('layouts.admin.menu')
    @else
        @include('layouts.user.menu')
    @endif

    <div class="body-margin">
        <div class="container p-0 justify-content-center row" style="margin-top: 56px; background-color: black">

            @if(auth()->user()->type == 'lawyer')

                <div class="col-md-6">
                    <a href="{{ route('lawyer.edit',auth()->user()->id) }}" type="button" class="button btn-block" style="vertical-align:middle"><span>Edit Profile</span></a>
                </div>
                <div class="user-basic col-md-6">
                    <div>Name: {{ auth()->user()->name }}</div>
                    <div>Contact: {{ auth()->user()->contact }}</div>
                    <div>Location: {{ auth()->user()->location }}</div>
                    <div>Birthdate: {{ auth()->user()->birthdate }}</div>
                    <div>Email: {{ auth()->user()->email }}</div>
                    <div>Gender: {{ auth()->user()->gender }}</div>
                    <div>Member Since: {{ auth()->user()->created_at }}</div>
                    <div>Specialty: {{ auth()->user()->specialty }}</div>
                </div>
                
            @elseif(auth()->user()->type == 'client')
                
                <div class="user-basic col-md-4 text-white row">
                    <div class="col-md-12">
                        <span>
                            <h3 style="text-decoration: underline; text-decoration-color: green; text-decoration-style: double;">Personal Details</h3>
                        </span>
                    </div>
                    <div class="col-md-5 text-success">
                        <i class="fas fa-address-book fa-lg text-primary"></i>&nbsp
                        Contact: 
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->contact }}
                    </div>
                    <div class="col-md-5 text-success">
                        <i class="fas fa-map-marker-alt fa-lg text-warning"></i>&nbsp
                        Location:  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->location }}
                    </div>
                    <div class="col-md-5 text-success">
                        <i class="fas fa-birthday-cake fa-lg text-danger"></i>&nbsp
                        Birthdate:   
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->birthdate }}
                    </div>
                    <div class="col-md-5 text-success">
                        <i class="fas fa-at fa-lg text-primary"></i>&nbsp
                        Email:  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->email }}
                    </div>
                    <div class="col-md-5 text-success">
                        <i class="fas fa-restroom fa-lg text-warning"></i>&nbsp
                        Gender:  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->gender }}
                    </div>
                    <div class="col-md-5 text-success">
                        <i class="fas fa-file-signature fa-lg text-danger"></i>&nbsp
                        Registered:  
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->created_at }}
                    </div>
                </div>

                {{-- ---------User Image---------START------ --}}
                <div class="row col-md-4 justify-content-center">
                    <div class="col-md-9 justify-content-center text-md-center" style="padding-top: 15px;">
                        <img src="{{ URL::asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}" style="width:250px; height:250px; float:left; border: 2px solid green; border-radius:20%; margin-right:25px;">
                        {{-- <h2>{{ $user->name }}'s Profile</h2>
                        <form enctype="multipart/form-data" action="/profile" method="POST">
                            <label>Update Profile Image</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form> --}}

                        <div class="text-success"><h3>{{ auth()->user()->name }}</h3></div>
                        
                        <div class="col-md-12 align-content-center">
                            <center>
                                <a href="{{ route('client.edit',auth()->user()->id) }}" type="button" class="btn btn-secondary w-95" style="vertical-align:middle; "><h4><i class="fas fa-edit fa-lg text-success"></i>&nbspEdit Profile</h4></a>
                            </center>
                        </div>
                    </div>
                </div>
                {{-- ---------User Image---------END------ --}}

                <div class="user-client col-md-4 text-white text-md-left row">
                    <div class="col-md-12">
                        <span>
                            <h3 class="text-capitalize" style="text-decoration: underline; text-decoration-color: green; text-decoration-style: double;">{{ auth()->user()->type }} Details</h3>
                        </span>
                    </div>
                    <div class="col-md-5 text-success">
                        <i class="fas fa-file-invoice fa-lg text-primary"></i>&nbsp
                        Total Cases: 
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->client->cases }}
                    </div>
                    <div class="col-md-5 text-success">
                        <i class="fas fa-star fa-lg text-warning"></i>&nbsp
                        Avg Rating: 
                    </div>
                    <div class="col-md-5">
                        {{ auth()->user()->client->rating }}
                    </div>
                    <div class="col-md-5 text-success">
                        <i class="fas fa-star-half-alt fa-lg text-danger"></i>&nbsp
                        All Ratings: 
                    </div>
                    <div class="col-md-5">
                        {{-- {{ auth()->user()->client->rating }} --}}
                    </div>
                    <div class="col-md-5 text-success">
                        <i class="fas fa-comment-alt fa-lg text-primary"></i>&nbsp
                        All Reviews: 
                    </div>
                    <div class="col-md-5">
                        {{-- {{ auth()->user()->client->review }} --}}
                    </div>
                </div>

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