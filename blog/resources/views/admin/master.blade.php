<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/fav.ico')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>

@include('admin.include.header');

@include('admin.include.sidebar');

<section class="dashboard-section" id="main_content">
    <div class="wrapper relative">

        @yield('admin-body')

    </div>
</section>





<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js//custom.js')}}"></script>
</body>

</html>
