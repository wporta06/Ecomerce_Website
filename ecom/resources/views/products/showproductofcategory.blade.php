@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-sm-3">
                <li class="list-group-item active">
                    Categories
                </li>
                @foreach ($categories as $category)
                    <a href="{{ route('category.products', $category->slug) }}"
                        class="list-group-item list-group-item-action">
                        {{ $category->title }}
                        ({{ $category->products->count() }}) {{-- to show num of products in category --}}
                    </a>
                @endforeach


            </div>

           


            <div class="col">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset($product->image) }}"
                                    alt="{{ $product->title }}"width="355" height="255">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="{{ route('products.show', $product->slug) }}" title="View Product">{{ $product->title }}</a>
                                    </h4>
                                    <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                                    <div class="row">
                                        <div class="col">
                                            <p class="btn btn-warning btn-lg btn-block"> <i class="fas fa-tags"></i> {{ $product->price }} DH</p> <br>
                                        </div>
                                        <span class="text-danger">
                                            <strike>
                                                {{ $product->old_price }} DH
                                            </strike>
                                        </span><br>
                                        <div class="col">
                                            <a href="{{ route('products.show', $product->slug) }}" class="btn btn-success btn-lg btn-block"> <i class="fas fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


{{-- 

                        <div class="col-12">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}

                    @endforeach
                </div>
            </div>

        </div>
    </div>


@endsection
