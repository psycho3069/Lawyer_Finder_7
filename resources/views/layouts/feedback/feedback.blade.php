@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 95px; border: solid lightgray 1px; background-color: white;">
    <div class="row justify-content-left p-2 m-1">
        <div class="col-md-12">
    		
            <div class="row">
                <h1>@lang('feedback.title')</h1>
            </div>
            <hr>

			<table class="table table-bordered table-striped table-info">

                <thead>
	                <tr>
	                    <th>@lang('feedback.subject')</th>
                        <th>@lang('feedback.name')</th>
                        <th>@lang('feedback.email')</th>
                        <th>@lang('feedback.contact')</th>
	                    <th style="width: 270px;" class="text-center">@lang('feedback.date')</th>
                        @auth
                            @if(auth()->user()->type == 'admin')
                                <th style="width: 15%">Action</th>
                            @endif
                        @endauth
	                </tr>
                </thead>

                <tbody>
                	@foreach($feedbacks as $key => $feedback)
	                    <tr>
	                        <td>
	                            <a href="{{ route('feedback.show',$feedback) }}">{{ $feedback->subject }}</a>
	                        </td>
                            <td class="text-center">{{ $feedback->name }}</td>
                            <td class="text-center">{{ $feedback->email }}</td>
                            <td class="text-center">{{ $feedback->contact }}</td>
	                        <td class="text-center">{{ $feedback->created_at }}</td>
                            @auth
                                @if(auth()->user()->type == 'admin')
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('feedback.destroy',$feedback) }}">Delete</a>
                                        <a class="btn btn-primary" href="{{ route('feedback.update',$feedback) }}">Done</a>
                                    </td>
                                @endif
                            @endauth
	                    </tr>
                    @endforeach
                </tbody>

            </table>
    	</div>
    </div>
</div>

@endsection

@section('footer-script')
    <!-- <script type="text/javascript">
        $(document).ready( function ($) {
            $('*[data-href]').on('click', function(){
                window.location = $(this).data("href");
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
          // When the event DOMContentLoaded occurs, it is safe to access the DOM

        })
    </script> -->
@endsection