@extends('layouts.app')

@section('content')
    <div class="container-x" style="margin-top: 55px;">
    	
    	@include('layouts.user.menu')

    	<div class="body-margin">
	        <div id="content" class="container p-0" style="margin-top: 56px;">
	            <div class="row justify-content-center clearfix">
	                <div class="col-md-12 m-0 p-0">
	                    <div class="card m-0 p-0">
	                        <div style="background-color: #f1d1d2;" class="text-lg-center card-header">{{ __('Client Requests') }}</div>

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
		                                        {{ 'Case Identity:' }}
		                                    </div>
		                                    <div class="col-md-3">
		                                        {{ '#'.++$key.'	' }}{{ $request->casefile->case_identity }}{{ ' ('.$request->casefile->type.' Case)' }}
		                                    </div>
		                                    <div class="col-md-6">
		                                    	@if($request->state == 'pending')
		                                        	<a type="button" id="approved" class="btn btn-success response" href="{{ route('lawyer-request-decide',['approve' => 1, 'req_id'=> $request->id,'casefile_id' => $request->casefile_id, 'client_id' => $request->client_id ]) }}">
													   <i class="fa fa-check"></i>Accept
													</a>

													<a type="button" id="declined" class="btn btn-danger response" href="{{ route('lawyer-request-decide',['approve' => 0, 'req_id'=> $request->id,'casefile_id' => $request->casefile_id, 'client_id' => $request->client_id ]) }}">
													   <i class="fa fa-times"></i>Decline
													</a>
			                                	@elseif($request->state == 'rejected')
			                                		<button style="cursor: no-drop;" class="btn btn-danger" disabled>Declined</button>
			                                	@elseif($request->state == 'accepted')
			                                		<button style="cursor: no-drop;" class="btn btn-primary rounded-0" disabled>Accepted</button>

			                                		<a type="button" id="approved" class="btn btn-success response" href="{{ route('lawyer-result-decide',['result' => 1, 'req_id'=> $request->id,'casefile_id' => $request->casefile_id, 'client_id' => $request->client_id ]) }}">
													   <i class="fa fa-check"></i>Won
													</a>

													<a type="button" id="declined" class="btn btn-danger response" href="{{ route('lawyer-result-decide',['result' => 0, 'req_id'=> $request->id,'casefile_id' => $request->casefile_id, 'client_id' => $request->client_id ]) }}">
													   <i class="fa fa-times"></i>Lost
													</a>
			                                	@elseif($request->state == 'closed')
			                                		<button style="cursor: no-drop;" class="btn btn-warning" disabled>Closed</button>
			                                	@endif
			                                </div>
		                                </div>
		                                <div class="row">
		                                	<div class="col-md-3">
		                                        {{ 'Court Name:' }}
		                                    </div>
		                                    <div class="col-md-3">
		                                        {{ $request->casefile->court->name }}
		                                    </div>
		                                    <div class="col-md-3">
		                                    	{{ 'Client Name:' }}
		                                    </div>
		                                    <div class="col-md-3">
		                                    	{{ $request->client->user->name }}
		                                    </div>
		                                </div>
		                                <div class="row pt-3">
		                                    <div class="col-md-10">
		                                    	<h4 style="color: Maroon;">Case Details:</h4>
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