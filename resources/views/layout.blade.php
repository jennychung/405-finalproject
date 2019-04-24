<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900|Playfair+Display:400,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body style="background-color: #F5F5F5;" class="daybody">

<div style="margin-bottom: 30px;">
<nav id="animateNav" class="nav" >

  <li> <a class="nav-link" href="/quiz"> <i> Take a Quiz </i> </a> </li>
  <li> <a class="nav-link" href="/day"> My Day </a>  </li>
    <li> <a class="nav-link" href="/day" style="color:transparent;"> Enter </a>  </li>

  <a href="/day"  class="logo" style="display: block; margin-left: auto; margin-right: auto;">
    <img src="{{ asset('/images/moongloss.svg') }}" height="36"></a>

  <li style="float:right"> <a class="nav-link" href="/explore">Explore</a>  </li>
  <li style="float:right"> <a class="nav-link"  href="/skin">Profile</a>  </li>
  <li style="float:right"> <a class="nav-link"  href="/login">Log In</a> </li>

  <a href="javascript:void(0);" class="icon" onclick="navigation()">
    <i class="fa fa-bars"></i> </a>
</nav>
</div>


<div class="container-fluid">

@yield('main')
</div>
<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('js/script.js') }}"></script>

</body>

</html>
