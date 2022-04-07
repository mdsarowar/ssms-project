<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span>Dashboards</span>
                    </a>
                </li>
                @if(Auth::check()&& Auth::user()->role=='admin')
                    <li class="menu-title">Admin Module</li>


                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span>User Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('create_user')}}">Create user</a></li>
                            <li><a href="{{route('manage_user')}}">Manage user</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span>Role</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('create_role')}}">Create Role</a></li>
                            <li><a href="{{route('manage_role')}}">Manage Role</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('manage_enroll')}}" class="waves-effect">
                            <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                            <span>Manage Enroll</span>
                        </a>
                    </li>


                @endif

                @if(Auth::check() && (Auth::user()->role=='admin'|| Auth::user()->role=='teacher'))
                <li class="menu-title">teacher module</li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Teacher info</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if(Auth::user()->role=='teacher')
                        <li><a href="{{route('create_teacher')}}">Create Teacher</a></li>
                        @endif
                            @if(Auth::user()->role=='admin')
                        <li><a href="{{route('manage_teacher')}}">Manage Teacher</a></li>
                            @endif
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Subject Info</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if(Auth::user()->role=='teacher')
                        <li><a href="{{route('create_subject')}}">add Subject</a></li>
                        @endif
                        <li><a href="{{route('manage_subject')}}">Manage Subject</a></li>
                    </ul>
                </li>

                @endif

                @if(Auth::check() && (Auth::user()->role=='admin'||Auth::user()->role=='user'))
                <li class="menu-title">Student module</li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Student Info</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if(Auth::user()->role=='user')
                        <li><a href="{{route('create_student_info')}}">add Student</a></li>
                        @endif
                        @if(Auth::user()->role=='admin')
                        <li><a href="{{route('manage_student_info')}}">Manage Student</a></li>
                            @endif
                    </ul>
                </li>
                    @endif

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
