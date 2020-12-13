@extends('layouts.app')

@section('content')

<div id="content" class="container" style="margin-top: 95px; border: solid lightgray 1px; background-color: white;">
    <div class="row justify-content-center p-2 m-1">
        <div class="col-md-12">
    		
            <div class="row">
                <div class="col-md-6">
                    <h1>@lang('notice.title')</h1>
                </div>
                <div class="col-md-6">
                    @auth
                        @if(auth()->user()->type == 'admin')
                            <a href="{{ route('notice.create') }}" class="btn btn-primary float-right m-3">@lang('notice.add')</a>
                        @endif
                    @endauth
                </div>
            </div>
            <hr>

			<table class="table table-bordered table-striped notice_table table-info">

                <thead>
	                <tr>
	                    <th>@lang('notice.heading')</th>
	                    <th style="width: 270px;" class="text-center">@lang('notice.date')</th>
                        @auth
                            @if(auth()->user()->type == 'admin')
                                <th style="width: 8%">@lang('notice.action')</th>
                            @endif
                        @endauth
	                </tr>
                </thead>

                <tbody>
                	@foreach($notices as $key => $notice)
	                    <tr>
	                        <td>
	                            <a class="reverse" href="{{ route('notice.show',$notice) }}">
                                    @if(App::isLocale('en'))
                                        {{ $notice->title }}
                                    @else
                                        {{ $notice->title_bn }}
                                    @endif
                                </a>
	                        </td>
	                        <td class="text-center">{{ $notice->created_at }}</td>
                            @auth
                                @if(auth()->user()->type == 'admin')
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('notice.edit',$notice) }}">Edit</a>
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