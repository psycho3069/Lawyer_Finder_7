@extends('layouts.app')

@section('style')
    @include('layouts.style')
@endsection

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @include('layouts.admin.menu')

	<div class="body-margin">
		<div class="container p-0" style="margin-top: 56px;">
			<div class="card">
		    	<div class="row card-header">
		    		<h2>Cases</h2>
		    	</div>
		    	<div class="card-body">
		    		{{-- <h2>{{ $casefiles }}</h2> --}}
		    		<table id="datatable" class="table table-bordered" >
				        <thead>
					        <tr>
					            <th>SL</th>
					            <th>Case ID</th>
					            <th>Description</th>
					            <th>Case Type</th>
					            <th>Client Type</th>
					            <th>Issuer Client</th>
					            <th>Assigned Lawyer</th>
					            <th>Court</th>
					            <th>Result</th>
					            <th>Created On</th>
					            <th>Updated On</th>
					        </tr>
				        </thead>

				        <tbody>
						@foreach($casefiles as $key => $value)
							<tr>
								<td>{{ ++$key }}</td>
								<td>{{ $value->case_identity }}</td>
								<td>{{ $value->description }}</td>
								<td>{{ $value->type }}</td>
								<td>{{ $value->client_type }}</td>
								<td>{{ $value->client_id }}</td>
								<td>{{ $value->lawyer_id }}</td>
								<td>{{ $value->court_id }}</td>
								<td>{{ $value->result	 }}</td>
								<td>{{ $value->created_at }}</td>
								<td>{{ $value->updated_at }}</td>
							</tr>
				        @endforeach
				        </tbody>
		            </table>
		    	</div>
		    </div>
		</div>
	</div>
</div>

    
@endsection

@section('footer-script')

@endsection
