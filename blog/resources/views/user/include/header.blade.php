<header class="header fixed-top">
    <div class="brand">
        <a href="{{url('/admin/dashboard')}}" class="logo logo-full">
            <img src="{{asset('/images/logo.png')}}" alt="LOGO">
        </a>
    </div>

    <div class="hamburger">
        <img class="menu-bar" src="{{asset('assets/icon/menu.svg')}}" alt="">
        <img class="arrow-right" src="{{asset('assets/icon/arrow-right.svg')}}" alt="">
    </div>

    <div class="top-nav navbar">
        <ul class="nav top-menu">
            <!-- user login dropdown start-->
            <li class="dropdown head_info_user">
                <a data-bs-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img class="head-user-icon-lg" src="{{Auth::user()->profile_photo_url}}" width="32px" height="32px">
                    <span class="username"> {{Auth::user()->name}} </span>
                    <img src="{{asset('assets/icon/chevron-down.svg')}}" alt="" class="dropdown-icon">
                </a>
                <ul class="dropdown-menu logout">
                    <li>
                        <a href="{{url('user/profile')}}">Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('adminLogout').submit();">Log Out</a>
                        <form id="adminLogout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
    </div>
</header>
<!--// Header End-->
