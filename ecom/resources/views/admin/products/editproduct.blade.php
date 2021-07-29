@extends('layouts.adminapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                {{-- back bottom --}}
                <a href="{{ url()->previous() }}" class="btn btn-dark my-3">
                    <i class="fas fa-arrow-left"></i>
                </a>
                
                <div class="card p-3 shadow-sm p-3 mb-5 bg-white">
                    <h3 class="card-title text-center font-weight-bold">Update Product</h3>
                    <div class="card-body">
                        <form method="post" action="{{ route('products.update', $theproduct->slug) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label class="font-weight-bold">Title</label>
                                <input type="text" name="title" value="{{ $theproduct->title }}" require
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Description</label>
                                <textarea name="description" cols="30" rows="10" require
                                    class="form-control">{{ $theproduct->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Price</label>
                                <input type="number" name="price" value="{{ $theproduct->price }}" require
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Old Price</label>
                                <input type="number" name="old_price" value="{{ $theproduct->old_price }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">In Stock</label>
                                <input type="number" name="inStock" require value="{{ $theproduct->inStock }}"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="" selected disabled>
                                        Select the category
                                    </option>
                                    @foreach ($thecategories as $category)
                                        <option {{ $theproduct->category_id === $category->id ? 'selected' : '' }}
                                            value="{{ $category->id }}">
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-lg btn-block">
                                    Update
                                </button>
                            </div>
                        </form>
                        <button onclick="location.href='{{ route('products_route') }}'" type="button"
                            class="btn btn-dark btn-lg btn-block">
                            Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
