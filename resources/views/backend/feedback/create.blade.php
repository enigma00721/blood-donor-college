@extends ('layouts.backend.master')

@section('css')

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/libs/select2/dist/css/select2.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">


@endsection

@section ('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Add New Category</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Category</li>
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
            

                {!! Form::model($category, [
                    'method' => 'POST',
                    'route' => 'backend.categories.store',
                    'id' => 'category-form'
                ]) !!}         
                        
                
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">

                            {!! Form::label('Category Title') !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}

                            @if ($errors->has('title'))
                                <code>{{ $errors->first('title') }}</code>
                            @endif
                        </div> 

                    </div>
                    
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success">{{ $category->exists ? 'Update' : 'Create' }}</button>
                            <a href="{{ route('backend.categories.index') }}" class="btn btn-secondary">Cancel</a>
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

@include('backend.blog.formScripts')