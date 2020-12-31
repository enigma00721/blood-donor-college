@extends ('layouts.backend.master')

@section('pageTitle', 'Admin Info | Update ')


@section ('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Admin Profile</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Profile </li>
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

              @if ( session('message') )
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

            <!-- Add Post Form -->
            
            {!! Form::model($user, [
                'method' => 'PUT',
                'route' => ['backend.users.update', $user->id],
                'id' => 'user-form'
            ]) !!}         
                        
                
                <div class="card">
                    <div class="card-body">

                        <div class="form-group col-md-4">

                            {!! Form::label('Name') !!}
                            {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}

                            @if ($errors->has('name'))
                                <code>{{ $errors->first('name') }}</code>
                            @endif
                        </div> 

                        <div class="form-group col-md-4">

                            {!! Form::label('Email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}

                            @if ($errors->has('email'))
                                <code>{{ $errors->first('email') }}</code>
                            @endif
                        </div> 

                        <div class="form-group col-md-4">

                            {!! Form::label('Password') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}

                            @if ($errors->has('password'))
                                <code>{{ $errors->first('password') }}</code>
                            @endif
                        </div> 
                        
                        <div class="form-group col-md-4">

                            {!! Form::label('Confirm Password') !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

                            @if ($errors->has('password_confirmation'))
                                <code>{{ $errors->first('password_confirmation') }}</code>
                            @endif
                        </div>                         

                    </div>

                    <div class="border-top">
                        {{-- <div class="card-body">
                            <div class="form-group">

                                {!! Form::label('About Page Title') !!}
                                {!! Form::text('about_title', null, ['class' => 'form-control tinymce']) !!}

                                @if ($errors->has('about_title'))
                                    <code>{{ $errors->first('about_title') }}</code>
                                @endif
                            </div>                             
                        </div> --}}
                 
                    
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('backend.users.index') }}" class="btn btn-secondary">Cancel</a>
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

@section('scripts')

    <script src="{{ asset('backend/libs/tinymce/tinymce.min.js') }}"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: '.tinymce',
        });
        tinymce.activeEditor.setContent('<span>some</span> html');
    </script>

@endsection