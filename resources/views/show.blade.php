@extends('layout')
@section('content')

<div class="card" style="margin:20px">
    <div class="card-header">
        Order page
    </div>
    <div class="card-body">
        <h5 class="card-title">
            Order :{{$order->order_num}}
        </h5>
        <p class="card-text">Custom Order Num :{{$order->custom_order_num}} </p>
        <p class="card-text">Full name :{{$order->fullname}}</p>
        <p class="card-text">Price :{{$order->price}}</p>
        <p class="card-text">Product :{{$order->product}}</p>
        <p class="card-text">Sku :{{$order->sku}}</p>
        <p class="card-text">Source :{{$order->source}}</p>
        <p class="card-text">Created by :{{$order->created_by}}</p>
    </div>
</div>