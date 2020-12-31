        <aside class="left-sidebar" style="background-color: #fff">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                       

                        @if(Auth::user()->is_admin  == 1)

                             <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('home') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-note-text"></i><span class="hide-menu">Blood Donor </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="{{ route('backend.donor.index') }}" class="sidebar-link"><i class="mdi mdi-note-multiple"></i><span class="hide-menu"> All Blood Donors </span></a></li>
                                    <li class="sidebar-item"><a href="{{ route('backend.donor.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add New Donor </span></a></li>
                                </ul>
                            </li>
                           
                            <li class="sidebar-item"><a href="{{ route('backend.feedback.index') }}" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Feedback </span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-folder"></i><span class="hide-menu">Blood Group </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="{{ route('backend.bloodgroup.index') }}" class="sidebar-link"><i class="mdi mdi-folder-multiple"></i><span class="hide-menu"> All Blood Group </span></a></li>
                                    <li class="sidebar-item"><a href="{{ route('backend.bloodgroup.create') }}" class="sidebar-link"><i class="mdi mdi-folder-plus"></i><span class="hide-menu"> Add New Blood Group </span></a></li>
                                </ul>
                            </li>                        

                            <li class="sidebar-item"><a href="{{ route('backend.users.index') }}" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> User </span></a></li>

                        @else
                            <li class="sidebar-item">
                                <a href="{{ route('backend.profile') }}" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Profile </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('backend.messages') }}" class="sidebar-link"><i class="mdi mdi-folder"></i><span class="hide-menu"> Messages </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('logout') }}" 
                                class="sidebar-link"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                >
                                    <i class="mdi mdi-account-key"></i><span class="hide-menu"> Logout </span></a>
                            </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        @endif
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        {{-- mdi mdi-note-outline --}}
        {{-- mdi mdi-note-plus --}}