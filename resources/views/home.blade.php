@extends('layouts.app')

@section('body-tag')
    {{-- style="background-color:black" --}}
@endsection

{{-- @section('div-navbar-tag')
    style="background-color:black"
@endsection --}}

@section('content')
<div class="container-x" style="margin-top: 50px;">

	@if(auth()->user()->type == 'admin')
        @include('layouts.admin.menu')
    @else
        @include('layouts.user.menu')
    @endif
    

    <div class="body-margin">
    	<div class="container p-0" style="margin-top: 56px;">
      		HOME
      	</div>
    </div>

</div>
@endsection

@section('footer-script')

@endsection
