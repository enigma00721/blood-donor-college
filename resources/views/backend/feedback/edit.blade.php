@extends ('layouts.backend.master')

@section('pageTitle', 'SagarPradhan | Edit Category')


@section ('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Category</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.categories.index') }}">Categories</a></li>                        
                        <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
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
                'method' => 'PUT',
                'route' => ['backend.categories.update', $category->id],
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
                            <button type="submit" class="btn btn-success">Update</button>
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