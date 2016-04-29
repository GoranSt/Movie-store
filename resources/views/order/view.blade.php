@extends('app')



@section('mesto')

    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>Order num : {{$order->id}}</h3>
            <h3>Made on : {{$order->created_at}}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="col-sm-4">Name</th>
                    <th class="col-sm-4">File</th>
                    <th class="col-sm-2">Price</th>
                </tr>
                </thead>
                @foreach($order->orderItems as $item)
                    <tr>
                        <td>{{$item->product->name}}</td>
                        {{--dokolku rpavi problem imeto moze da se istrgne samo Download da ima--}}
                        <td><a href="/download/{{$item->product->id}}"> Download {{$item->product->name}}</a></td>
                        <td>$ {{number_format($item->product->price,2,',','')}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>
@endsection