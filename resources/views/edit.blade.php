@extends('app')

@section('mesto')








    <div class="row" style="margin-right: 50px;">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal"  action="http://localhost:8888/edit/">
                    <fieldset>
                        <legend class="header">Edit movie</legend>
                        <div style="margin-left: -5cm;">
                            <div class="form-group">

                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Title:</label>
                                    <input id="fname"  value="{{$ed->name}}" name="name" type="text" placeholder="Title" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Image path:</label>
                                    <input id="lname" value="{{$ed->img}}" name="img" type="text" placeholder="Image" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Director:</label>
                                    <input id="email" name="director" value="{{$ed->director}}" type="text" placeholder="Director" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Release:</label>
                                    <input id="email" name="release"  value="{{$ed->release}}" type="text" placeholder="Release date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Actors:</label>
                                    <input  name="actors" value="{{$ed->actors}}" type="text" placeholder="Actors" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Description:</label>
                                    <input id="email" name="description" value="{{$ed->description}}" type="text" placeholder="Description" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Price:</label>
                                    <input id="email" name="price" value="{{$ed->price}}" type="text" placeholder="Price" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Language:</label>
                                    <input id="email" name="lang" value="{{$ed->lang}}"  type="text" placeholder="Language" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Studio:</label>
                                    <input id="email" name="studio" value="{{$ed->studio}}" type="text" placeholder="Studio" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Time:</label>
                                    <input id="email" name="time" value="{{$ed->time}}" type="text" placeholder="Time" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Rating:</label>
                                    <input id="email" name="rating" value="{{$ed->rating}}" type="text" placeholder="Rating" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>File ID:</label>
                                    <input id="file_id" name="file_id" value="{{$ed->file_id}}" type="text" placeholder="Rating" class="form-control">
                                </div>
                            </div>


                            <input type="hidden" name="id" value="{{$ed->id}}">

                            <div class="form-group">
                                <div class="col-md-12 text-center" style="margin-left: -41px">
                                    <button type="submit" class="btn btn-primary btn-lg" style="margin-left: -390px;">Submit Movie</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    @if (($errors->any()))
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{$e}}</li>
                            @endforeach
                        </ul>
                    @endif
                </form>
            </div>
        </div>
    </div>












    {{--<form action="http://localhost:8888/edit/">--}}


    {{--<label name="name">Title</label>--}}
    {{--<input type="text" name="name" value="{{$ed->name}}"><br>--}}

    {{--<label name="name">Image</label>--}}
    {{--<input type="text" name="img" value="{{$ed->img}}"><br>--}}

    {{--<label name="name">Director</label>--}}
    {{--<input type="text" name="director" value="{{$ed->director}}"><br>--}}

    {{--<label name="name">release</label>--}}
    {{--<input type="text" name="release" value="{{$ed->release}}"><br>--}}

    {{--<label name="name">actors</label>--}}
    {{--<input type="text" name="actors" value="{{$ed->actors}}"><br>--}}

    {{--<label name="name">description</label>--}}
    {{--<input type="text" name="description" value="{{$ed->description}}"><br>--}}

    {{--<label name="name">price</label>--}}
    {{--<input type="text" name="price" value="{{$ed->price}}"><br>--}}

    {{--<label name="name">lang</label>--}}
    {{--<input type="text" name="lang" value="{{$ed->lang}}"><br>--}}

    {{--<label name="name">studio</label>--}}
    {{--<input type="text" name="studio" value="{{$ed->studio}}"><br>--}}

    {{--<label name="name">time</label>--}}
    {{--<input type="text" name="time" value="{{$ed->time}}"><br>--}}

    {{--<label name="name">rating</label>--}}
    {{--<input type="text" name="rating" value="{{$ed->rating}}"><br>--}}


    {{--<input type="hidden" name="id" value="{{$ed->id}}">--}}
    {{--<button type="submit">Submit</button>--}}


    {{--@if (($errors->any()))--}}
    {{--<ul>--}}
    {{--@foreach($errors->all() as $e)--}}
    {{--<li>{{$e}}</li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--@endif--}}

    {{--</form>--}}
@stop
