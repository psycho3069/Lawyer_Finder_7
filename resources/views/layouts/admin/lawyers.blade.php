@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @if(auth()->user()->type == 'admin')
        @include('layouts.admin.menu')
    @else
        @include('layouts.user.menu')
    @endif

    <div class="body-margin">
        <div class="container p-0 justify-content-center row" style="margin-top: 56px;">

            <div class="col-md-12">
                <div class="row">
                <h1>@lang('lawyer.title')</h1>
            </div>
            <hr>

            <table class="table p-0 m-0 text-sm-center table-bordered table-striped table-info table-responsive" style="font-size: 12px;">

                <thead>
                    <tr>
                        <th>@lang('lawyer.name')</th>
                        <th>@lang('lawyer.email')</th>
                        <th>@lang('lawyer.contact')</th>
                        <th>@lang('lawyer.district')</th>
                        <th>@lang('lawyer.location')</th>
                        <th>@lang('lawyer.gender')</th>
                        <th>@lang('lawyer.birthdate')</th>
                        <th>@lang('lawyer.bio')</th>
                        <th>@lang('lawyer.type')</th>
                        <th>@lang('lawyer.specialty')</th>
                        <th>@lang('lawyer.rating')</th>
                        <th>@lang('lawyer.review')</th>
                        <th>@lang('lawyer.case')</th>
                        <th>@lang('lawyer.success')</th>
                        @auth
                            @if(auth()->user()->type == 'admin')
                                <th>Action</th>
                            @endif
                        @endauth
                    </tr>
                </thead>

                <tbody>
                    @foreach($lawyers as $key => $lawyer)

                        <tr>
                            <td class="text-center">{{ $lawyer->user->name }}</td>
                            <td class="text-center">{{ $lawyer->user->email }}</td>
                            <td class="text-center">{{ $lawyer->user->contact }}</td>
                            <td class="text-center">{{ $lawyer->user->district->name }}</td>
                            <td class="text-center">{{ $lawyer->user->location }}</td>
                            <td class="text-center">{{ $lawyer->user->gender }}</td>
                            <td class="text-center">{{ $lawyer->user->birthdate }}</td>
                            <td class="text-break" style="width: 20ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: inline-block;">{{ $lawyer->profile_bio }}</td>
                            <td class="text-center">{{ $lawyer->type }}</td>
                            <td class="text-center">{{ $lawyer->specialty->name }}</td>
                            <td class="text-center">{{ $lawyer->ratings }}</td>
                            <td class="text-center">{{ $lawyer->reviews }}</td>
                            <td class="text-center">{{ $lawyer->cases }}</td>
                            <td class="text-center">{{ $lawyer->success_rate }}</td>
                            <td style="min-width: 140px;">
                                <a class="btn btn-primary btn-sm" href="{{ route('lawyer.show',$lawyer) }}">View</a>
                                @if($lawyer->admin_approval == 1)
                                    <a class="btn btn-primary btn-sm" href="{{ route('lawyer-verification',$lawyer) }}">Verify</a>
                                @elseif($lawyer->admin_approval == 2)
                                    <button style="cursor: no-drop;" class="btn btn-success" disabled>Verified</button>
                                @elseif($lawyer->admin_approval == 3)
                                    <button style="cursor: no-drop;" class="btn btn-warning" disabled>Declined</button>
                                @endif
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