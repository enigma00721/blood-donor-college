<div class="header_main">
	<div class="container">
		<div class="logo"><a href="{{route('front')}}">
            <img src="{{asset('images/loogo.png')}}"></a>
        </div>
	</div>
</div>
<div class="header">
	<div class="container">
    <!--  header inner -->
        <div class="col-sm-12">

             <div class="menu-area">
                <nav class="navbar navbar-expand-lg ">
                    <!-- <a class="navbar-brand" href="#">Menu</a> -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('front')}}">HOME
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('help')}}">HELP</a>
                            </li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('donor.register')}}">DONOR REGISTER</a>
                            </li>
							<li class="#" href="#">
								<a class="nav-link" href="{{route('find.blood')}}">FIND BLOOD</a>
                            </li>
							<li class="nav-item" href="#">
                                <a class="nav-link" href="{{route('whyus')}}">WHY US</a>
                            </li>


                            @auth
                                <li class="nav-item" href="#">
                                    <a class="nav-link" href="{{route('home')}}">Dashboard</a>
                                </li>
                                <li class="nav-item" href="#">
                                    <a class="nav-link" href="{{route('logout')}}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">LOGOUT</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            @else
                                <li class="nav-item" href="#">
                                    <a class="nav-link" href="{{route('login')}}">LOGIN</a>
                                </li>
                            @endauth

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>