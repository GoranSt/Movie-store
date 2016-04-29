

@extends('app')

@section('mesto')













    <h3> <label class="header label label-default">LATEST MOVIES</label></h3>
    <div class="row wellcust" style="margin-top: -20px;">

        <div class="row" style="padding-top: 10px;">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @foreach($latest as $p)
                    <div class="col-md-3" style="padding: 30px;">
                        <a href="{{action('moviesController@show',[$p->id])}}">
                            <img src="{{ $p->img }}" width="150px;" height="210px;">
                            {{--<h4>{{ $p->name }}</h4>--}}

                        </a>
                        <div style="padding-top: 15px;" class="form-group"> <div class="label label-info">  Price:&nbsp;&nbsp;</div><b>&nbsp; ${{ $p->price}} </b> </div>

                        <div><div class="label label-info"> Rating:</div> <b>&nbsp;{{ $p->rating}}</b> </div>
                        <div class="row" style="padding-top: 50px;"><div class="col-md-12">



                            </div></div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="row" style="padding-top: 60px;">



        <div class="col-md-2">
            <ul class="nav nav-tabs nav-stacked">

                <li class="active"><a data-toggle="tab" href="#home">All movies</a></li>
                <li><a data-toggle="tab" href="#menu1">Action</a></li>
                <li><a data-toggle="tab" href="#menu2">Comedy</a></li>

                <li><a data-toggle="tab" href="#menu3">Sci fi</a></li>
                <li><a data-toggle="tab" href="#menu4">Horror</a></li>

                <li><a data-toggle="tab" href="#menu5">Mystery</a></li>
                <li><a data-toggle="tab" href="#menu6">Adventure</a></li>
                <li><a data-toggle="tab" href="#menu7">Thriller</a></li>
                <li><a data-toggle="tab" href="#menu8">Documentary</a></li>
                <li><a data-toggle="tab" href="#menu9">Drama</a></li>
                <li><a data-toggle="tab" href="#menu10">Animation</a></li>
            </ul>
        </div>
        <div class="col-md-10">

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">

                    @foreach($all as $p)
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>

                    @endforeach
                    <div class="row"><div class="col-md-4"></div><div><?php  echo $all->links();  ?></div></div>

                </div>
                <div id="menu1" class="tab-pane fade">

                    @foreach($action as $p)
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>
                    @endforeach


                </div>
                <div id="menu2" class="tab-pane fade">
                    @foreach($comedy as $p)

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>

                    @endforeach
                </div>


                <div id="menu3" class="tab-pane fade">
                    @foreach($scifi as $p)

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>

                    @endforeach
                </div>



                <div id="menu4" class="tab-pane fade">

                    @foreach($horror as $p)

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>

                    @endforeach
                </div>

                <div id="menu5" class="tab-pane fade">

                    @foreach($mystery as $p)

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>

                    @endforeach


                </div>
                <div id="menu6" class="tab-pane fade">

                    @foreach($adventure as $p)

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>

                    @endforeach



                </div>
                <div id="menu7" class="tab-pane fade">
                    @foreach($thriller as $p)

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="menu8" class="tab-pane fade">
                    @foreach($documentary as $p)

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>

                    @endforeach
                </div>
                <div id="menu9" class="tab-pane fade">
                    @foreach($drama as $p)

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="menu10" class="tab-pane fade">
                    @foreach($animation as $p)

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                {{--<article>--}}

                                <div class="panel-heading">
                                    <a href="{{action('moviesController@show',[$p->id])}}"><h4>{{ $p->name }}</h4></a>
                                </div>
                                <div class="panel-body" style="margin-left: 50px;">
                                    <div> <img src="{{ $p->img }}" width="150px;" height="190px;"></div>
                                    <div style="margin-top: 10px;" class="text-danger"><b>PRICE:</b>  {{ $p->price}}</div>

                                    <div class="text-danger"><b>RATING:</b>   {{ $p->rating}}</div>
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




                                    <a href="/addProduct/{{$p->id}}"><span class="fa fa-shopping-cart"></span> <img src="{{ asset('images/add-to-cart.png') }}" style="margin-top: 5px;"></a>
                                    {{--<a href="/addProduct/{{$p->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>--}}
                                </div>


                                {{--</article>--}}
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>









@stop