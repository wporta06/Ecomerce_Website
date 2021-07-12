@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-md-4 ">

            </div> --}}

            <div class="col-md-12">
                {{-- back bottom --}}
                <a href="{{ route("admin.index") }}" class="btn btn-dark my-3">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <a
                href="{{ route("products.create") }}"
                class="btn btn-dark my-3 ">
                    <i >ADD PRODUCT</i>
                </a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Price  </th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ Str::limit($product->description, 50) }}</td>
                                <td>{{ $product->inStock }}</td>
                                <td>{{ $product->price }}DH</td>
                                <td>
                                    {{--  asset() to tell that img is in puplic folder --}}
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" width="55"
                                        height="55" class="img-fluid rounded">
                                </td>
                                <td>
                                    {{ $product->category->title }}
                                </td>
                                {{-- edit bottom --}}
                                <td class=""> {{-- d-flex flex-row justify-content-center align-items-center --}}
                                    <a href="{{ route('products.edit', $product->slug) }}"
                                        class="btn btn-sm btn-warning mr-1">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                {{-- delete bottom --}}
                                <td>
                                    <form id="" method="POST" action="{{ route('products.destroy', $product->slug) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-sm btn-danger"
                                            {{-- onclick="event.preventDefault();
                                            if(confirm('Are you sure'))
                                            document.getElementById({{ $product->id }}).submit();" --}}
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
                    {{ $products->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
