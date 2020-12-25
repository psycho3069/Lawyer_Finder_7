@extends('layouts.app')

@section('content')
    
@auth
    @if(auth()->user()->type == 'admin')
        @include('layouts.admin.menu')
    @endif
@endauth

<div id="content" class="container @auth @if(auth()->user()->type == 'admin')  body-margin @endif @endauth" style="margin-top: 55px; border: solid lightgray 1px; background-color: white;">
    <h2>@lang('feedback.details')</h2>
    <hr>
    <div class="row justify-content-center p-2 m-1">
        <div class="col-md-12">
        	<div class="row">
        		<div class="col-md-9">
        			<h3 class="row subject">
		                  {{ $feedback->subject }}
		        	</h3>
        		</div>
        		<div class="col-md-3">
        			{{ $feedback->created_at }}
        		</div>
        	</div>
        	
        	<hr>

        	<div class="row details">
                <div class="col-md-3">
                    {{ $feedback->name }}
                </div>
                <div class="col-md-3">
                    {{ $feedback->email }}
                </div>
                <div class="col-md-3">
                    @lang('feedback.contact'): {{ $feedback->contact }}
                </div>
                <div class="col-md-3">
                    @lang('feedback.rating'): {{ $feedback->rating }}
                </div>
        	</div>

            <hr>

            <div class="row pb-3">
                <div class="col-md-10">
                    {{ $feedback->feedback }}
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer-script')

@endsection