@extends ('layouts.backend.master')

@section('pageTitle', 'Blood Bank | Edit Blood Group')


@section ('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Blood Group</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.bloodgroup.index') }}">Blood Group</a></li>                        
                        <li class="breadcrumb-item active" aria-current="page">Edit Blood Group</li>
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

            <!-- Add Post Form -->
            
            {!! Form::model($bloodgroup, [
                'method' => 'PUT',
                'route' => ['backend.bloodgroup.update', $bloodgroup->id],
                'id' => 'tag-form'
            ]) !!}         
                        
                
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">

                            {!! Form::label('Blood Group') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}

                            @if ($errors->has('name'))
                                <code>{{ $errors->first('name') }}</code>
                            @endif
                        </div> 

                    </div>
                    
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('backend.bloodgroup.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>

            {!! Form::close() !!}
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