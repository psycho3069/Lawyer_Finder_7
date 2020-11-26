@extends('layouts.app')

@section('style')
.radio-pad{
	padding-top: 8px;
}
@endsection

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

                <div class="card-header text-center"><a href="{{ route('home') }}" type="button" class="btn float-left btn-primary button">Back</a>{{ __('Add Court') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('court.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Court Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="location" type="location" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}"  autocomplete="location" autofocus> --}}

                                <select name="location" id="location" class="custom-select form-control @error('location') is-invalid @enderror">
                                	<option value="" >---Select---</option>
									<option value="dhaka" @if(old('location') == 'dhaka') echo checked @endif>Dhaka</option>
									<option value="barisal" @if(old('location') == 'barisal') echo checked @endif>Barisal</option>
									<option value="khulna" @if(old('location') == 'khulna') echo checked @endif>Khulna</option>
									<option value="chittagong" @if(old('location') == 'chittagong') echo checked @endif>Chittagong</option>
									<option value="rangpur" @if(old('location') == 'rangpur') echo checked @endif>Rangpur</option>
									<option value="sylhet" @if(old('location') == 'sylhet') echo checked @endif>Sylhet</option>
								</select>

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Court Type') }}</label>

                            <div class="radio-pad col-md-6">
                                <input type="radio" id="supreme" class="@error('type') is-invalid @enderror" name="type" value="supreme"
                                @if(old('type') == 'supreme') echo checked @endif>
                                <label for="supreme">Supreme Court</label><br>
                                <input type="radio" id="high" name="type" value="high"
                                @if(old('type') == 'high') echo checked @endif>
                                <label for="high">High Court</label><br>
                                <input type="radio" id="judge" name="type" value="judge"
                                @if(old('type') == 'judge') echo checked @endif>
                                <label for="judge">Judge Court</label><br>
                                <input type="radio" id="magistrate" name="type" value="magistrate"
                                @if(old('type') == 'magistrate') echo checked @endif>
                                <label for="magistrate">Magistrate Court</label><br>
                                <input type="radio" id="tribunale" name="type" value="tribunale"
                                @if(old('type') == 'tribunale') echo checked @endif>
                                <label for="tribunale">Tribunale Court</label>

                                @error('type')
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

