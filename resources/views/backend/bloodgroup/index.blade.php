@extends('layouts.backend.master')

@section('css')
{{-- DataTables LInk --}}
<link href="{{ asset('backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection
@section('pageTitle', 'Blood Bank | All Blood Group')


@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">All BloodGroup | {{ $bloodgroupCount }} </h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">BloodGroup</li>
                        <li class="breadcrumb-item active" aria-current="page">All BloodGroup</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-body">

                    @if ( session('message') )
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <a href="{{ route('backend.bloodgroup.create') }}" class="btn btn-success" style="margin-bottom: 1rem;">Add New Blood Group</a>


                    @if ( ! $bloodgroupCount )
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading">Notification</h4>
                                    <p>No records found!</p>
                                </div>
                            </div>
                        </div>
                    @else       
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Blood Group</th>
                                        <th>S. No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bloodgroups as $key=>$bloodgroup)
                                    <tr>
                                        <td>

                                            <a href="{{ route('backend.bloodgroup.edit', $bloodgroup->id) }}" class="btn btn-primary btn-sm">
                                                Edit
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm text-white" data-toggle="modal" data-target="#Modal{{ $bloodgroup->id }}">
                                                Delete
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modal{{ $bloodgroup->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are You Sure You Want To Delete?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form method="POST" action="{{ route('backend.bloodgroup.destroy', $bloodgroup->id) }}">
                                                                @method('DELETE')       

                                                                @csrf
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-danger">Delete BloodGroup</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal -->   

                                                                                    
                                        </td>
                                        <td> {{ $bloodgroup->name }}</td>
                                        <td>{{ $key+1 }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Action</th>
                                        <th>Blood Group</th>
                                        <th>S. No.</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    @endif    
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
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