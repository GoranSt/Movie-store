<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">--}}
    <link type="text/css" rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    {{--<link type="text/css" rel="stylesheet" href="{{ asset('Bootstrap/fonts/glyphicons-halflings-regular.svg') }}">--}}


    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.icon-large.min.css') }}">
<style rel="stylesheet" type="text/css">

    .navbar-custom {
        color: #FFFFFF;
        background-color: #FFFFFF;
    }

    .wellcust {

        background-color: silver;
    }




</style>


</head>
<body>
<div class="wrapper">




<nav class="navbar navbar-custom" style="height: 110%">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <a class="navbar-brand" href="{{ url('/') }}">Andigo Movies</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/movies') }}">Movies</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">


            <li><form class="navbar-form" role="search" action="http://localhost:8888/search/" >
                    <div class="input-group">
                        <input name="search" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" class="form-control" placeholder="Search movie" name="q">
                        <div class="input-group-btn">
                            <button type="submit"  class="btn btn-default" value=" "><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                </form>

            </li>


            @if(Auth::check())
                <li><a href="{{ url('/cart') }}"> | <img src="{{ asset('images/Shopping-Cart-icon.png') }}" width="30px"; height="25px;"> | </a></li>
                <li><a href="{{ url('order') }}"><span class="glyphicon glyphicon-user"></span> Orders</a></li>
                <li><a href="{{ url('logout') }}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

            @endif
            @if(!Auth::check())
                <li><a href="{{ url('auth/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{{ url('/auth/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

            @endif




        </ul>
            </div>
    </div>
</nav>



<div class="container" style="padding-bottom: 40px;">


    {{--</div>--}}
    {{--<div class="container">--}}
    @yield('mesto')




</div>

<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-text pull-left">

            <p><ul class="list-unstyled list-inline">
                <li><a href="{{ url('/') }}"><span style="color: white"><span class="glyphicon glyphicon-home"></span>&nbsp; Home</span></a></li>
                <li><a href="{{ url('/movies') }}"><span style="color: white"><span class="glyphicon glyphicon-film"></span>&nbsp; Movies</span></a></li>
                <li><a href="{{ url('/about') }}"><span style="color: white"><span class="glyphicon glyphicon-info-sign"></span> &nbsp;About</span></a></li>
                <li><a href="{{ url('/contact') }}"><span style="color: white"><span class="glyphicon glyphicon-comment"></span>&nbsp; Contact</span></a></li>


            </ul></p>
        </div>
        <div class="navbar-text pull-right" style="padding-top: 5px;">

            <p>Finki, Copyright 2016 &copy;</p>
        </div>
    </div>

</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('Bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Bootstrap/js/npm.js') }}"></script>
</body>
</html>