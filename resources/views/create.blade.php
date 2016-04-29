@extends('app')
@section('mesto')






    <div class=""><h1 class="page-header" style="padding-left: 5cm;"><b>Add New Movie</b></h1></div>


    <div class="container well" style="margin: auto; margin-top: 2cm">

        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" role="form" action="http://localhost:8888/new/">
                    <div class="form-group">

                        <label class="control-label col-sm-2" name="name">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name">
                        </div>
                        {{--<br>--}}
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" name="name">Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="img">
                        </div>
                    </div>
                    {{--<br>--}}

                    <div class="form-group">
                        <label class="control-label col-sm-2" name="name">Director</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="director">
                            {{--<br>--}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" name="name">Release</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="release">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" name="name">Actors</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="actors">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" name="name">Description</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="description">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" name="name">Price</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="price">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" name="name">Language</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="lang">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" name="name">Studio</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="studio">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" name="name">Duration</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="time">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" name="name">Rating</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="rating">
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                        <p>
                        <div class="form-group">
                            <button class="btn btn-primary" style="background-color:#269abc; width: 3cm"   type="submit">Submit</button>
                        </div>
                        </p>
                    </div>









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


















    <script type="text/javascript" src="{{ asset('Bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Bootstrap/js/npm.js') }}"></script>


@stop