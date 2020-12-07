@extends('layouts.app')

@section('content')
<div class="container-x" style="margin-top: 50px;">

	@if(auth()->user()->type == 'admin')
        @include('layouts.admin.menu')
    @else
        @include('layouts.user.menu')
    @endif
    

    <div class="body-margin">
    	<div class="container p-0" style="margin-top: 50px;">
      		HOME
      	</div>
    </div>

</div>
@endsection

@section('footer-script')

@endsection
