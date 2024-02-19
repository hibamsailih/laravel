@extends('layout')
@section('content')

<div class="card" style="margin:20px">
    <div class="card-header">
        <h1>Create new order</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('order.store') }}" method="POST">
            {{ csrf_field() }}
            
            <label for="custom_order_num">Custom Order Num</label><br>
            <input type="number" name="custom_order_num" id="custom_order_num" class="form-control"><br>

            <label for="fullname">Full Name</label><br>
            <input type="text" name="fullname" id="fullname" class="form-control"><br>

            <label for="price">Price</label><br>
            <input type="number" name="price" id="price" class="form-control"><br>

            <label for="product">Product</label><br>
            <input type="text" name="product" id="product" class="form-control"><br>

            <label for="sku">Sku</label><br>
            <input type="text" name="sku" id="sku" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@stop
