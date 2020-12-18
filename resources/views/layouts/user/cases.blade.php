@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @include('layouts.user.menu')

	<div class="body-margin">
		<div class="container p-0" style="margin-top: 56px;">
			@if(auth()->user()->type == 'lawyer')
                @if(auth()->user()->lawyer->admin_approval == 0)  
                    <div class="alert-warning text-danger">
                        <a href="{{ route('lawyer-verify',auth()->user()->lawyer) }}">@lang('rating.verify_msg') 
                            <button class="btn btn-outline-info">@lang('rating.verify_btn')</button>
                        </a>
                        @lang('rating.or') 
                        <a href="{{ route('lawyer.edit',auth()->user()->id) }}"> 
                            <button class="btn btn-outline-primary">@lang('rating.update')</button>
                        </a>
                    </div>
                @elseif(auth()->user()->lawyer->admin_approval == 1)
                    <div class="alert-info text-dark">
                        <a href="{{ route('lawyer-verify',auth()->user()->lawyer) }}">@lang('rating.upload_msg') 
                            <button class="btn btn-outline-info">@lang('rating.upload_btn')</button>
                        </a>
                    </div>
                @elseif(auth()->user()->lawyer->admin_approval == 3)
                    <div class="alert-danger text-dark">
                        <a href="{{ route('lawyer-verify-recheck',auth()->user()->lawyer) }}">@lang('rating.check_msg') 
                            <button class="btn btn-outline-info">@lang('rating.check_btn')</button>
                        </a>
                    </div>
                @endif
            @endif
            
			@if(auth()->user()->type == 'client')
                <div class="col-md-12 justify-content-center text-md-center">
					<a href="{{ route('casefile.create') }}" type="button" class="button btn-primary m-2 p-2" style=""><span>@lang('cases.add')</span></a>
				</div>
			@endif

			@foreach($user_cases as $key => $case)
				<div class="card m-2">
					<div class="card-header" style="background-color: #f1d1d2;">
						<div class="col-md-4 float-left">{{ $case->case_identity }}</div>
						<div class="col-md-2 float-left"></div>
						<div lang="@if(App::isLocale('bn')){{ 'bang' }}@endif" class="col-md-2 float-left">@lang('cases.case'){{ ' '.++$key }} </div>
						<div class="col-md-4 float-right btn 
						@if($case->result == 'waiting')
							btn-info disabled
						@elseif($case->result == 'running')
							btn-primary disabled
						@elseif($case->result == 'won')
							btn-success disabled
						@elseif($case->result == 'lost')
							btn-danger disabled
						@else
							btn-danger
						@endif" >@lang('cases.status'): {{ $case->result }}</div>
					</div>
					<div class="card-body">
						<h5 class="card-title">{{ $case->type }}</h5>
						<p class="card-text">{{ $case->description }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>

</div>

@endsection

@section('footer-script')
	
@endsection
