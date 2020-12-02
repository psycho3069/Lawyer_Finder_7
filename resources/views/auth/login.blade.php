@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 95px; border: solid lightgray 1px; background-color: white;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="login-icon"><i class="fas fa-user-lock fa-3x"></i></div>
                <div class="login">{{ __('Login') }}</div>

                <div style="padding-bottom: 30px;">
                    <form method="POST" class="" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="row col-form-label text-md-left">{{ __('E-Mail Address') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="row col-form-label text-md-left">{{ __('Password') }}<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-warning" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row">

                            <div class="">
                                
                                <button type="submit" class="btn btn-primary btn-block" style="margin-top: 8px; border-radius: 0; min-width: 100px; min-height: 40px;">
                                    {{ __('Login') }}
                                </button>

                            </div>

                            <label for="password" class="col-md-7 col-form-label text-white text-md-left">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Register') }}
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
