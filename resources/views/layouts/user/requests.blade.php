@extends('layouts.app')

@section('content')
    <div class="container-x" style="margin-top: 55px;">
    	
    	@include('layouts.user.menu')

    	<div class="body-margin">
	        <div id="content" class="container p-0" style="margin-top: 56px;">
	            <div class="row justify-content-center clearfix">
	                <div class="col-md-12 m-0 p-0">
	                    <div class="card m-0 p-0 text-lg-center">

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

	                        <div style="background-color: #f1d1d2;" class="text-lg-center card-header"> <h2>@lang('requests.title')</h2> </div>

		                    @if(Session::has('approve'))
	                            <div style="min-height: 30px;" class="alert-success alert-dismissible text-md-center">
	                                {{ Session::get('approve') }}
	                            </div>
	                        @elseif(Session::has('decline'))
	                            <div style="min-height: 30px;" class="alert-success alert-dismissible text-md-center">
	                                {{ Session::get('decline') }}
	                            </div>
	                        @elseif(Session::has('won'))
	                            <div style="min-height: 30px;" class="alert-success alert-dismissible text-md-center">
	                                {{ Session::get('won') }}
	                            </div>
	                        @elseif(Session::has('lost'))
	                            <div style="min-height: 30px;" class="alert-success alert-dismissible text-md-center">
	                                {{ Session::get('lost') }}
	                            </div>
	                        @endif

		                    @foreach($requests as $key => $request)
		                    	{{-- @if($request->casefile->result != 'running') --}}
		                            <div class="card-body" style="border: solid gray 1px; margin: 5px 0px 5px 0px;">
		                                <div class="row">
		                                	<div class="col-md-3">
		                                        <h4>@lang('requests.identity')</h4>
		                                    </div>
		                                    <div class="col-md-3">
		                                        {{ '#' }}
		                                        <span lang="@if(App::isLocale('bn')){{ 'bang' }}@endif">{{ ++$key }}</span>
		                                        {{ '	'.$request->casefile->case_identity }}
		                                        {{ ' (' }}
		                                        {{ $request->casefile->type }} 
		                                        @lang('requests.case') 
		                                        {{ ' )' }}
		                                    </div>
		                                    <div class="col-md-6">
		                                    	@if($request->state == 'pending')
		                                        	<a type="button" id="approved" class="btn btn-success response" href="{{ route('lawyer-request-decide',['approve' => 1, 'req_id'=> $request->id,'casefile_id' => $request->casefile_id, 'client_id' => $request->client_id ]) }}">
													   <i class="fa fa-check"></i>@lang('requests.accept')
													</a>

													<a type="button" id="declined" class="btn btn-danger response" href="{{ route('lawyer-request-decide',['approve' => 0, 'req_id'=> $request->id,'casefile_id' => $request->casefile_id, 'client_id' => $request->client_id ]) }}">
													   <i class="fa fa-times"></i>@lang('requests.decline')
													</a>
			                                	@elseif($request->state == 'rejected')
			                                		<button style="cursor: no-drop;" class="btn btn-danger" disabled>@lang('requests.declined')</button>
			                                	@elseif($request->state == 'accepted')
			                                		<button style="cursor: no-drop;" class="btn btn-primary rounded-0" disabled>@lang('requests.accepted')</button>

			                                		<a type="button" id="approved" class="btn btn-success response" href="{{ route('lawyer-result-decide',['result' => 1, 'req_id'=> $request->id,'casefile_id' => $request->casefile_id, 'client_id' => $request->client_id ]) }}">
													   <i class="fa fa-check"></i>@lang('requests.won')
													</a>

													<a type="button" id="declined" class="btn btn-warning response" href="{{ route('lawyer-result-decide',['result' => 0, 'req_id'=> $request->id,'casefile_id' => $request->casefile_id, 'client_id' => $request->client_id ]) }}">
													   <i class="fa fa-times"></i>@lang('requests.lost')
													</a>
			                                	@elseif($request->state == 'closed')
				                                	@if($request->casefile->result == 'won')
				                                		<button style="cursor: no-drop;" class="btn btn-success" disabled> @lang('requests.closed') ({{ $request->casefile->result }})</button>
				                                	@elseif($request->casefile->result == 'lost')
			                                			<button style="cursor: no-drop;" class="btn btn-danger" disabled> @lang('requests.closed') ({{ $request->casefile->result }})</button>
				                                	@endif
			                                	@endif
			                                </div>
		                                </div>
		                                <div class="row">
		                                	<div class="col-md-3">
		                                        @lang('requests.court')
		                                    </div>
		                                    <div class="col-md-3">
		                                        {{ $request->casefile->court->name }}
		                                    </div>
		                                    <div class="col-md-3">
		                                    	@lang('requests.client')
		                                    </div>
		                                    <div class="col-md-3">
		                                    	{{ $request->client->user->name }}
		                                    </div>
		                                </div>
		                                <div class="row pt-3">
		                                    <div class="col-md-10">
		                                    	<h4 style="color: Maroon;">@lang('requests.details'):</h4>
		                                    	 {{ $request->casefile->description }}
		                                    </div>
		                                </div>
		                            </div>
	                            {{-- @endif --}}
		                    @endforeach

	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

    </div>
@endsection

@section('footer-script')
    <script type="text/javascript">
    	$(document).ready(function(){
	    	$('.response').click(function(){
			    var case_request = $(this).attr('id');

		        // alert(case_request);
		        // console.log(case_request)
		        
		        $.ajaxSetup({
		            headers: {
		                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            }
		        });

		        $.ajax({
		            type:'GET',
		            url:'/lawyer-request-decide',
		            data: {case: case_request},
		            success: function (data) {
		                // alert(data);
		                console.log(data)
		            }
		        });
				    
			
			});
		});
    </script>
@endsection