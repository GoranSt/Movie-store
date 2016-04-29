
@extends('app')

@section('mesto')


    <div class="row" style="margin-bottom: 250px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Movies</h2>
            @foreach($movies as $p)
                <div class="col-md-6">
                    <article>
                        <hr>
                        <div class="lead"><a href="{{action('moviesController@show',[$p->id])}}"> <h3> {{ $p->name }}</h3></a></div>
                        {{--<div>{{ $p->name }}</div>--}}

                        {{--<div>{{ $p->img}}</div>--}}
                        {{--<div>{{ $p->director}}</div>--}}
                        {{--<div>{{ $p->release}}</div>--}}
                        {{--<div>{{ $p->actors}}</div>--}}
                        {{--<div>{{ $p->description}}</div>--}}

                        {{--<div>{{ $p->lang}}</div>--}}
                        {{--<div>{{ $p->studio}}</div>--}}
                        {{--<div>{{ $p->time}}</div>--}}

                        <div >PRICE:  {{ $p->price}}</div>
                        <div> RATING:  <?php
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

                            ?></div>



                    </article>
                </div>
            @endforeach
        </div>
    </div>
@stop