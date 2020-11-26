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

                <div class="card-header text-center"><a href="{{ route('home') }}" type="button" class="btn float-left btn-primary button">Back</a>{{ __('Add Case') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('casefile.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="case_identity" class="col-md-4 col-form-label text-md-right">{{ __('Case Name') }}</label>

                            <div class="col-md-6">
                                <input id="case_identity" type="case_identity" class="form-control @error('case_identity') is-invalid @enderror" name="case_identity" value="{{ old('case_identity') }}"  autocomplete="case_identity" placeholder="Client Name-Case ID" autofocus>

                                @error('case_identity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" placeholder="please describe the case specificly" autofocus></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="radio-pad col-md-6">

                                <input type="radio" id="civil" class="@error('type') is-invalid @enderror" name="type" value="civil"
                                @if(old('type') == 'civil') echo checked @endif>
                                <label for="civil">Civil</label>&nbsp&nbsp

                                <input type="radio" id="family" name="type" value="family"
                                @if(old('type') == 'family') echo checked @endif>
                                <label for="family">Family</label>&nbsp&nbsp

                                <input type="radio" id="criminal" name="type" value="criminal"
                                @if(old('type') == 'criminal') echo checked @endif>
                                <label for="criminal">Criminal</label><br>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="client_type" class="col-md-4 col-form-label text-md-right">{{ __('Client Type') }}</label>

                            <div class="radio-pad col-md-6">

                                <input type="radio" id="prosecutor" class="@error('client_type') is-invalid @enderror" name="client_type" value="prosecutor"
                                @if(old('client_type') == 'prosecutor') echo checked @endif>
                                <label for="prosecutor">Prosecutor</label>&nbsp&nbsp

                                <input type="radio" id="defendant" name="client_type" value="defendant"
                                @if(old('client_type') == 'defendant') echo checked @endif>
                                <label for="defendant">Defendant</label><br>

                                @error('client_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="court" class="col-md-4 col-form-label text-md-right">{{ __('Which Court') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="location" type="location" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}"  autocomplete="location" autofocus> --}}

                                <select name="court" id="court" class="custom-select form-control @error('court') is-invalid @enderror">
                                	<option value="" >---Select Court---</option>
                                    @foreach($courts as $key => $value)
                                        <option value="{{ $value->id }}" @if(old('court') == $value->id) echo checked @endif>{{ $value->name }}</option>
                                    @endforeach
								</select>

                                @error('court')
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

