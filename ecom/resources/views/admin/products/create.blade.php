@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- back bottom --}}
                <a href="{{ route("admin.products") }}" class="btn btn-dark my-3">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <div class="card p-3">
                    <h3 class="card-title text-center font-weight-bold">New product</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="" selected disabled>Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Price</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Old Price</label>
                                <input type="number" name="old_price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">In Stock</label>
                                <input type="number" name="inStock" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-lg btn-block">
                                    Submit
                                </button>
                            </div>
                        </form>

                        <button onclick="location.href='{{ route('admin.products') }}'" type="button" class="btn btn-dark btn-lg btn-block">
                            Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
