@extends('layouts.app')

@section('body-tag')
    style="background-color:black"
@endsection

{{-- @section('div-navbar-tag')
    style="background-color:black"
@endsection --}}

@section('content')
<div class="container" style="margin-top: 45px; background-color:black;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="register-icon"><i class="fas fa-user-plus fa-3x"></i></div>
                <div class="register">{{ __('Register') }}</div>

                <div class="">
                    <form method="POST" class="text-white" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="example@email.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="at least 8 digits">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="at least 8 digits">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-3 col-form-label text-md-left">{{ __('Contact') }}</label>

                            <div class="col-md-7">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="contact" autofocus>

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-3 col-form-label text-md-left">{{ __('Location') }}</label>

                            <div class="col-md-7">
                                <select name="location" id="location" class="custom-select form-control @error('location') is-invalid @enderror">
                                    <option value="">---Select Location---</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Mymensigh">Mymensigh</option>
                                </select>

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-3 col-form-label text-md-left">{{ __('Birthdate') }}</label>

                            <div class="col-md-7">
                                <input id="birthdate" type="text" placeholder="yyyy-mm-dd" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" autocomplete="birthdate" autofocus>

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="type" class="col-md-3 col-form-label text-md-left">{{ __('User Type') }}</label>

                            <div class="col-md-7">
                                <input type="radio" id="lawyer" class="@error('type') is-invalid @enderror" name="type" value="lawyer"
                                @if(old('type') == 'lawyer') echo checked @endif>
                                <label for="lawyer">Lawyer</label>&nbsp&nbsp&nbsp
                                <input type="radio" id="client" name="type" value="client"
                                @if(old('type') == 'client') echo checked @endif>
                                <label for="client">Client</label>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-3 col-form-label text-md-left">{{ __('Genger') }}</label>

                            <div class="col-md-7">
                                <input type="radio" id="male" class="@error('gender') is-invalid @enderror" name="gender" value="male"
                                @if(old('gender') == 'male') echo checked @endif>
                                <label for="male">Male</label>&nbsp&nbsp&nbsp
                                <input type="radio" id="female" name="gender" value="female"
                                @if(old('gender') == 'female') echo checked @endif>
                                <label for="female">Female</label>&nbsp&nbsp&nbsp
                                <input type="radio" id="other" name="gender" value="other"
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
                            <label class="col-form-label text-white text-md-left">
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Already Registerred? Login') }}
                                    </a>
                            </label>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
