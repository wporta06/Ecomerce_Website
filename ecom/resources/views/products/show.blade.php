@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-img-top">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset($product->image) }}" alt="{{ $product->title }}"
                            width="316" height="440">
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <form action="{{ route('add.cart', $product->slug) }}" method="post"> {{-- this form will send the quantity qty to CartController.php --}}
                    @csrf
                    <div class="form-group">
                        <h3 class="card-header text-center">{{ $product->title }} </h3>
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

                        <h5>Category:</h5>
                        <p>{{ $product->category->title }}</p>

                        <h5>Description:</h5>
                        <p class="card-text">
                            {{ $product->description }} {{-- to show just 100 character of description --}}
                        </p>

                        <h5>Price:</h5>
                        <p class="d-flex flex-row justify-content-between align-items-center">
                            <span class="text-muted">
                                {{ $product->price }} DH
                            </span>
                            <span class="text-danger">
                                <strike>
                                    {{ $product->old_price }} DH
                                </strike>
                            </span>
                        </p>
                        <label for="qty" class="label-input">
                            Quantity :
                        </label>
                        <input class="form-control" type="number" name="qty" id="qty" value="1" placeholder="Quantity"
                            max="{{ $product->inStock }}" min="1"> {{-- to get just the max of piece --}}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block bg-dark text-white">
                            <i class="fas fa-cart-plus"></i>
                            Add to card
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    {{-- =============================== --}}


@endsection
