@extends('layouts.adminapp')


@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-md-12">

                <div class="row justify-content-around text-center  font-weight-bold ">
                    <div class="h3 col-4 border shadow mb-5 p-3 bg-warning font-weight-bold rounded ">
                        Today Earning : {{ \App\Order::sum('total') }} DH
                    </div>
                    <div class="h3 col-4 border shadow mb-5 p-3 bg-warning font-weight-bold rounded">
                        Today Orders : {{ $orders->count() }}
                    </div>
                </div>

                <div class=" d-flex justify-content-center mb-3">
                    {{-- show all product bottom --}}
                    <a href="{{ route('products_route') }}" class="btn btn-dark my-3 col-3 font-weight-bold shadow ">
                        <i>ALL PRODUCT</i>
                        <span class="font-weight-bold badge badge-pill badge-warning ml-2">
                            {{ $products->count() }}</span>
                    </a>
                    {{-- show all orders bottom --}}
                    <a href="{{ route('orders_route') }}" class="btn btn-dark my-3 col-3 font-weight-bold ml-2 shadow">
                        <i>ALL ORDERS</i>
                        <span class="font-weight-bold badge badge-pill badge-warning ml-2"> {{ $orders->count() }}</span>
                    </a>

                    {{-- create product bottom --}}
                    <a href="{{ route('products.create') }}" class="btn btn-dark my-3 col-3 font-weight-bold ml-4 shadow">
                        <i>ADD PRODUCT</i>
                    </a>
                </div>
                <table class="table table-striped table-hover shadow-sm p-3 mb-5 bg-white">
                    <thead class="thead-dark ">
                        <tr>
                            <th>#Id</th>
                            <th>Edit</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Price </th>
                            <th>Old Price </th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>#{{ $product->id }}</td>
                                {{-- edit bottom --}}
                                <td class=""> {{-- d-flex flex-row justify-content-center align-items-center --}}
                                    <a href="{{ route('products.edit', $product->slug) }}"
                                        class="btn btn-sm mr-1 btn-dark">
                                        <i class="fas fa-pencil-alt "></i>
                                    </a>
                                </td>
                                <td>
                                    {{-- asset() to tell that img is in puplic folder --}}
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" width="60"
                                        height="60" class="img-fluid rounded">
                                </td>

                                <td>{{ $product->category->title }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ Str::limit($product->description, 30) }}</td>
                                <td>{{ $product->inStock }}</td>
                                <td>{{ $product->price }}DH</td>
                                <td>{{ $product->old_price }}DH</td>

                                {{-- delete bottom --}}
                                <td>
                                    <form method="POST" action="{{ route('products.destroy', $product->slug) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class=" text-center  font-weight-bold ">
                    <div class="h4 border shadow-lg p-3 bg-dark text-white rounded">
                        Total Products: {{ \App\Product::count() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
