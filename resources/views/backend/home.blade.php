@extends('layouts.backend.master')

@section('pageTitle', 'Online Blood Banking Dashboard')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white">{{$count['donor']}}</h1>
                    <h6 class="text-white">Blood Donors</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white">{{$count['bloodgroup']}}</h1>
                    <h6 class="text-white">Blood Group</h6>
                </div>
            </div>
        </div>
            <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white">{{$count['feedback']}}</h1>
                    <h6 class="text-white">Feedbacks</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white">{{$count['user']}}</h1>
                    <h6 class="text-white">Users</h6>
                </div>
            </div>
        </div>
    </div>
        <!-- Column -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Latest Feedback</h4>
            </div>
            <div class="comment-widgets scrollable">

                @foreach($feedbacks as $row)
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="p-2"><img src="{{ asset('backend/images/users/1') }}.jpg" alt="user" width="50" class="rounded-circle"></div>
                    <div class="comment-text w-100">
                        <h6 class="font-medium">{{$row->name}}</h6>
                        <h6 class="font-medium">{{$row->email}}</h6>
                        <span class="m-b-15 d-block"> {{$row->feedback}} </span>
                        <div class="comment-footer">
                            <span class="text-muted float-right">{{$row->created_at}}</span> 
                        </div>
                    </div>
                </div>
                <!-- Comment Row -->
                @endforeach
                                                            
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
@endsection
<!-- ============================================================== -->
