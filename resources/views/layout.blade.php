<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <style>
    #yield-div{
    padding: 25px;
  
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-warning navbar-light">
    <a class="navbar-brand" href="/">
    <img src="http://cdn.onlinewebfonts.com/svg/img_431549.png" alt="Logo" style="width:40px;">
  </a>
        <ul class="navbar-nav nav justify-content-center">
            <li class="nav-item">
                <a href="/cheeses/index" class="nav-link">All Cheeses</a>
            </li>
            <li class="nav-item">
                <a href="/cheeses/countries" class="nav-link">By Country</a>
            </li>
            <li class="nav-item">
                <a href="/cheeses/types" class="nav-link">By Type</a>
            </li>
            <li class="nav-item">
                <a href="/cheeses/textures" class="nav-link">By Texture</a>
            </li>
            <li class="nav-item">
                <a href="/cheeses/colors" class="nav-link">By Color</a>
            </li>

            <li class="nav-item">
                <a href="/dishes/index" class="nav-link">All Dishes</a>
            </li>
            @if (Auth::check())
            <li class="nav-item">
                <a href="/logout" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
                <a href="/users" class="nav-link">Users</a>
            </li>
            @else
            <li class="nav-item">
                <a href="/signup" class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item">
                <a href="/login" class="nav-link">Login</a>
            </li>
            @endif
        </ul>


    </nav>
    <br>
    <div id='yield-div'>
    @yield('main')
    </div>
</body>

</html>
