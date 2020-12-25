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
                @elseif(session('error'))
                    <div id="success-status" class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
	            @endif

                <div class="card-header text-center"><a href="{{ route('cases') }}" type="button" class="btn float-left btn-primary button">@lang('cases.back')</a><h3>@lang('cases.new')</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('casefile.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="case_identity" class="col-md-4 col-form-label text-md-right">@lang('cases.name')</label>

                            <div class="col-md-6">
                                <input id="case_identity" type="case_identity" class="form-control @error('case_identity') is-invalid @enderror" name="case_identity" value="{{ old('case_identity') }}"  autocomplete="case_identity" placeholder="@lang('cases.h_name')" autofocus>

                                @error('case_identity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">@lang('cases.description')</label>

                            <div class="col-md-6">
                                <textarea id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" placeholder="@lang('cases.h_description')" autofocus></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">@lang('cases.type')</label>

                            <div class="radio-pad col-md-6">

                                <input type="radio" id="civil" class="@error('type') is-invalid @enderror" name="type" value="civil"
                                @if(old('type') == 'civil') echo checked @endif>
                                <label for="civil">@lang('cases.civil')</label>&nbsp&nbsp

                                <input type="radio" id="family" name="type" value="family"
                                @if(old('type') == 'family') echo checked @endif>
                                <label for="family">@lang('cases.family')</label>&nbsp&nbsp

                                <input type="radio" id="criminal" name="type" value="criminal"
                                @if(old('type') == 'criminal') echo checked @endif>
                                <label for="criminal">@lang('cases.criminal')</label><br>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="client_type" class="col-md-4 col-form-label text-md-right">@lang('cases.type')</label>

                            <div class="radio-pad col-md-6">

                                <input type="radio" id="prosecutor" class="@error('client_type') is-invalid @enderror" name="client_type" value="prosecutor"
                                @if(old('client_type') == 'prosecutor') echo checked @endif>
                                <label for="prosecutor">@lang('cases.prosecutor')</label>&nbsp&nbsp

                                <input type="radio" id="defendant" name="client_type" value="defendant"
                                @if(old('client_type') == 'defendant') echo checked @endif>
                                <label for="defendant">@lang('cases.defendant')</label><br>

                                @error('client_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="court_id" class="col-md-4 col-form-label text-md-right">@lang('cases.court')</label>

                            <div class="col-md-6">
                                {{-- <input id="location" type="location" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}"  autocomplete="location" autofocus> --}}

                                <select name="court_id" id="court_id" class="custom-select form-control @error('court_id') is-invalid @enderror">
                                	<option value="" >--- @lang('cases.h_court') ---</option>
                                    @foreach($courts as $key => $court)
                                        <option value="{{ $court->id }}" @if(old('court_id') == $court->id) echo checked @endif>{{ $court->name }}</option>
                                    @endforeach
								</select>

                                @error('court_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('cases.submit')
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

