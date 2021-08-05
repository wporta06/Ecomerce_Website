@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-7">
                {{-- back bottom --}}
                <a href="{{ url()->previous() }}" class="btn btn-dark my-3">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <div class="card p-3  shadow-sm p-3 mb-5 bg-white">
                    <div class="card-body">
                        <form method="POST" action="{{ route('orders.updatee', $created_at) }}">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label class="font-weight-bold">Your Full Name</label>
                                <input name="fullname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Your Address</label>
                                <input name="address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Your Phone Number</label>
                                <input name="phonenumber" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Note (optinal)</label>
                                <textarea name="note" cols="30" rows="10" class="form-control"></textarea>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-lg btn-block">
                                    Place Order
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <div class="col-md-5">

                {{-- more items --}}
                <div class="shadow-sm p-2 mb-5 mt-4 bg-white">
                    <div class="container">
                        <h4 class="text-dark">Suggested for You</h4>
                        <div class="row ">

                            <div class="card mr-2" style="width: 13rem;">
                                <div class="card-body">
                                    <h5 class="card-title">The North FaceTerra 65 Pack</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Free Shipping</h6>
                                    <a href="http://127.0.0.1:8000/products/weekender-tent-3">
                                        <img class="img-fluid" src="{{ asset('images/allproducts/1627311383_1626894967_tent.jpg') }}"
                                            style="height: 13em; width: 100%">
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
                                    <a href="http://127.0.0.1:8000/products/weekender-tent-3"
                                        class="btn btn-warning btn-lg btn-block">Add To Card</a>
                                </div>
                            </div>

                            <div class="card" style="width: 13rem; ">
                                <div class="card-body">
                                    <h5 class="card-title">Terra 65 Backpack</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Free Shipping</h6>
                                    <a href="http://127.0.0.1:8000/products/terra-65-backpack">
                                        <img class="img-fluid" src="{{ asset('images/allproducts/1627308446_1626893946_bc1.jpg') }}"
                                            style="height: 13em; height: 14.5em;">
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
                                    <a href="http://127.0.0.1:8000/products/terra-65-backpack"
                                        class="btn btn-warning btn-lg btn-block">Add To Card</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
