@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 95px; border: solid lightgray 1px; background-color: white;">
    <div class="row justify-content-center">
        <div class="col-md-12" style="padding-bottom: 30px;">
        	<br>
        	<h3 style=""><b>Procedure To Apply</b></h3>
        	<hr>

        	<h4><b>Step 1:</b></h4>
        	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        	Open the Homepage and Click the "Register" button from Homepage</p>
        	<br>

        	<h4><b>Step 2:</b></h4>
        	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        	Enter your name, email address and other personal details and choose a valid and suitable password and then select the 'Client' option if you are looking for a lawyer and select 'Lawyer' if you are looking for clients. Then click 'Register' button. If you are applying a lawyer, then upload your NID picture to verify yourself as a legal lawyer</p>
        	<br>

        	<h4><b>Step 3:</b></h4>
        	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        	If you are successfully registered as a client, then find your desired lawyer from dashboard searching parameters or if you are a lawyer then update your profile attractively and wait for clients to communicate with you.</p>
        	<br>

        	<div class="row">
        		<a href="{{ route('register') }}" class="btn btn-primary" style="margin: 10px; padding: 10px; border-radius: 0; min-width: 100px; min-height: 40px;">
                    {{ __('Register') }}
                </a>
        		<a href="{{ route('welcome') }}" class="btn btn-primary" style="margin: 10px; padding: 10px; border-radius: 0; min-width: 100px; min-height: 40px;">
                    {{ __('Home') }}
                </a>
        	</div>

        </div>
    </div>
</div>
@endsection

@section('footer-script')

@endsection