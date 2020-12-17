@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @include('layouts.admin.menu')

    <div class="body-margin">
        <div class="container p-0 row mb-5" style="margin-top: 56px;">
            @if(Session::has('approve'))
                <div style="min-height: 30px;" class="alert-success alert-dismissible text-md-center">
                    {{ Session::get('approve') }}
                </div>
            @elseif(Session::has('decline'))
                <div style="min-height: 30px;" class="alert-success alert-dismissible text-md-center">
                    {{ Session::get('decline') }}
                </div>
            @endif

            <div class="col-md-12">
                <div class="text-md-center ">
                    <h1>@lang('verify.title')</h1>
                    @if($lawyer->admin_approval == 1)
                        <a href="{{ route('lawyer-verify-decide',['approve' => 2, 'lawyer_id' => $lawyer->id ]) }}" class="btn button">Approve</a>
                        <a href="{{ route('lawyer-verify-decide',['approve' => 3, 'lawyer_id' => $lawyer->id ]) }}" class="btn btn-outline-primary border-radius-0">Decline</a>
                    @elseif($lawyer->admin_approval == 2)
                        <button style="cursor: no-drop;" class="btn btn-success" disabled>Approved</button>
                    @elseif($lawyer->admin_approval == 3)
                        <button style="cursor: no-drop;" class="btn btn-danger" disabled>Declined</button>
                    @endif
                        
                    <hr>
                    <h3>NID Pictures of {{ $lawyer->user->name }}</h3>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 p-2" style="border: solid maroon 1px;">
                        <div class="text-md-center">
                            <img id="nid_front_container" alt="Image Preview" src="{{ URL::asset('/storage/nid/'.$lawyer->nid_front) }}" style="width:60%; height:auto; border-radius:0%;">
                        </div>
                    </div>

                    <div class="col-md-6 p-2" style="border: solid maroon 1px;">
                        <div class="text-md-center">
                            <img id="nid_back_container" alt="Image Preview" src="{{ URL::asset('/storage/nid/'.$lawyer->nid_back) }}" style="width:60%; height:auto; border-radius:0%;">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('footer-script')

@endsection