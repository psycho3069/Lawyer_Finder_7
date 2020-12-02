@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 95px; border: solid lightgray 1px; background-color: white;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="register-icon"><i class="fas fa-user-plus fa-3x"></i></div>
                <div class="register">{{ __('Register') }}</div>

                <div class="" style="padding-bottom: 30px;">
                    <form method="POST" class="" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="name" class="row col-form-label text-md-left">{{ __('Name') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="row col-form-label text-md-left">{{ __('E-Mail Address') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="example@email.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" class="row col-form-label text-md-left">{{ __('Password') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="at least 8 digits">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="row col-form-label text-md-left">{{ __('Confirm Password') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="at least 8 digits">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="contact" class="row col-form-label text-md-left">{{ 'Contact' }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" autocomplete="new-password" placeholder="at least 8 digits">

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="division" class="row col-form-label text-md-left">{{ __('Division') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <select style="border-radius: 0; height: 40px;" name="division" id="division" class="custom-select form-control @error('division') is-invalid @enderror">
                                    <option value="">---Select Division---</option>
                                    @foreach($divisions as $key => $division)
                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                                    @endforeach
                                </select>

                                @error('division')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="district" class="row col-form-label text-md-left">{{ __('District') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <select style="border-radius: 0; height: 40px;" name="district" id="district" class="custom-select form-control @error('district') is-invalid @enderror">
                                    <option value="">---Select District---</option>
                                    @foreach($districts as $key => $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>

                                @error('district')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="location" class="row col-form-label text-md-left">{{ __('Location') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="location" type="location" class="form-control @error('location') is-invalid @enderror" name="location" autocomplete="new-location" placeholder="Street Address">

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="birthdate" class="row col-form-label text-md-left">{{ __('Birthdate') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="birthdate" type="text" placeholder="yyyy-mm-dd" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" autocomplete="birthdate" autofocus>

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="type" class="row col-form-label text-md-left">{{ __('User Type') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="margin-top: 5px;" type="radio" id="lawyer" class="@error('type') is-invalid @enderror" name="type" value="lawyer"
                                @if(old('type') == 'lawyer') echo checked @endif>
                                <label for="lawyer">Lawyer</label>&nbsp&nbsp&nbsp
                                <input style="margin-top: 5px;" type="radio" id="client" name="type" value="client"
                                @if(old('type') == 'client') echo checked @endif>
                                <label for="client">Client</label>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="row col-form-label text-md-left">{{ __('Genger') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="margin-top: 5px;" type="radio" id="male" class="@error('gender') is-invalid @enderror" name="gender" value="male"
                                @if(old('gender') == 'male') echo checked @endif>
                                <label for="male">Male</label>&nbsp&nbsp&nbsp
                                <input style="margin-top: 5px;" type="radio" id="female" name="gender" value="female"
                                @if(old('gender') == 'female') echo checked @endif>
                                <label for="female">Female</label>&nbsp&nbsp&nbsp
                                <input style="margin-top: 5px;" type="radio" id="other" name="gender" value="other"
                                @if(old('gender') == 'other') echo checked @endif>
                                <label for="other">Other</label>


                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="">
                                <button style="margin-top: 8px; border-radius: 0; min-width: 100px; min-height: 40px;" type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <label class="col-form-label text-white text-md-left">
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </label>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
