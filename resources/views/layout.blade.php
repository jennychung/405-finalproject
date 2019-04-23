<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900|Playfair+Display:400,700,700i" rel="stylesheet">

</head>
<body style="background-color: #F5F5F5;" class="daybody">

<div style="margin-bottom: 30px;">
<nav class="nav">

  <li> <a class="nav-link" href="/quiz"> <i> Take a Quiz </i> </a> </li>
  <li> <a class="nav-link" href="/day"> My Day </a>  </li>

  <img src="{{ asset('/images/moongloss.svg') }}" height="48" style="display: block; margin-left: auto; margin-right: auto;">

  <li style="float:right"> <a class="nav-link" href="/explore">Explore</a>  </li>
  <li style="float:right"> <a class="nav-link"  href="/skin">Profile</a>  </li>
  <li style="float:right"> <a class="nav-link"  href="/login">Log In</a> </li>
</nav>
</div>


<div class="container-fluid">

@yield('main')
</div>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>

</html>
