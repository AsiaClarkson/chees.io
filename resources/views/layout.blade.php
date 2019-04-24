<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <style>
  body{
      background-image: url("../img/memphis-mini.png");
  }
  .nav{
      text-align: center;
  }
  </style>
</head>
<body>
  <div class="container-fluid">
    <ul class="nav">
      <!-- @if (Auth::check()) -->
     <!-- @else -->
     <li class="nav-item">
          <a href="/" class="nav-link">Home</a>
        </li>
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
          <a href="/dishes" class="nav-link">All Dishes</a>
        </li>
      <!-- @endif -->
    </ul> 

    @yield('main')
  </div>
</body>
</html>