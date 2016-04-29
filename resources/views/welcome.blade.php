@extends('app')

@section('mesto')


    <div style="margin-top: -43px; width: auto">
        <br>
        {{--<div class="col-md-1"></div>--}}

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('images/third.jpg') }}" alt="lord" width="1350" height="300">
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/first.jpg') }}" alt="Chania" width="1350" height="600">
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/2.jpg') }}" alt="treasure"  width="1350" height="600">
                    </div>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>




<div class="container" style="margin-top: 80px;">

  <div style="margin-left: 420px; margin-right: 420px;"><a href="{{ url('/movies') }}" class="btn btn-success btn-lg" style="width: 250px;">Start Browsing &nbsp;&nbsp;<span class="glyphicon glyphicon-film"></span></a></div>


    <div class="row" style="margin-top: 30px;">
<div class="col-md-3 well">
<h4>Browse latest movies for extra prices
    Watch your movies, any time at any device</h4>
</div>
        <div class="col-md-1"></div>
    <div class="col-md-3 well">
        <h4>
        Movies make us think hard, laugh until we cry, or actually cry. But what we seem to be divided on is where to watch

          </h4>

    </div>
        <div class="col-md-1"></div>
        <div class="col-md-3 well">
            <h4>Movies let us escape to other times, places, and events, even if it is only for a few hours</h4>
        </div>
    </div>
</div>




@stop



{{--<div class="container">--}}
{{--<div class="content">--}}
{{--<div class="title">Laravel 5</div>--}}




{{--<a href="http://localhost:8888/movies/"><h2>START BROWSING</h2></a>--}}

{{--</div>--}}
{{--</div>--}}


