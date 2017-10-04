<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">

    <title>HOME // Designa Studio</title>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    @include('links.style')
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">

    <header id="navtop">
        <a href="index.html" class="logo fleft">
            <div>
                <h1> Tsaryukoff</h1>
            </div>
            <!--			<img src="img/logo.png" alt="Designa Studio">-->
        </a>

        <nav class="fright">
            <ul>
                <li><a {{--class="navactive"--}} href="{{ url('/') }}" >Home</a></li>
                <li><a {{--class="navactive"--}} href="{{ url('/about') }}">About</a></li>
            </ul>
            <ul>
                <li><a href="{{ url('/works') }}">Works</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
            </ul>
            <ul>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')


</div>
@include('links.js')
</body>
</html>