@extends('layouts.app')

@section('content')
    <div class="container-x" style="margin-top: 55px;">
    	
    	@include('layouts.user.menu')

    	<div class="body-margin">
	        <div class="container p-0" style="margin-top: 56px;">
	            <div class="row justify-content-center m-0 p-0 clearfix">
	                <div class="col-md-12 m-0 p-0">
	                    <div class="card m-0 p-0">
	                        <div class="card-header">{{ __('Client Requests') }}</div>

	                        {{-- <div class="card-body">
	                            
	                        </div> --}}

	                    </div>

	                    @foreach($requests as $key => $request)
	                        <div class="card m-0 p-0">
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
	                                    @if($request->result == 'waiting')
                                            <div class="col-md-3">

                                            	<button type="button" id="approved" class="btn btn-success response">
												   <i class="fa fa-check"></i>Accept
												</button>

												<button type="button" id="declined" class="btn btn-danger response">
												   <i class="fa fa-times"></i>Decline
												</button>
		                                        
												{{-- <button type="submit" class="btn btn-success">
												   <i class="fa fa-check"></i>Accept
												</button>

		                                        <a href="#" class="btn btn-danger">Reject<i class="fa fa-times fa-xs"></i></a> --}}
		                                    </div>
                                        @endif
	                                    {{-- <div class="col-md-3">
	                                        <a href="{{ route('lawyer.show',$lawyers[--$user->id]) }}" class="btn btn-secondary">Profile</a>
	                                    </div> 
	                                    <div class="col-md-3">
	                                        <a href="#" class="btn btn-success">Request</a>
	                                    </div>
	                                    <div class="col-md-3">
	                                        <a href="{{ route('lawyer-messenger') }}" class="btn btn-info">message</a>
	                                    </div> --}}
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
	                        </div>
	                    @endforeach
	                    
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