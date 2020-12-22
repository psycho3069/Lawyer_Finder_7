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

                <form method="POST" enctype="multipart/form-data" action="{{ route('lawyer.update',auth()->user()->id) }}">
                    

                    <div class="card-body">
                        @csrf

                        @method('PUT')

                        <div class="card-block text-center" style="background-color: #f1d1d2; min-height: 45px; font-size: 24px;">@lang('lawyer.personal')</div>

                        <div class="row align-content-center justify-content-center pb-3">
                            <img id="image_preview_container" alt="Image Preview" src="{{ URL::asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}" style="width:250px; height:250px; border-radius:50%;">
                        </div>

                        <div class="form-group row">
                            <label for="profile_picture" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.profile')</label>
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
                            <label for="name" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.name')</label>

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
                            <label for="birthdate" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.birthdate')</label>

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
                            <label for="gender" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.gender')</label>

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

                        <div class="card-block text-center" style="background-color: #f1d1d2; min-height: 45px; font-size: 24px;">@lang('lawyer.contact_details')</div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.email')</label>

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
                            <label for="contact" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.contact')</label>

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
                            <label for="division_id" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.division')</label>

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
                            <label for="district_id" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.district')</label>

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
                            <label for="location" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.location')</label>

                            <div class="col-md-6">
                                <input id="location" type="location" class="edit-profile form-control @error('location') is-invalid @enderror" name="location" value="{{ $user->location }}" autocomplete="location" placeholder="@lang('lawyer.location_hint')">

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="court_id" class="col-md-4 offset-1 col-form-label text-md-left">{{ __('Current Court') }}</label>

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

                        <div class="card-block text-center" style="background-color: #f1d1d2; min-height: 45px; font-size: 24px;">@lang('lawyer.lawyer')</div>

                        <div class="form-group row">
                            <label for="member_id" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.member_id')</label>

                            <div class="col-md-6">
                                <input id="member_id" type="member_id" class="edit-profile form-control @error('member_id') is-invalid @enderror" name="member_id" value="{{ $user->lawyer->member_id }}" autocomplete="member_id" placeholder="@lang('lawyer.member_id_hint')">

                                @error('member_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profile_bio" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.bio')</label>

                            <div class="col-md-6">
                                <textarea rows="6" id="profile_bio" type="profile_bio" class="edit-profile form-control @error('profile_bio') is-invalid @enderror" name="profile_bio" autocomplete="profile_bio" placeholder="@lang('lawyer.bio_hint')" autofocus>{{ $user->lawyer->profile_bio }}</textarea>

                                @error('profile_bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.type')</label>

                            <div class="col-md-6">

                                <input type="radio" id="advocate" class="@error('type') is-invalid @enderror" name="type" value="advocate"
                                @if($user->lawyer->type == 'advocate') echo checked @endif>
                                <label for="advocate">@lang('lawyer.advocate')</label>&nbsp&nbsp&nbsp

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
                            <label for="specialties_id" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.specialty')</label>
                            
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

                        <div class="section card-block text-center" style="background-color: #f1d1d2; min-height: 45px; font-size: 24px;">@lang('lawyer.educational')</div>

                        <h3 style="color: maroon; padding-left:100px; text-decoration: underline;">@lang('lawyer.ssc_title'):</h3>
                        <div class="form-group row">
                            <label for="ssc_year" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.ssc_year')</label>
                            
                            <div class="col-md-6">

                                <select name="ssc_year" id="ssc_year" class="edit-profile custom-select form-control @error('ssc_year') is-invalid @enderror">
                                    <option value="">-----@lang('lawyer.ssc_year_hint')-----</option>
                                    @for($i=date("Y"); $i>=1950; $i--)
                                        <option value="{{ $i }}"
                                            @if($user->education->ssc_year == $i) echo selected @endif
                                            >{{ $i }}</option>

                                    @endfor
                                </select>

                                @error('ssc_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="ssc_board" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.ssc_board')</label>
                            
                            <div class="col-md-6">

                                <select name="ssc_board" id="ssc_board" class="edit-profile custom-select form-control @error('ssc_board') is-invalid @enderror">
                                    <option value="">-----@lang('lawyer.ssc_board_hint')-----</option>
                                    @foreach($boards as $key => $board)
                                        <option value="{{ $board->id }}"
                                            @if($user->education->ssc_board)
                                                @if($user->education->ssc_board->id == $board->id) echo selected @endif
                                            @endif
                                            >{{ $board->board_name }}</option>
                                    @endforeach
                                </select>

                                @error('ssc_board')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ssc_result" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.ssc_result')</label>
                            
                            <div class="col-md-6">

                                <input id="ssc_result" type="ssc_result" class="edit-profile form-control @error('ssc_result') is-invalid @enderror" name="ssc_result" value="{{ $user->education->ssc_result }}" autocomplete="ssc_result" placeholder="@lang('lawyer.ssc_result_hint')">

                                @error('ssc_result')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <h3 style="color: maroon; padding-left:100px; text-decoration: underline;">@lang('lawyer.hsc_title'):</h3>
                        <div class="form-group row">
                            <label for="hsc_year" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.hsc_year')</label>
                            
                            <div class="col-md-6">

                                <select name="hsc_year" id="hsc_year" class="edit-profile custom-select form-control @error('hsc_year') is-invalid @enderror">
                                    <option value="">----- @lang('lawyer.hsc_year_hint')-----</option>
                                    @for($i=date("Y"); $i>=1950; $i--)
                                        <option value="{{ $i }}"
                                            @if($user->education->hsc_year == $i) echo selected @endif
                                            >{{ $i }}</option>

                                    @endfor
                                </select>

                                @error('hsc_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hsc_board" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.hsc_board')</label>
                            
                            <div class="col-md-6">

                                <select name="hsc_board" id="hsc_board" class="edit-profile custom-select form-control @error('hsc_board') is-invalid @enderror">
                                    <option value="">-----@lang('lawyer.hsc_board_hint')-----</option>
                                    @foreach($boards as $key => $board)
                                        <option value="{{ $board->id }}"
                                            @if($user->education->hsc_board)
                                                @if($user->education->hsc_board->id == $board->id) echo selected @endif
                                            @endif
                                            >{{ $board->board_name }}</option>
                                    @endforeach
                                </select>

                                @error('hsc_board')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hsc_result" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.hsc_result')</label>
                            
                            <div class="col-md-6">

                                <input id="hsc_result" type="hsc_result" class="edit-profile form-control @error('hsc_result') is-invalid @enderror" name="hsc_result" value="{{ $user->education->hsc_result }}" autocomplete="hsc_result" placeholder="@lang('lawyer.hsc_result_hint')">

                                @error('hsc_result')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        {{-- {{ $user->education->category->level }} --}}
                        <h3 style="color: maroon; padding-left:100px; text-decoration: underline;">@lang('lawyer.degree_title'):</h3>
                        <div class="form-group row">
                            <label for="degree_level" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.degree_level')</label>
                            
                            <div class="col-md-6">

                                <select name="degree_level" id="degree_level" class="edit-profile custom-select form-control @error('degree_level') is-invalid @enderror">
                                    
                                    <option value="">@lang('lawyer.degree_level_hint')</option>
                                    @foreach($degree_levels as $key => $degree_level)

                                        <option value="{{ $degree_level->id }}"
                                            @if($user->education->category)
                                                @if($user->education->category->level->id == $degree_level->id) echo selected @endif
                                            @endif
                                            >{{ $degree_level->level_name }}</option>

                                    @endforeach
                                    
                                </select>

                                @error('degree_level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="degree_category" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.degree_category')</label>
                            
                            <div class="col-md-6">

                                <select name="degree_category" id="degree_category" class="edit-profile custom-select form-control @error('degree_category') is-invalid @enderror">
                                    <option value="">@lang('lawyer.degree_category_hint')</option>
                                    @foreach($degree_categories as $key => $category)

                                        <option value="{{ $category->id }}"
                                            @if($user->education->category)
                                                @if($user->education->category->id == $category->id) echo selected @endif
                                            @endif 
                                            >{{ $category->category_name }}</option>

                                    @endforeach
                                    
                                </select>

                                @error('degree_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="uni" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.uni')</label>
                            
                            <div class="col-md-6">

                                <input id="uni" type="uni" class="edit-profile form-control @error('uni') is-invalid @enderror" name="uni" value="{{ $user->education->uni }}" autocomplete="uni" placeholder="@lang('lawyer.uni_hint')">

                                @error('uni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sub" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.sub')</label>
                            
                            <div class="col-md-6">

                                <input id="sub" type="sub" class="edit-profile form-control @error('sub') is-invalid @enderror" name="sub" value="{{ $user->education->sub }}" autocomplete="sub" placeholder="@lang('lawyer.sub_hint')">

                                @error('sub')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="degree_year" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.degree_year')</label>
                            
                            <div class="col-md-6">

                                <select name="degree_year" id="degree_year" class="edit-profile custom-select form-control @error('degree_year') is-invalid @enderror">
                                    <option value="">----- @lang('lawyer.degree_year_hint')-----</option>
                                    @for($i=date("Y"); $i>=1950; $i--)
                                        <option value="{{ $i }}"
                                            @if($user->education->degree_year == $i) echo selected @endif
                                            >{{ $i }}</option>

                                    @endfor
                                </select>

                                @error('degree_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="degree_result" class="col-md-4 offset-1 col-form-label text-md-left">@lang('lawyer.degree_result')</label>
                            
                            <div class="col-md-6">

                                <input id="degree_result" type="degree_result" class="edit-profile form-control @error('degree_result') is-invalid @enderror" name="degree_result" value="{{ $user->education->degree_result }}" autocomplete="degree_result" placeholder="@lang('lawyer.degree_result_hint')">

                                @error('degree_result')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                    </div>

                    

                    <div class="form-group row pt-3 pb-3">
                        <div class="col-md-12 text-center">
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#division_id').on('change',function() {
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#degree_level').on('change',function() {
            var degree_level = $(this).val();
            // alert(degree_level);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:'/get-categories',
                data: {degree_level: degree_level},
                success: function (data) {
                    // alert(data);
                    // console.log(data);
                    var x=0,txt='',y=0,txt='';
                    txt = "";

                    for (x in data) {
                        txt += "<option value="+data[x].id+">" + data[x].category_name + "</option>";
                    }
                    // console.log(txt)
                    $( "#degree_category").html(txt);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>
	
@endsection