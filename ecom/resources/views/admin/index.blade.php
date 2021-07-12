@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4"> 
            <a href="{{route("admin.products")}}">
            <div class="card bg-primary text-white">
                <h3>Products</h3>
                <span class="font-weight-bold"> {{$products->count()}}</span>
            </div>
        </div>

        <div class="col-md-4"> 
            <a href="{{route("admin.orders")}}">
            <div class="card bg-primary text-white">
                <h3>Orders</h3>
                <span class="font-weight-bold"> {{$orders->count()}}</span>
            </div>
        </div>
    </div>
</div>
@endsection
