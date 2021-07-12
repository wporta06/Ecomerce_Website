@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-3">
                    <h3 class="card-title text-center font-weight-bold">Update Product</h3>
                    <div class="card-body">
                        <form method="post" action="{{ route('products.update', $product->slug) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label class="font-weight-bold">Title</label>
                                <input type="text" name="title" placeholder="Titre" value="{{ $product->title }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Description</label>
                                <textarea name="description" placeholder="Description" cols="30" rows="10"
                                    class="form-control">{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Price</label>
                                <input type="number" name="price" placeholder="Prix" value="{{ $product->price }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Old Price</label>
                                <input type="number" name="old_price" placeholder="Prix Ancien"
                                    value="{{ $product->old_price }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">In Stock</label>
                                <input type="number" name="inStock" placeholder="Quantité en stock"
                                    value="{{ $product->inStock }}" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="" selected disabled>
                                        Choisir une catégorie
                                    </option>
                                    @foreach ($categories as $category)
                                        <option {{ $product->category_id === $category->id ? 'selected' : '' }}
                                            value="{{ $category->id }}">
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
