@extends('layouts.app')

@section('content')
    <div class="container-x" style="margin-top: 55px;">
    	
    	@include('layouts.user.menu')

    	<div class="body-margin">
	        <div class="container p-0" style="margin-top: 56px;">
	            <div class="row justify-content-center clearfix">
	                <div class="col-md-12 m-0 p-0">
	                    <div class="card m-0 p-0">
	                        <div class="text-lg-center card-header bg-primary">{{ __('Client Requests') }}</div>

	                    @if(Session::has('approve'))
                            <div style="min-height: 30px;" class="alert-success alert-dismissible text-md-center">
                                {{ Session::get('approve') }}
                            </div>
                        @elseif(Session::has('decline'))
                            <div style="min-height: 30px;" class="alert-success alert-dismissible text-md-center">
                                {{ Session::get('decline') }}
                            </div>
                        @endif

		                    @foreach($requests as $key => $request)
	                            <div class="card-body">
	                                <div class="row">
	                                    <div class="col-md-3">
	                                        {{ '#'.++$key }}
	                                    </div>
	                                    <div class="col-md-3">
	                                        {{ '' }}
	                                    </div>
	                                    <div class="col-md-3">
	                                        {{ '' }}
	                                    </div>
	                                    <div class="col-md-3">
	                                    	@if($request->state == 'waiting')
	                                        	<a type="button" id="approved" class="btn btn-success response" href="{{ route('lawyer-request-decide',['approve' => 1, 'req_id'=> $request->id,'casefile_id' => $request->casefile_id, 'client_id' => $request->client_id ]) }}">
												   <i class="fa fa-check"></i>Accept
												</a>

												<a type="button" id="declined" class="btn btn-danger response" href="{{ route('lawyer-request-decide',['approve' => 0, 'req_id'=> $request->id,'casefile_id' => $request->casefile_id, 'client_id' => $request->client_id ]) }}">
												   <i class="fa fa-times"></i>Decline
												</a>
		                                	@elseif($request->state == 'rejected')
		                                		<button style="cursor: no-drop;" class="btn btn-danger" disabled>Declined</button>
		                                	@elseif($request->state == 'accepted')
		                                		<button style="cursor: no-drop;" class="btn btn-danger" disabled>Accepted</button>
		                                	@endif
		                                </div>
	                                </div>
	                                <div class="row">
	                                    <div class="col-md-3">
	                                        {{ $request->case_identity }}
	                                    </div>
	                                    <div class="col-md-3">
	                                        {{ $request->description }}
	                                    </div>
	                                    <div class="col-md-3">
	                                        {{ $request->type }}
	                                    </div>
	                                    <div class="col-md-3">
	                                        {{ $request->client_type }}
	                                    </div>
	                                </div>
	                                <div class="row">
	                                    <div class="col-md-3">
	                                        {{ $request->client_id }}
	                                    </div>
	                                    
	                                    <div class="col-md-3">
	                                        {{ '' }}
	                                    </div>

	                                    <div class="col-md-3">
	                                        @foreach($courts as $key => $court)
	                                            @if($court->id == $request->court_id)
	                                                {{ $court->name }}
	                                            @endif
	                                        @endforeach
	                                    </div>
	                                    <div class="col-md-3">
	                                        {{ $request->created_at }}
	                                    </div>
	                                </div>
	                            </div>
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