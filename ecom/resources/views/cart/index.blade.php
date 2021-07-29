{{-- {{$items}}  all data recived after click add to card --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- back bottom --}}
        <a href="{{ url()->previous() }}" class="btn btn-dark my-3">
            <i class="fas fa-arrow-left"></i>
        </a>
        <div class="row">

            {{-- more items --}}
            <div class="col-md-5 shadow-sm p-3 mb-5 bg-white">
                <div class="container">
                    <h4 class="text-dark">Suggested for You</h4>
                    <div class="row justify-content-around">
                        <div class="card" style="width: 13rem;">
                            <div class="card-body">
                                <h5 class="card-title">The North FaceTerra 65 Pack</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Free Shipping</h6>
                                <a href="http://127.0.0.1:8000/products/alterra-fg-gtx-hiking-boots-mens">
                                    <img class="img-fluid" src="{{ asset('images/allproducts/1626896602_ad.jpg') }}"
                                        style="height: 13em;">
                                </a>

                                <p class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-muted">
                                        150.00 DH
                                    </span>
                                    <span class="text-danger">
                                        <strike>
                                            200.00 DH
                                        </strike>
                                    </span>
                                </p>
                                <a href="http://127.0.0.1:8000/products/alterra-fg-gtx-hiking-boots-mens"
                                    class="btn btn-warning btn-lg btn-block">Add To Card</a>
                            </div>
                        </div>

                        <div class="card" style="width: 13rem;">
                            <div class="card-body">
                                <h5 class="card-title">The North FaceTerra 65 Pack</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Free Shipping</h6>
                                <a href="http://127.0.0.1:8000/products/futura-vario-45-10-sl-pack-womens">
                                    <img class="img-fluid" src="{{ asset('images/allproducts/1626896262_b2.jpg') }}"
                                        style="height: 13em;">
                                </a>

                                <p class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-muted">
                                        150.00 DH
                                    </span>
                                    <span class="text-danger">
                                        <strike>
                                            200.00 DH
                                        </strike>
                                    </span>
                                </p>
                                <a href="http://127.0.0.1:8000/products/futura-vario-45-10-sl-pack-womens"
                                    class="btn btn-warning btn-lg btn-block">Add To Card</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            {{-- the cart --}}
            <div class="col-md-7 ">
                <div class="col-md-12 card p-3">
                    <h4 class="text-dark">Your Cart</h4>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>
                                        <img src="{{ asset($item->associatedModel->image) }}" alt="{{ $item->title }}"
                                            width="50" height="50" class="">
                                    </td>
                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        <form class="d-flex flex-row justify-content-center align-items-center"
                                            action="{{ route('update.cart', $item->associatedModel->slug) }}"
                                            method="post">
                                            @csrf
                                            @method("PUT")
                                            <div class="form-group">
                                                <input type="number" name="qty" id="qty" value="{{ $item->quantity }}"
                                                    placeholder="Quantité" max="{{ $item->associatedModel->inStock }}"
                                                    min="1" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        {{ $item->price }} DH
                                    </td>
                                    <td>
                                        {{ $item->price * $item->quantity }} DH
                                    </td>
                                    <td>
                                        <form class="d-flex flex-row justify-content-center align-items-center"
                                            action="{{ route('remove.cart', $item->associatedModel->slug) }}"
                                            method="post">
                                            @csrf
                                            @method("DELETE")
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class=" text-center  font-weight-bold ">

                        <div class="h4 border shadow-lg p-3 bg-dark text-white rounded">
                            Total : {{ Cart::getSubtotal() }} DH
                        </div>
                        @if (Cart::getSubtotal() > 0)
                            <a href="{{ route('order_confirmation') }}" class="btn btn-primary btn-lg btn-block">Buy</a>
                        @endif
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
