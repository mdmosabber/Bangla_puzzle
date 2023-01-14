<aside>
    <div class="nav-collapse" id="sidebar">
        <div class="leftside-navigation">
            <ul class="sidebar-menu">
                <li class="{{ Route::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{url('admin/dashboard')}}">
                        <img src="{{asset('assets/icon/monitor.svg')}}" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="{{Route::is('all-users') ? 'active' : ''}}">
                    <a href="{{route('all-users')}}">
                        <img src="{{asset('assets/icon/user.svg')}}" alt="">
                        <span>User</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</aside>
<!--// Aside End-->
