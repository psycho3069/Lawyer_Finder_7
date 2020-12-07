@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 56px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	@if (session('status'))
	                <div id="success-status" class="alert alert-success" role="alert">
	                    {{ session('status') }}
	                </div>
	            @endif

                <div class="card-header text-center"><a href="{{ route('home') }}" type="button" class="btn float-left btn-primary button">Back</a>@lang('client-edit.title')</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('client.update',auth()->user()->id) }}">
                        @csrf

                        @method('PUT')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" autocomplete="email" placeholder="example@email.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-left">@lang('client-edit.contact')</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ $user->contact }}" autocomplete="contact" autofocus>

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-left">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <select name="location" id="location" class="custom-select form-control @error('location') is-invalid @enderror">
                                    <option value="{{ $user->location }}">{{ $user->location }}</option>
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
                            <label for="birthdate" class="col-md-4 col-form-label text-md-left">{{ __('Birthdate') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="text" placeholder="yyyy-mm-dd" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $user->birthdate }}" autocomplete="birthdate" autofocus>

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-left">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <input type="radio" id="lawyer" class="@error('type') is-invalid @enderror" name="type" value="lawyer"
                                @if($user->type == 'lawyer') echo checked @endif>
                                <label for="lawyer">Lawyer</label>&nbsp&nbsp&nbsp
                                <input type="radio" id="client" name="type" value="client"
                                @if($user->type == 'client') echo checked @endif>
                                <label for="client">Client</label>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-left">{{ __('Genger') }}</label>

                            <div class="col-md-6">
                                <input type="radio" id="male" class="@error('gender') is-invalid @enderror" name="gender" value="male"
                                @if($user->gender == 'male') echo checked @endif>
                                <label for="male">Male</label>&nbsp&nbsp&nbsp
                                <input type="radio" id="female" name="gender" value="female"
                                @if($user->gender == 'female') echo checked @endif>
                                <label for="female">Female</label>&nbsp&nbsp&nbsp
                                <input type="radio" id="other" name="gender" value="other"
                                @if($user->gender == 'other') echo checked @endif>
                                <label for="other">Other</label>


                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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

@section('footer-script')


	
@endsection