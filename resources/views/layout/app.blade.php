<!DOCTYPE html>
<html lang="en">

<head>
	@include('partial.head')
    @yield('css')
</head>

<!-- body -->
<body>

    <!-- header start -->
	@include('partial.navbar')
    <!-- end header end -->


    @yield('content')

    @include('partial.footer')
    <!-- Javascript files-->
    @include('partial.script')

    @yield('scripts')
</body>
</html>
