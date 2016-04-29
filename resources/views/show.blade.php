
<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">--}}
    <link type="text/css" rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('Bootstrap/fonts/glyphicons-halflings-regular.svg') }}">


</head>


<body>



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





<div class="container well">

    <div class="row" style="margin-bottom: 50px;">

        <div class="col-md-1 col-md-offset-4" style="margin-left: 450px;">
            <h2><div class="header label label-primary">{{ $info->Title }}</div></h2>
        </div>
        <div class="col-md-2"> </div>
    </div>
    <div class="row" style="margin-bottom: 20px;">

        <div class="col-md-2">
            <div class="col-md-offset-4">
                <div class="col-md-12"><img class="thumbnail" src="{{ asset($movie->img) }}"height="300" width="200">

                </div>
            </div>
        </div>
        <div class="col-md-10">

            <div class="col-md-offset-2">






                <div class="form-group">
                    {{--<div class="label label-default">Director:</div> <div class="label label-info">{{ $movie->director}}</div>--}}
                    <div class="list-inline"> <li><div class="label label-default">Director:&nbsp;&nbsp;&nbsp;</div> </li> <li><div class="text-danger"><b>{{ $linked->results->bindings[0]->director->value}}</b></div></li></div>

                </div>
                <div class="form-group">
                    <div class="list-inline"> <li><div class="label label-default">Release:&nbsp;&nbsp;&nbsp;</div> </li> <li><div class="text-danger"><b>{{ $linked->results->bindings[0]->release->value}}</b></div></li></div>
                </div>
                <div class="form-group">
                    <div class="list-inline"> <li><div class="label label-default">Actors:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> </li> <li><div class="text-danger"><b>{{ $linked2->results->bindings[0]->actor->value }}, {{$linked2->results->bindings[1]->actor->value }}, {{$linked2->results->bindings[2]->actor->value }}   </b></div></li></div>
                </div>

                {{--<div class="form-group">   <div class="label label-default">Actors: </div> <div class="label label-info">{{ $movie->lang}}</div></div>--}}
                <div class="form-group">
                    <div class="list-inline"> <li><div class="label label-default">Language:</div> </li> <li><div class="text-danger"><b>{{ $info->Language}}</b></div></li></div>
                </div>
                <div class="form-group">
                    <div class="list-inline"> <li><div class="label label-default">Genre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> </li> <li><div class="text-danger"><b>{{ $linked->results->bindings[0]->genre->value}}</b></div></li></div>
                </div>
                <div class="form-group">
                    <div class="list-inline"> <li><div class="label label-default">Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> </li> <li><div class="text-danger"><b>{{ $linked->results->bindings[0]->time->value}}</b></div></li></div>
                </div>

                <div class="form-group">
                    <div class="list-inline"> <li><div class="label label-default">Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> </li> <li><div class="text-danger"><b>{{ $movie->price}}</b></div></li></div>
                </div>
                <div class="form-group">
                    <div class="list-inline"> <li><div class="label label-default">Rating:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> </li> <li><div class="text-danger"><b>
                                    <?php
                                    for($x=1;$x<=$movie->rating;$x++) {

                                    ?>
                                    <img src="{{ asset('images/Star-Full.png') }}" width="12px;" height="12px;">
                                    <?php
                                    }
                                    if (strpos($movie->rating,'.')) {
                                    ?>

                                    <img src="{{ asset('images/Star-Half-Full.png') }}" width="12px;" height="12px;">
                                    <?php
                                    $x++;
                                    }

                                    ?>
                                    ({{ $movie->rating}})
                                </b></div></li></div>
                </div>

                <a href="/addProduct/{{$movie->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>

            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-offset-1" style="margin-right: 100px; margin-left: 83px;">
            <div class="panel"><div class="panel-heading"> <div class="label label-default"> Description:</div></div> <div class="panel-body"> <div>{{ $info->Plot}}</div></div></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1" style="margin-right: 100px; margin-left: 83px;">
            <div class="panel"><div class="panel-heading"> <div class="label label-default"> Awards:</div></div> <div class="panel-body"> <div>{{ $info->Awards}}</div></div></div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-offset-1">
            {{--<a href="http://localhost:8888/movies/{{$movie->id}}/edit" class="btn btn-success btn-lg" style="width: 2cm;">Edit</a>--}}
            {{--<a href="http://localhost:8888/movies/{{$movie->id}}/delete" class="btn btn-danger btn-lg">Delete</a>--}}
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="row" style="margin-left: 55px;">
            <div class="text-success"> <h2>Related Products</h2> </div>

            @foreach($related as $p)
                @if( $p->id != $movie->id)

                    <div class="col-md-4">


                        <article>
                            <hr>
                            <a href="{{action('moviesController@show',[$p->id])}}"> <h3>{{ $p->name }}</h3></a>


                            <div class="form-group"></div>  <div class="text-success"><b>PRICE:</b>  {{ $p->price}}</div>
                            <div class="text-success"><b>RATING:</b></div>
                            <?php
                            for($x=1;$x<=$p->rating;$x++) {

                            ?>
                            <img src="{{ asset('images/Star-Full.png') }}" width="12px;" height="12px;">
                            <?php
                            }
                            if (strpos($p->rating,'.')) {
                            ?>

                            <img src="{{ asset('images/Star-Half-Full.png') }}" width="12px;" height="12px;">
                            <?php
                            $x++;
                            }

                            ?>
                            ({{ $p->rating}})





                        </article>
                    </div>
                @endif
            @endforeach


        </div>





    </div>
    <hr>

    <a class="btn btn-success" href="http://localhost:8888/movies">&nbsp;&nbsp;Back &nbsp;</a>
    {{--<div class="col-md-1" style="padding-top: 35px;">--}}
        {{--<form action="http://localhost:8888/movies/">--}}
            {{--<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-backward"></span> Back</button>--}}

        {{--</form>--}}
    {{--</div>--}}
</div>





<script type="text/javascript" src="{{ asset('Bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Bootstrap/js/npm.js') }}"></script>
</body>
</html>