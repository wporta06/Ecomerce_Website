@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-md-4 ">

            </div> --}}

            <div class="col-md-12">
                {{-- add products bottom --}}
                <a
                href="{{ route("admin.products") }}"
                class="btn btn-dark my-3 ">
                    <i >ALL PRODUCTS</i>
                </a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Client</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Paid</th>
                            <th>Delivered</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->product_name }}</td>
                                <td>{{ $order->qty }}</td>
                                <td>{{ $order->price }} $</td>
                                <td>{{ $order->total }} $</td>
                                <td>
                                    @if ($order->paid)
                                        <i class="fa fa-check text-success"></i>
                                    @else
                                        <i class="fa fa-times text-danger"></i>
                                    @endif
                                </td>
                                <td>
                                    @if ($order->delivered)
                                        <i class="fa fa-check text-success"></i>
                                    @else
                                        <i class="fa fa-times text-danger"></i>
                                    @endif
                                </td>
                                <td class="d-flex flex-row justify-content-center align-items-center">
                                    {{-- for updating order to Delivered--}}
                                    <form method="POST" action="{{ route('orders.update', $order->id) }}">
                                        @csrf
                                        @method("PUT")
                                        <button class="btn btn-sm btn-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                    </form>

                                    {{-- for deleting order --}}
                                    <form id="" method="POST" action="{{ route('orders.destroy', $order->id) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-sm btn-danger"
                                            {{-- onclick="event.preventDefault();
                                            if(confirm('Are you sure'))
                                            document.getElementById({{ $order->id }}).submit();" --}}
                                        >
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="justify-content-center d-flex">
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
