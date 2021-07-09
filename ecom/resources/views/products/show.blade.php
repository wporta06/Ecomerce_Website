@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-header">{{ $product->title }}</h3>
                    <div class="card-img-top">
                        <img class="img-fluid w-100" src="{{ asset($product->image) }}" alt="{{ $product->title }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $product->title }}
                        </h5>

                        <p>{{ $product->category->title }}</p>

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
                        <p class="card-text">
                            {{ $product->description }} {{-- to show just 100 character of description --}}
                        </p>
                        <p class="font-weight-bold"> 
                            @if ($product->inStock > 0)  
                                <span class="text-success">
                                    Disponible
                                </span>
                            @else
                                <span class="text-danger">
                                    Non Disponible
                                </span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <form action="{{route("add.cart",$product->slug)}}" method="post"> {{-- this form will send the quantity qty to CartController.php --}}
                @csrf
                    <div class="form-group">
                        <label for="qty" class="label-input">
                            Quantity :
                        </label>
                        <input class="form-control" type="number" name="qty" id="qty" value="1" placeholder="Quantity"
                            max="{{ $product->inStock }}" min="1" > {{-- to get just the max of piece  --}}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block bg-dark text-white">
                            <i class="fa fa-shopping "></i>
                            Add to card
                        </button>
                    </div>
                </form>
            </div>

        </div>

    @endsection
