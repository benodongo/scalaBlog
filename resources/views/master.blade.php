<html>
<head>
    <meta charset="utf-8">
    <title>SCALA BLOG</title>
    <link href="{{asset('/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <script src="{{asset('/bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-secondary ">
<ul class="navbar nav ">
    <li class="nav-item">
        <a class="nav-link text-white" href="{{url('/index')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="{{url('/index')}}">Shop</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="{{url('/index')}}">Checkout</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="{{url('/index')}}">Login</a>
    </li>
</ul>
</nav>
<div class="container-fluid">
   @yield('content')
</div>
</body>
</html>