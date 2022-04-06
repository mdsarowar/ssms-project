<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/helper.css">

    <style>
        .x{
            margin-top: 1px;
            margin-bottom: 1px;
            margin-left: 1px;
            margin-right:1px;

            padding-top: 1px;
            padding-bottom: 1px;
            padding-right: 1px;
            padding-left: 1px;

            font-size: 1px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>

        <ul class="navbar-nav ">
            <li class="nav-item"><a class="nav-link text-light" href="{{route('home')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="">Contact</a></li>
            @if(!Auth::check())

            <li class="nav-item"><a class="nav-link text-light" href="{{route('user-login')}}">Login</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="{{route('user-register')}}">Register</a></li>
            @else
            <li class="nav-item"><a class="nav-link text-light" href="{{route('register')}}">Logout</a></li>
            <li class="nav-item"><a class="nav-link text-light" onclick="event.preventDefault();document.getElementById('logoutform').submit();" href="">Logout</a></li>
            <form action="{{route('logout')}}" id="logoutform" method="post">
                @csrf
            </form>
            @endif
        </ul>
    </div>
</nav>
@yield('body')

<script src="{{asset('/')}}front/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}front/js/bootstrap.bundle.js"></script>

</body>
</html>
