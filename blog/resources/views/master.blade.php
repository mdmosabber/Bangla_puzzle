<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .home-wrapper {
            min-height: calc(100vh - 148px);
        }

        .card .user-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            box-shadow: 2px 1px 1px 2px rgba(81, 84, 98, 0.37);
            margin: 10px auto;
        }
        .user-name {
            text-transform: capitalize;
        }

        @yield('style')

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('/images/logo.png')}}" alt="LOGO" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                            @endif

                        @endauth
                    @endif
                </ul>

                <form action=" " method="GET">
                    <div class="d-flex">
                        <input type="search" name="search" placeholder="Search Here" class="form-control">
                        <input type="submit" value="Search">
                    </div>
                </form>

            </div>
        </div>
    </nav>
    <!--//Navbar End-->


    <div class="home-wrapper">
        @yield('home-body')
    </div>



    <footer>
        <p class="py-3 bg-dark text-center text-white">Copyright &copy; 2022 Mosabber | Powered by mosabber</p>
    </footer>


<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>

