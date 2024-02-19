@extends('layout')
@section('content')

<div class="card" style="margin: 20px">
    <div class="card-header">
        Edit order
    </div>
</div>
<div class="card-body">
    <form action="{{url('order/' .$order->id)}}" method="POST">
        {!! csrf_field() !!}
        @method('PATCH')
        <label for="">Order custome number</label><br>
        <input type="number" class="form-control" name="fullname" id="fullname" value="{{$order->custom_order_num}}" /><br>
        <label for="">Full Name</label><br>
        <input type="number" class="form-control" name="fullname" id="fullname" value="{{$order->fullname}}" /><br>
        <label for="">Price</label><br>
        <input type="text" class="form-control" name="price" id="price" value="{{$order->price}}" /><br>
        <label for="">Product</label><br>
        <input type="text" class="form-control" name="product" id="product" value="{{$order->product}}" /><br>
        <label for="">Sku</label><br>
        <input type="text" class="form-control" name="sku" id="sku" value="{{$order->sku}}" /><br>
        <input type="submit" value="update" class="btn btn-success">
    </form>
</div>
@stop
