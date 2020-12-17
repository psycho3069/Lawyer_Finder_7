@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @include('layouts.user.menu')

    <div class="body-margin">
    	<h1 class="text-md-center">
            {{ 'Account Verification' }}
        </h1>
        <h4 class="text-md-center">
        	{{ 'Hello '.$lawyer->user->name.', Please upload your NID pictures to verify your lawyer account.' }}
        </h4>
        <hr>
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

        <div class="container p-0 mb-5" style="margin-top: 56px;">
    		<form method="POST" class="pb-5" enctype="multipart/form-data" action="{{ route('lawyer-upload-nid',$lawyer->id) }}">
                @csrf

                @method('PUT')

        		<div class="row card-body justify-content-center">
                    <div class="col-md-5 p-2 m-2" style="border: solid maroon 2px;">
		        		<div class="text-md-center">
	                        <img id="nid_front_container" alt="Image Preview" src="{{ URL::asset('/storage/nid/'.Auth::user()->lawyer->nid_front) }}" style="width:60%; height:auto; border-radius:0%;">
	                    </div>
		        	</div>

		        	<div class="form-group col-md-5 row">
                        <label for="nid_front" class="col-md-4 col-form-label text-md-left">NID Front</label>
                        <div class="col-md-6">
                            <input type="file" id="nid_front" class="edit-profile form-control @error('nid_front') is-invalid @enderror" name="nid_front">

                            @error('nid_front')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


		        	<div class="col-md-5 p-2 m-2" style="border: solid maroon 2px;">
		        		<div class="text-md-center">
	                        <img id="nid_back_container" alt="Image Preview" src="{{ URL::asset('/storage/nid/'.Auth::user()->lawyer->nid_back) }}" style="width:60%; height:auto; border-radius:0%;">
	                    </div>
		        	</div>

		        	<div class="form-group col-md-5 row">
                        <label for="nid_back" class="col-md-4 col-form-label text-md-left">NID Back</label>
                        <div class="col-md-6">
                            <input type="file" id="nid_back" class="edit-profile form-control @error('nid_back') is-invalid @enderror" name="nid_back">

                            @error('nid_back')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        		</div>

                <div class="form-group text-lg-center pt-2">
	                <div class="col-md-8">
	                    <button type="submit" style="border-radius: 0;" class="button">
	                        {{ __('Submit') }}
	                    </button>
	                </div>
	            </div>
            </form>
        	
		        	
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
  
    $('#nid_front').change(function(){
    	console.log('akjsnakjs')
           
	    let reader = new FileReader();

	    reader.onload = (e) => { 

	        $('#nid_front_container').attr('src', e.target.result); 
	    }

	    reader.readAsDataURL(this.files[0]); 
  		
    });

    $('#nid_back').change(function(){
           
	    let reader = new FileReader();

	    reader.onload = (e) => { 

	        $('#nid_back_container').attr('src', e.target.result); 
	    }

	    reader.readAsDataURL(this.files[0]); 
  		
    });

});
</script>
	
@endsection
