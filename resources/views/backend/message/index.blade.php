@extends('layouts.backend.master')

@section('pageTitle', 'Your Messages')

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
   
        <!-- Column -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Your Latest Messages</h4>
            </div>
            <div class="comment-widgets scrollable">
                @if(count($feedbacks)>0)
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
                <div class="d-fex flex-row comment-row">
                    {{ $feedbacks->links() }}
                </div>
                @else

                <div class="comment-text">
                    <h6>No Messages</h6>
                </div>

                @endif
                                                            
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
