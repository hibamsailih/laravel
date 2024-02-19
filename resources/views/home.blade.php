<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('content')
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <!-- your navbar content -->
        </nav>

        <div class="container">
            <div class="row" style="margin:20px">
                <div class="col-12">
                    <div class="card">
                        <h2>List</h2>
                    </div>
                    <div class="card-body">
                        <br>
                        <a href="{{ url('/order/create') }}" class="btn btn-success btn-sm">New order</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order Number</th>
                                        <th>Custom Order Num</th>
                                        <th>Full Name</th>
                                        <th>Price</th>
                                        <th>Product</th>
                                        <th>Sku</th>
                                        <th>Source</th>
                                        <th>Created by</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{ csrf_field() }}
                                    @foreach($order as $item)
                                    <tr>
                                        <td>{{$item->order_num}}</td>
                                        <td>{{$item->custom_order_num}}</td>
                                        <td>{{$item->fullname}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->product}}</td>
                                        <td>{{$item->sku}}</td>
                                        <td>{{$item->source}}</td>
                                        <td>{{$item->created_by}}</td>
                                        <td>
                                             <a href="{{url('/order/' . $item->id)}}" title="view order" style="text-decoration:none"> <button class="btn btn-info btn-sm"> View </button> </a>
                                            <a href="{{url('/order/' . $item->id . '/edit')}}" title="edit order" style="text-decoration:none"> <button class="btn btn-primary btn-sm"> Edit </button> </a>
                                            <form method="POST" action="{{url('/order/' . $item->id)}}" accept-charset="UTF-8" style="display: inline">
                                                {{method_field('DELETE')}}
                                                @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" title="delete order" onclick="return confirm('confirm delete')">Delete</button>
                                        </form>
                                        </td> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>