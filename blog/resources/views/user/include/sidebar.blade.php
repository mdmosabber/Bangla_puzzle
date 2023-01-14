<aside>
    <div class="nav-collapse" id="sidebar">
        <div class="leftside-navigation">
            <ul class="sidebar-menu">

                <li class="{{Request::is('admin/dashboard') ? 'active' : ''}}">
                    <a href="{{url('admin/dashboard')}}">
                        <img src="{{asset('assets/icon/monitor.svg')}}" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="{{Route::is('user.post-box') ? 'active' : ''}}">
                    <a href="{{route('user.post-box')}}">
                        <img src="{{asset('assets/icon/plus-square.svg')}}" alt="">
                        <span>Blog Post</span>
                    </a>
                </li>

                <li class="{{Route::is('user.post-box.show') ? 'active' : ''}}">
                    <a href="{{route('user.post-box.show')}}">
                        <img src="{{asset('assets/icon/plus-square.svg')}}" alt="">
                        <span>Blog Post Show</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</aside>
<!--// Aside End-->

