@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                
                {{-- add products bottom --}}
                <a href="{{ route('products_route') }}" class="btn btn-dark my-3 mb-3">
                    <i class="fas fa-arrow-left"></i>
                </a>

                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Delete</th>
                            <th>Client</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Delivered</th>
                            <th class="bg-success">Action</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>
                                    <form id="" method="POST" action="{{ route('orders.destroy', $order->id) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->product_name }}</td>
                                <td>{{ $order->qty }}</td>
                                <td>{{ $order->price }} DH</td>
                                <td>{{ $order->total }} DH</td>
                                <td>
                                    @if ($order->delivered)
                                        <i class="fa fa-check text-success"></i>
                                    @else
                                        <i class="fa fa-times text-danger"></i>
                                    @endif

                                </td>
                                <td class="d-flex flex-row justify-content-center align-items-center bg-success">
                                    {{-- for updating order to Delivered --}}
                                    <form method="POST" action="{{ route('orders.update', $order->id) }}">
                                        @csrf
                                        @method("PUT")
                                        <button class="btn btn-sm btn-success">
                                            <i class="fas fa-truck"></i>
                                        </button>
                                    </form>

                                </td>
                                <td>{{ $order->fullname }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->phonenumber }}</td>
                                <td>{{ $order->note }}</td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>

                <div class=" text-center  font-weight-bold ">

                    <div class="h4 border shadow-lg p-3 bg-dark text-white rounded">
                        Total : {{ \App\Order::sum('total') }} DH
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
