@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 56px;">
    <div class="row justify-content-center pt-3 pb-5">
        <div class="col-md-12">
            <div class="card">
            	@if (session('status'))
	                <div id="success-status" class="alert alert-success" role="alert">
	                    {{ session('status') }}
	                </div>
	            @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-header text-center"><a href="{{ route('profile') }}" type="button" class="btn float-left btn-primary button">@lang('lawyer.back')</a>@lang('lawyer.title',['lawyer' => auth()->user()->name])</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('lawyer.update',auth()->user()->id) }}">
                        @csrf

                        @method('PUT')

                        <div class="row align-content-center justify-content-center pb-3">
                            <img id="image_preview_container" alt="Image Preview" src="{{ URL::asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}" style="width:250px; height:250px; border-radius:50%;">
                        </div>

                        <div class="form-group row">
                            <label for="profile_picture" class="col-md-4 col-form-label text-md-left">@lang('lawyer.profile')</label>
                            <div class="col-md-6">
                                <input title="sefd" accept="image/*" type="file" id="profile_picture" class="edit-profile form-control" name="profile_picture">

                                @error('profile_picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">@lang('lawyer.name')</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="edit-profile form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">@lang('lawyer.email')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="edit-profile form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" autocomplete="email" placeholder="@lang('lawyer.email_hint')">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-left">@lang('lawyer.contact')</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="edit-profile form-control @error('contact') is-invalid @enderror" name="contact" value="{{ $user->contact }}" autocomplete="contact" autofocus>

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="division_id" class="col-md-4 col-form-label text-md-left">@lang('lawyer.division')</label>

                            <div class="col-md-6">
                                <select name="division_id" id="division_id" class="edit-profile custom-select form-control @error('division_id') is-invalid @enderror">

                                    @foreach($divisions as $key => $division)
                                        <option value="{{ $division->id }}"
                                            @if($user->district->division->id == $division->id) echo selected @endif
                                            >{{ $division->name }}</option>
                                    @endforeach
                                    
                                </select>

                                @error('division_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="district_id" class="col-md-4 col-form-label text-md-left">@lang('lawyer.district')</label>

                            <div class="col-md-6">
                                <select name="district_id" id="district_id" class="edit-profile custom-select form-control @error('district_id') is-invalid @enderror">

                                    @foreach($districts as $key => $district)
                                        <option value="{{ $district->id }}"
                                            @if($user->district->id == $district->id) echo selected @endif
                                            >{{ $district->name }}</option>
                                    @endforeach
                                    
                                </select>

                                @error('district_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-left">@lang('lawyer.location')</label>

                            <div class="col-md-6">
                                <input id="location" type="location" class="edit-profile form-control @error('location') is-invalid @enderror" name="location" value="{{ $user->location }}" autocomplete="location" placeholder="@lang('lawyer.location_hint')">

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-left">@lang('lawyer.birthdate')</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="text" placeholder="@lang('lawyer.birthdate_hint')" class="edit-profile form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $user->birthdate }}" autocomplete="birthdate" autofocus>

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-left">@lang('lawyer.gender')</label>

                            <div class="col-md-6">
                                <input type="radio" id="male" class="@error('gender') is-invalid @enderror" name="gender" value="male"
                                @if($user->gender == 'male') echo checked @endif>
                                <label for="male">@lang('lawyer.male')</label>&nbsp&nbsp&nbsp
                                <input type="radio" id="female" name="gender" value="female"
                                @if($user->gender == 'female') echo checked @endif>
                                <label for="female">@lang('lawyer.female')</label>&nbsp&nbsp&nbsp
                                <input type="radio" id="other" name="gender" value="other"
                                @if($user->gender == 'other') echo checked @endif>
                                <label for="other">@lang('lawyer.other')</label>


                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="court_id" class="col-md-4 col-form-label text-md-left">{{ __('Current Court') }}</label>

                            <div class="col-md-6">
                                <select name="court_id" id="court_id" class="edit-profile custom-select form-control @error('court_id') is-invalid @enderror">
                                    <option value="@if($user->lawyer->court != NULL) {{ $user->lawyer->court->id }} @endif">@if($user->lawyer->court != NULL) {{ $user->lawyer->court->name }} @endif</option>
                                    
                                    @foreach($courts as $key => $court)
                                        <option value="{{ $court->id }}"
                                            @if($user->court->id == $court->id) echo selected @endif
                                            >{{ $court->name }}</option>
                                    @endforeach
                                </select>

                                @error('court_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="profile_bio" class="col-md-4 col-form-label text-md-left">@lang('lawyer.bio')</label>

                            <div class="col-md-6">
                                <textarea id="profile_bio" type="profile_bio" class="edit-profile form-control @error('profile_bio') is-invalid @enderror" name="profile_bio" autocomplete="profile_bio" placeholder="@lang('lawyer.bio_hint')" autofocus>{{ $user->lawyer->profile_bio }}</textarea>

                                @error('profile_bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-left">@lang('lawyer.type')</label>

                            <div class="col-md-6">

                                <input type="radio" id="advocate" class="@error('type') is-invalid @enderror" name="type" value="advocate"
                                @if($user->lawyer->type == 'advocate') echo checked @endif>
                                <label for="advocate">@lang('lawyer.advocate')</label>&nbsp&nbsp&nbsp

                                <input type="radio" id="judge" name="type" value="judge"
                                @if($user->lawyer->type == 'judge') echo checked @endif>
                                <label for="judge">@lang('lawyer.judge')</label>&nbsp&nbsp&nbsp

                                <input type="radio" id="magistrate" name="type" value="magistrate"
                                @if($user->lawyer->type == 'magistrate') echo checked @endif>
                                <label for="magistrate">@lang('lawyer.magistrate')</label>&nbsp&nbsp&nbsp

                                <input type="radio" id="barrister" name="type" value="barrister"
                                @if($user->lawyer->type == 'barrister') echo checked @endif>
                                <label for="barrister">@lang('lawyer.barrister')</label>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specialties_id" class="col-md-4 col-form-label text-md-left">@lang('lawyer.specialty')</label>
                            
                            <div class="col-md-6">

                                <select name="specialties_id" id="specialties_id" class="edit-profile custom-select form-control @error('specialties_id') is-invalid @enderror">
                                    {{-- <option value="">-----Specialty-----</option> --}}
                                    @foreach($specialties as $key => $specialty)

                                        <option value="{{ $specialty->id }}"
                                            @if($user->lawyer->specialty->id == $specialty->id) echo selected @endif
                                            >{{ $specialty->name }}</option>

                                    @endforeach
                                </select>

                                @error('specialties_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row pt-2">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button btn-primary">
                                    @lang('lawyer.submit')
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

<script type="text/javascript">
$(document).ready(function (e) {
   
    $.ajaxSetup({
        headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  
    $('#profile_picture').change(function(){
           
    let reader = new FileReader();

    reader.onload = (e) => { 

        $('#image_preview_container').attr('src', e.target.result); 
    }

    reader.readAsDataURL(this.files[0]); 
  
    });

});
</script>
	
@endsection