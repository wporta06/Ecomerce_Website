@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">

            <div class="col-md-6">
                <div class="card">

                    <div class="card-img-top" style="height: 34em; ">
                        <img class="img-fluid rounded mx-auto d-block mt-4" src="{{ asset($product->image) }}"
                            alt="{{ $product->title }}" style="height: 34em; width: 28em;">
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-2">

                <form action="{{ route('add.cart', $product->slug) }}" method="post"> {{-- this form will send the quantity qty to CartController.php --}}
                    @csrf
                    <div class="form-group">
                        <h3 class="card-header text-center bg-warning">{{ $product->title }} </h3>
                        <br>
                        <br>
                        <h5 class="text-muted">Price:</h5>
                        <h2 class="d-flex flex-row justify-content-between align-items-center ">
                            <span>
                                {{ $product->price }} DH
                            </span>
                            <span class="text-danger">
                                <strike>
                                    {{ $product->old_price }} DH
                                </strike>
                            </span>
                        </h2>
                        <label for="qty" class="text-muted">
                            Quantity :
                        </label>
                        <input class="form-control" type="number" name="qty" id="qty" value="1" placeholder="Quantity"
                            max="{{ $product->inStock }}" min="1" style="width: max-content;"> {{-- to get just the max of piece --}}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block bg-success text-dark font-weight-bold">
                            <i class="fas fa-cart-plus"></i>
                            Add to card
                        </button>
                    </div>

                    <div class="">
                        <br>
                        <hr>
                        <h3>Details</h3>
                        <hr>
                        <span>
                            <p class="font-weight-bold">
                                @if ($product->inStock > 0)
                                    <span class="text-success">
                                        Available
                                    </span>
                                @else
                                    <span class="text-danger">
                                        No Available
                                    </span>
                                @endif
                            </p>
                        </span>
                        <h5 class="text-muted">Category:</h5>
                        <p class="badge badge-pill badge-primary">{{ $product->category->title }}</p>

                        <h5 class="text-muted">Description:</h5>
                        <p class="card-text">
                            {{ $product->description }} {{-- to show just 100 character of description --}}
                        </p>
                    </div>
                </form>
            </div>

        </div>


{{-- More Products --}}
        <div class="col-md-12 shadow-sm p-3 mt-5 bg-white">
            <div class="container">
                <h4 class="text-dark">More Products</h4>
                <div class="row justify-content-around">


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
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <h5 class="card-title">The North FaceTerra 65 Pack</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Free Shipping</h6>
                            <a href="http://127.0.0.1:8000/products/futura-vario-45-10-sl-pack-womens">
                                <img class="img-fluid" src="{{ asset('images/allproducts/1626893946_bc1.jpg') }}"
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
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <h5 class="card-title">The North FaceTerra 65 Pack</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Free Shipping</h6>
                            <a href="http://127.0.0.1:8000/products/futura-vario-45-10-sl-pack-womens">
                                <img class="img-fluid" src="{{ asset('images/allproducts/1626894967_tent.jpg') }}"
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
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <h5 class="card-title">The North FaceTerra 65 Pack</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Free Shipping</h6>
                            <a href="http://127.0.0.1:8000/products/futura-vario-45-10-sl-pack-womens">
                                <img class="img-fluid" src="{{ asset('images/allproducts/1627310901_1626894418_b1.jpg') }}"
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
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <h5 class="card-title">The North FaceTerra 65 Pack</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Free Shipping</h6>
                            <a href="http://127.0.0.1:8000/products/futura-vario-45-10-sl-pack-womens">
                                <img class="img-fluid" src="{{ asset('images/allproducts/1626896344_b3.jpg') }}"
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
    </div>

    {{-- =============================== --}}


@endsection
