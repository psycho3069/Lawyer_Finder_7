@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 95px; border: solid lightgray 1px; background-color: white;">
    <div class="row justify-content-left p-2 m-1">
        <div class="col-md-12">
    		
            <div class="row">
                <h1>@lang('lawyer.title')</h1>
            </div>
            <hr>

			<table class="table table-bordered table-striped table-info">

                <thead>
	                <tr>
	                    <th>@lang('lawyer.subject')</th>
                        <th>@lang('lawyer.name')</th>
                        <th>@lang('lawyer.email')</th>
                        <th>@lang('lawyer.contact')</th>
	                    <th style="width: 270px;" class="text-center">@lang('lawyer.date')</th>
                        @auth
                            @if(auth()->user()->type == 'admin')
                                <th style="width: 15%">Action</th>
                            @endif
                        @endauth
	                </tr>
                </thead>

                <tbody>
                	@foreach($lawyers as $key => $lawyer)
	                    <tr>
	                        <td>
	                            <a href="{{ route('lawyer.show',$lawyer) }}">{{ $lawyer->subject }}</a>
	                        </td>
                            <td class="text-center">{{ $lawyer->name }}</td>
                            <td class="text-center">{{ $lawyer->email }}</td>
                            <td class="text-center">{{ $lawyer->contact }}</td>
	                        <td class="text-center">{{ $lawyer->created_at }}</td>
                            @auth
                                @if(auth()->user()->type == 'admin')
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('lawyer.destroy',$lawyer) }}">Delete</a>
                                        <a class="btn btn-primary" href="{{ route('lawyer.update',$lawyer) }}">Done</a>
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

@endsection