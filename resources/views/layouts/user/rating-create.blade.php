@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @include('layouts.user.menu')

    <div class="body-margin">
        <div class="container p-0" style="margin-top: 56px;">
            <div class="row">
            	@if (session('status'))
	                <div id="success-status" class="alert alert-success" role="alert">
	                    {{ session('status') }}
	                </div>
	            @endif

	            <div class="justify-content-center text-center" style="min-height: 100px; margin-top: 40px;">

                    <h2 style="text-decoration: underline; text-decoration-color: maroon; text-decoration-style: double;">@lang('rating.give',['lawyer' => $lawyer->user->name])</h2>
                    <h4 style="padding: 10px 5px 10px 5px;">
                        <div class="stars justify-content-center text-center" style="margin-top: 15px;">
	                        @if(Session::has('error'))
	                            <div id="success-status" style="min-height: 30px; border: solid maroon 1px; border-radius: 5%;" class="alert-danger text-md-center">
	                                {{ Session::get('error') }}
	                            </div>
	                        @elseif(Session::has('star'))
	                            <div id="success-status" style="min-height: 30px; border: solid maroon 1px; border-radius: 5%;" class="alert-success text-md-center">
	                                {{ Session::get('star') }}
	                            </div>
	                        @endif

	                        
	                        <form action="{{ route('rating.store') }}" method="POST">
	                            @csrf

	                            <input type="hidden" id="lawyer_id" name="lawyer_id" value="{{ $lawyer->id }}">

	                            @for ($i = 5; $i > 0; $i--)
	                                <input class="star star-{{ $i }}" id="star-{{ $i }}" type="radio" value="{{ $i }}" name="star"
	                                @if($lawyer->rating->where('giver_id',$client->id)->first())
	                                    @if($lawyer->rating->where('giver_id',$client->id)->first()->value == $i)
	                                        {{ 'checked' }}
	                                    @endif
	                                @endif
	                                />
	                                <label class="star star-{{ $i }}" for="star-{{ $i }}"></label>
	                            @endfor
		                        
		                        <div class="p-3 m-3">
								    <label for="review" class="float-left">@lang('rating.review'):</label>
								    <textarea name="review" class="form-control" id="review" rows="4" autofocus="true"> {{ $rating->text }} </textarea>
								</div>

	                            <button style="height: 37px; width: 237px; border-radius: 0px; margin-left: 15px;" name="submit" type="submit" id="submit-button" value="Submit" class="button btn btn-primary"><i class="fas fa-star-half-alt text-warning" style="height: 20px; width: 20px;"></i>&nbsp 
		                            @if($lawyer->rating->where('giver_id',$client->id)->first())
		                                @lang('rating.update_review')
		                            @else
		                                @lang('rating.submit_review')
		                            @endif
		                        </button>
	                        </form>
	                    </div>
	                    
                    </h4>
                </div>
	        </div>
        </div>
    </div>
</div>
@endsection

@section('footer-script')
	
@endsection