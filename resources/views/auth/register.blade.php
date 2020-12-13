@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 95px; border: solid lightgray 1px; background-color: white;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="register-icon"><i class="fas fa-user-plus fa-3x"></i></div>
                <div class="register">@lang('register.title')</div>

                <div class="" style="padding-bottom: 30px;">
                    <form method="POST" class="" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="name" class="row col-form-label text-md-left">@lang('register.name')<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="@lang('register.hint_name')">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="row col-form-label text-md-left">@lang('register.email')<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="@lang('register.hint_email')">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" class="row col-form-label text-md-left">@lang('register.password')<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="@lang('register.hint_pcc')">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="row col-form-label text-md-left">@lang('register.confirm')<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="@lang('register.hint_pcc')">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="contact" class="row col-form-label text-md-left">@lang('register.contact')<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" autocomplete="new-password" placeholder="@lang('register.hint_pcc')">

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="division" class="row col-form-label text-md-left">@lang('register.division')<span style="color: red;">*</span></label>

                            <div class="row">
                                <select style="border-radius: 0; height: 40px;" name="division" id="division" class="custom-select form-control @error('division') is-invalid @enderror">
                                    <option value="">@lang('register.select_division')</option>
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
                            <label for="district_id" class="row col-form-label text-md-left">@lang('register.district')<span style="color: red;">*</span></label>

                            <div class="row">
                                <select style="border-radius: 0; height: 40px;" name="district_id" id="district_id" class="custom-select form-control @error('district_id') is-invalid @enderror">
                                    <option value="">@lang('register.select_district')</option>
                                </select>

                                @error('district_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="location" class="row col-form-label text-md-left">@lang('register.location')<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="location" type="location" class="form-control @error('location') is-invalid @enderror" name="location" autocomplete="new-location" placeholder="@lang('register.location')">

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="birthdate" class="row col-form-label text-md-left">@lang('register.birthdate')<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="border-radius: 0; height: 40px;" id="birthdate" type="text" placeholder="@lang('register.hint_birthdate')" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" autocomplete="birthdate" autofocus>

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="type" class="row col-form-label text-md-left">@lang('register.usertype')<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="margin-top: 5px;" type="radio" id="lawyer" class="@error('type') is-invalid @enderror" name="type" value="lawyer"
                                @if(old('type') == 'lawyer') echo checked @endif>
                                <label for="lawyer">@lang('register.lawyer')</label>&nbsp&nbsp&nbsp
                                <input style="margin-top: 5px;" type="radio" id="client" name="type" value="client"
                                @if(old('type') == 'client') echo checked @endif>
                                <label for="client">@lang('register.client')</label>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="row col-form-label text-md-left">@lang('register.gender')<span style="color: red;">*</span></label>

                            <div class="row">
                                <input style="margin-top: 5px;" type="radio" id="male" class="@error('gender') is-invalid @enderror" name="gender" value="male"
                                @if(old('gender') == 'male') echo checked @endif>
                                <label for="male">@lang('register.male')</label>&nbsp&nbsp&nbsp
                                <input style="margin-top: 5px;" type="radio" id="female" name="gender" value="female"
                                @if(old('gender') == 'female') echo checked @endif>
                                <label for="female">@lang('register.female')</label>&nbsp&nbsp&nbsp
                                <input style="margin-top: 5px;" type="radio" id="other" name="gender" value="other"
                                @if(old('gender') == 'other') echo checked @endif>
                                <label for="other">@lang('register.other')</label>


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
                                    @lang('register.register')
                                </button>
                            </div>

                            <label class="col-form-label text-white text-md-left">
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    @lang('register.login')
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

@section('footer-script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#division').on('change',function() {
            var division_id = $(this).val();
            // alert(division_id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:'/get-districts',
                data: {division_id: division_id},
                success: function (data) {
                    // alert(data);
                    // console.log(data);
                    var x=0,txt='',y=0,txt='';
                    txt = "";

                    for (x in data) {
                        txt += "<option value="+data[x].id+">" + data[x].name + "</option>";
                    }
                    // console.log(txt)
                    $( "#district_id").html(txt);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>
@endsection
        