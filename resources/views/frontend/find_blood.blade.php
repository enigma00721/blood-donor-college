@extends('layout.app')

@section('css')
	{{-- DataTables LInk --}}
	<link href="{{ asset('backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
	<style type="text/css">
		.form-control-sm{
			background-color:#ddd !important;
		}
	</style>
@endsection

@section('content')
@include('partial.flash_messages')

	<!-- Blog Start -->
	<div class="container">
		<div class="row">
				<div class="col-sm-12">
						<br><h1 class="touch_text">Blood Donors list</h1>
				</div>

		</div>
	</div>
	<br>
	
	<table id="zero_config" class="table table-striped table-bordered">
		<thead>
		  <tr>
		  	<th>Action</th>
		    <th>Name</th>
		    <th>Contact</th>
		    <th>Address</th>
		    <th>Email</th>
			<th>Blood Group</th>
		  </tr>
		</thead>

		<tbody>
		  @foreach($rows as $row)
		  <tr>
		  	<td> 
		  		<a href="{{ route('donor.profile.view', $row->id) }}" class="btn btn-primary btn-sm">
                View
            </a>
            </td>
		    <td> {{$row->name}} </td>
		    <td> {{$row->phone}} </td>
		    <td> {{$row->address}} </td>
		    <td> {{$row->email}} </td>
			<td> {{$row->blood_group}} </td>
		  </tr>
		  @endforeach
		</tbody>
		<tfoot>
		  <tr>
		  	<th>Action</th>
		    <th>Name</th>
		    <th>Contact</th>
		    <th>Address</th>
		    <th>Email</th>
			<th>Blood Group</th>
		  </tr>
		</tfoot>

	</table>

  	<!--blog end -->

@endsection


@section('scripts')

{{-- Data Table js ---- Refactor to Table pages only--}}
<script src="{{ asset('backend/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('backend/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
<script src="{{ asset('backend/extra-libs/DataTables/datatables.min.js') }}"></script>
<script>
    /****************************************
        *       Basic Table                   *
        ****************************************/
    $('#zero_config').DataTable();
</script>

@endsection