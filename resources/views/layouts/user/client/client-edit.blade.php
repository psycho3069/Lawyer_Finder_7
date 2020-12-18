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

                <div class="card-header text-center"><a href="{{ route('profile') }}" type="button" class="btn float-left btn-primary button">@lang('client.back')</a>@lang('client.title',['client' => $user->name])</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('client.update',auth()->user()->id) }}">
                        @csrf

                        @method('PUT')

                        <div class="row align-content-center justify-content-center pb-3">
                            <img id="image_preview_container" alt="Image Preview" src="{{ URL::asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}" style="width:250px; height:250px; border-radius:50%;">
                        </div>

                        <div class="form-group row">
                            <label for="profile_picture" class="col-md-4 col-form-label text-md-left">@lang('client.profile')</label>
                            <div class="col-md-6">
                                <input type="file" id="profile_picture" class="edit-profile form-control" name="profile_picture">

                                @error('profile_picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">@lang('client.name')</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-left">@lang('client.email')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="edit-profile form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" autocomplete="email" placeholder="@lang('client.email_hint')">

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
                                <input id="contact" type="text" class="edit-profile form-control @error('contact') is-invalid @enderror" name="contact" value="{{ $user->contact }}" autocomplete="contact" autofocus>

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="division_id" class="col-md-4 col-form-label text-md-left">@lang('client.contact')</label>

                            <div class="col-md-6">
                                <select name="division_id" id="division_id" class="edit-profile custom-select form-control @error('division_id') is-invalid @enderror">
                                    {{-- <option value="">--------Select Division-------</option> --}}

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
                            <label for="district_id" class="col-md-4 col-form-label text-md-left">@lang('client.division')</label>

                            <div class="col-md-6">
                                <select name="district_id" id="district_id" class="edit-profile custom-select form-control @error('district_id') is-invalid @enderror">
                                    
                                    {{-- <option value="">--------Select District-------</option> --}}

                                    @foreach($districts as $key => $district)
                                        <option value="{{ $district->id }}"
                                            @if($user->district->id == $district->id)
                                                {{ 'selected' }} 
                                            @endif
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
                            <label for="location" class="col-md-4 col-form-label text-md-left">@lang('client.district')</label>

                            <div class="col-md-6">
                                <input id="location" type="text" placeholder="@lang('client.location')" class="edit-profile form-control @error('location') is-invalid @enderror" name="location" value="{{ $user->location }}" autocomplete="location" autofocus>

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-left">@lang('client.location_hint')</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="text" placeholder="@lang('client.birthdate')" class="edit-profile form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $user->birthdate }}" autocomplete="birthdate" autofocus>

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-left">@lang('client.gender')</label>

                            <div class="col-md-6">
                                <input type="radio" id="male" class="@error('gender') is-invalid @enderror" name="gender" value="male"
                                @if($user->gender == 'male') echo checked @endif>
                                <label for="male">@lang('client.male')</label>&nbsp&nbsp&nbsp
                                <input type="radio" id="female" name="gender" value="female"
                                @if($user->gender == 'female') echo checked @endif>
                                <label for="female">@lang('client.female')</label>&nbsp&nbsp&nbsp
                                <input type="radio" id="other" name="gender" value="other"
                                @if($user->gender == 'other') echo checked @endif>
                                <label for="other">@lang('client.other')</label>


                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row pt-2">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button btn-primary">
                                    @lang('client.submit')
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