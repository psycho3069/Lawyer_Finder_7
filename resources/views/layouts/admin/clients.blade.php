@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @include('layouts.admin.menu')

    <div class="body-margin">
        <div class="container p-0 justify-content-center row" style="margin-top: 56px;">


            <div class="col-md-12">
                <div class="row">
                <h1>@lang('client.all')</h1>
            </div>
            <hr>
            @if (session('status'))
                <div id="success-status" class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table p-0 m-0 text-sm-center table-bordered table-striped table-info table-responsive" style="font-size: 12px;">

                <thead>
                    <tr>
                        <th>@lang('client.name')</th>
                        <th>@lang('client.email')</th>
                        <th>@lang('client.contact')</th>
                        <th>@lang('client.district')</th>
                        <th>@lang('client.location')</th>
                        <th>@lang('client.gender')</th>
                        <th>@lang('client.birthdate')</th>
                        <th>@lang('client.case')</th>
                        @auth
                            @if(auth()->user()->type == 'admin')
                                <th>@lang('client.action')</th>
                            @endif
                        @endauth
                    </tr>
                </thead>

                <tbody>
                    @foreach($clients as $key => $client)

                        <tr>
                            <td class="text-center">{{ $client->user->name }}</td>
                            <td class="text-center">{{ $client->user->email }}</td>
                            <td class="text-center">{{ $client->user->contact }}</td>
                            <td class="text-center">{{ $client->user->district->name }}</td>
                            <td class="text-center">{{ $client->user->location }}</td>
                            <td class="text-center">{{ $client->user->gender }}</td>
                            <td class="text-center">{{ $client->user->birthdate }}</td>
                            <td class="text-center">{{ $client->cases }}</td>
                            <td style="min-width: 140px;">
                                <a class="btn btn-primary btn-sm" href="{{ route('client-block',$client) }}">@lang('client.delete')</a>
                            </td>
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