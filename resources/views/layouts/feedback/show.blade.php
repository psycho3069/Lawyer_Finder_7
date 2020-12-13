@extends('layouts.app')

@section('content')
    
<div class="container" style="margin-top: 95px; border: solid lightgray 1px; background-color: white;">
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
                <div class="col-md-4">
                    {{ $feedback->name }}
                </div>
                <div class="col-md-4">
                    {{ $feedback->email }}
                </div>
                <div class="col-md-4">
                    {{ $feedback->contact }}
                </div>
        	</div>

            <hr>

            <div class="row">
                {{ $feedback->feedback }}
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer-script')

@endsection