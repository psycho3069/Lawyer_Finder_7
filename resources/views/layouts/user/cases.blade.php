@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @include('layouts.user.menu')

	<div class="body-margin">
		<div class="container p-0" style="margin-top: 56px;">
			@if(auth()->user()->type == 'client')
                <div class="col-md-12">
					<a href="{{ route('casefile.create') }}" type="button" class="button btn-block" style="vertical-align:middle"><span>Add Case</span></a>
				</div>
			@endif

			@foreach($user_cases as $key => $value)
				<div class="col-md-12 card text-white bg-info mb-3" style="min-width: 18rem;">
					<div class="row card-header">
						<div class="col-md-2">{{ $value->case_identity }}</div>
						<div class="col-md-4" style="width: 80%; "></div>
						<div class="col-md-4">{{ $value->result }}</div>
						<div class="col-md-2">Case {{ ++$key }}</div>
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
