@extends('layouts.app')

@section('content')

@auth
    @if(auth()->user()->type == 'admin')
        @include('layouts.admin.menu')
    @endif
@endauth

<div id="content" class="container @auth @if(auth()->user()->type == 'admin')  body-margin @endif @endauth" style="margin-top: 55px; border: solid lightgray 1px; background-color: white;">
    <div class="row justify-content-center p-2 m-1">
        <div class="col-md-12">

        	@if (session('status'))
                <div id="success-status" class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="row">
            	<div class="col-md-6">
            		<h1>@lang('notice.create')</h1>
            	</div>
            	<div class="col-md-6 float-right">
            		<a href="{{ route('notice.index') }}" class="btn btn-primary float-right m-3">@lang('notice.back')</a>
            	</div>
            </div>
        	
        	<hr>


			<form method="POST" class="" action="{{ route('notice.store') }}">
                @csrf

                <div class="form-group">
                    <label for="title" class="row col-form-label text-md-left">@lang('notice.title.en')<span style="color: red;">*</span></label>

                    <div class="row">
                        <input style="border-radius: 0; height: 40px;" id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="@lang('notice.hint_title_en')" value="{{ old('title') }}">

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group with-icon">
                    <i class="fa-comments-o fa"></i>@lang('notice.details.en')<span style="color: red;">*</span>
                    <textarea class="form-control @error('details') is-invalid @enderror" value="{{ old('details') }}" id="details" name="details" placeholder="@lang('notice.hint_detals_en')" rows="6" cols="30"></textarea>
                    @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title_bn" class="row col-form-label text-md-left">@lang('notice.title.bn')<span style="color: red;">*</span></label>

                    <div class="row">
                        <input style="border-radius: 0; height: 40px;" id="title_bn" type="text" class="form-control @error('title_bn') is-invalid @enderror" name="title_bn" placeholder="@lang('notice.hint_title_bn')" value="{{ old('title_bn') }}">

                        @error('title_bn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group with-icon">
                    <i class="fa-comments-o fa"></i>@lang('notice.details.bn')<span style="color: red;">*</span>
                    <textarea class="form-control @error('details_bn') is-invalid @enderror" value="{{ old('details_bn') }}" id="details_bn" name="details_bn" placeholder="@lang('notice.hint_detals_bn')" rows="6" cols="30"></textarea>
                    @error('details_bn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <div class="">
                        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 8px; border-radius: 0; min-width: 100px; min-height: 40px;">
                            @lang('notice.add')
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection

@section('footer-script')

@endsection