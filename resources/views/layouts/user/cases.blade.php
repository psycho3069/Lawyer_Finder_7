@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @include('layouts.user.menu')

	<div class="body-margin">
		<div class="container p-0" style="margin-top: 56px;">
			@if(auth()->user()->type == 'client')
                <div class="col-md-12 justify-content-center text-md-center">
					<a href="{{ route('casefile.create') }}" type="button" class="button btn-primary m-2 p-2" style=""><span>Add Case</span></a>
				</div>
			@endif

			@foreach($user_cases as $key => $value)
				<div class="card m-2">
					<div class="card-header" style="background-color: #cff7e9;">
						<div class="col-md-4 float-left">{{ $value->case_identity }}</div>
						<div class="col-md-2 float-left"></div>
						<div class="col-md-2 float-left">Case {{ ++$key }}</div>
						<div class="col-md-4 float-right btn 
						@if($value->result == 'waiting')
							btn-info disabled
						@elseif($value->result == 'pending')
							btn-warning disabled
						@elseif($value->result == 'running')
							btn-primary disabled
						@elseif($value->result == 'won')
							btn-success disabled
						@elseif($value->result == 'lost')
							btn-danger disabled
						@else
							btn-danger
						@endif" >Status: {{ $value->result }}</div>
					</div>
					<div class="card-body">
						<h5 class="card-title">{{ $value->type }}</h5>
						<p class="card-text">{{ $value->description }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>

</div>

@endsection

@section('footer-script')
	
@endsection
