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
        	<div class="row">
        		<div class="col-md-9">
        			<h3 class="row title">
		        		@if(App::isLocale('en'))
		                    {{ $notice->title }}
		                @else
		                    {{ $notice->title_bn }}
		                @endif
		        	</h3>
        		</div>
        		<div class="col-md-3">
        			{{ $notice->created_at }}
        		</div>
        	</div>
        	
        	<hr>

        	<div class="row details">
        		@if(App::isLocale('en'))
                    {{ $notice->details }}
                @else
                    {{ $notice->details_bn }}
                @endif
        	</div>
        </div>
    </div>
</div>

@endsection

@section('footer-script')

@endsection