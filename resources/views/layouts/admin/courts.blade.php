<div class="container-x" style="margin-top: 56px;">

	<div class="body-margin">
		<div class="container p-0" style="margin-top: 56px;">
	  		<div class="card">
		    	<div class="row card-header">
		    		<h2>Courts</h2>
		    		{{-- <a href="{{ route('case.create') }}" type="button" class="button" style="vertical-align:middle"><span>Add Court</span></a> --}}
		    	</div>
		    	<div class="card-body">
		    		<table id="datatable" class="table table-bordered">
				        <thead>
					        <tr>
					            <th>SL</th>
					            <th>Name</th>
					            <th>Location</th>
					            <th>Type</th>
					            <th>Created On</th>
					            <th>Updated On</th>
					        </tr>
				        </thead>

				        <tbody>
				          @foreach($courts as $key => $value)
				            <tr>
								<td lang="@if(App::isLocale('bn')){{ 'bang' }}@endif">{{ ++$key }}</td>
								<td>{{ $value->name }}</td>
								<td>{{ $value->location }}</td>
								<td>{{ $value->type }}</td>
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