@extends ('layouts.backend.master')

@section('pageTitle', 'Donor Profile | Update')


@section ('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Your Profile</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                        Donor Profile</li>
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
            
            <form method="POST" action="{{ route('backend.profile.update', $donor->id) }}" enctype="multipart/form-data">
                @method('PATCH')       
                {{ csrf_field() }}

                
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Donor Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $donor->name }}">

                            @if ($errors->has('name'))
                                <code>{{ $errors->first('name') }}</code>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" id="phone" name="phone" class="form-control" value="{{ $donor->phone }}">

                            @if ($errors->has('phone'))
                                <code>{{ $errors->first('phone') }}</code>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control" value="{{ $donor->address }}">

                            @if ($errors->has('address'))
                                <code>{{ $errors->first('address') }}</code>
                            @endif
                        </div>
                           <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{$donor->email}}">
                              @if ($errors->has('email'))
                                <code>{{ $errors->first('email') }}</code>
                            @endif
                        </div>   

                       <div class="form-group">
                        <label for="category">Blood Group</label>
                            <select class="select2 form-control custom-select" id="blood_group" name="blood_group" style="width: 100%; height:36px;">
                                    

                                @foreach ($blood_groups as $group)
                                    <option value="{{ $group->name }}" 
                                        {{$group->name==$donor->blood_group?'selected="selected"':""}} >
                                        {{ $group->name }}</option>
                                @endforeach

                            </select>
                        @if ($errors->has('blood_group'))
                            <code>{{ $errors->first('blood_group') }}</code>
                        @endif

                    </div>

                       

                        

                    </div>
                    
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success">Update Donor</button>
                        </div>
                    </div>
                </div>
            </form>
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
