@extends('layouts.app')

@section('content')

    {{-- cover image --}}
    <div id="home" class="hero-image ">
        <div class="hero-text">
            <br>
            <br>
            <h1 style="font-size:50px">NEVER STOP EXPLORING</h1>
        </div>
    </div>

    {{-- OUR BRANDS section --}}
    <div class="container-fluid" style=" background-color: #fdbe10;">
        <h3 class="text-center p-4 ">OUR BRANDS</h3><br>
        <div class="row shadow-lg  rounded">
            <div class="col-xs-6 col-md-6 d-flex justify-content-around ">
                <img src="{{ asset('assets/images/adidas.png') }}" width="100" height="100">
                <img src="{{ asset('assets/images/nike.png') }}" width="100" height="100">
            </div>

            <div class="col-xs-6 col-md-6 d-flex justify-content-around">
                <img src="{{ asset('assets/images/La-Sportiva-logo.svg') }}" width="120" height="110">
                <img src="{{ asset('assets/images/nord.png') }}" width="120" height="100">
            </div>

        </div>
    </div>

    <!-- the product  category Section) -->
    <div id="band" class="container-fluid text-center mt-4">
        <h3>OUR CATEGORY</h3>
        <br>

        <div class="row">
            <div class="col-sm-4">
                <p class="text-center"><strong>HIKING BACKPACK</strong></p><br>
                <a href="http://127.0.0.1:8000/products/category/hiking-bags">
                    <img class="img-fluid" src="{{ asset('assets/BACKPACKS.png') }}" width="300" height="255">
                </a>
                <div>

                </div>
            </div>
            <div class="col-sm-4">
                <p class="text-center"><strong>BOOTS</strong></p><br>
                <a href="http://127.0.0.1:8000/products/category/boots">
                    <img class="img-fluid" src="{{ asset('assets/BOOTS.png') }}" width="255" height="255">
                </a>
                <div>

                </div>
            </div>
            <div class="col-sm-4">
                <p class="text-center"><strong>TENTS & SLEEPING BAG</strong></p><br>
                <a href="http://127.0.0.1:8000/products/category/tents-sleeping-bag">
                    <img class="img-fluid" src="{{ asset('assets/Tent.png') }}" width="355" height="255">
                </a>
                <div>

                </div>
            </div>

        </div>
    </div>



    <section class="curved">
        {{-- best seller section --}}
        <div class="container text-center ">
            <br>
            <h3 class="text-white">We love Hiking!</h3>
            <p class="text-warning">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora, laudantium quaerat
                asperiores at velit
                provident voluptatem, repellendus ipsam incidunt consequuntur quo deserunt! Ratione consequuntur
                reprehenderit
                voluptatem, optio aliquam quibusdam nobis!</p>
            <br>
            <h1 class="text-white"><i class="fas fa-hiking text-warning"></i> BEST SELLER <i
                    class="fas fa-mountain text-warning"></i></h1>
            <br>
            <div class="row justify-content-between">
                
                    <div class="shadow nnb">
                        <div class="card mycardd" id="a1" style="width: 15em;">
                            <img class="card-img-top mb-5 mt-5" src="{{ asset('images\allproducts\1626894418_b1.jpg') }}"
                                height="185">
                            <div class="card-body ">
                                <h5 class="card-title ">The North FaceTerra 65 Pack</h5>
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
                                <a href="http://127.0.0.1:8000/products/outback-500-gtx-hiking-boots-mens"
                                    class="btn btn-warning btn-lg btn-block">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                <div class="shadow-sm mycardd nnb">
                    <div class="card " style="width: 15em;">
                        <img class="card-img-top " src="{{ asset('images\allproducts\1626896262_b2.jpg') }}">
                        <div class="card-body">
                            <h5 class="card-title">Futura Vario 45 + 10 SL Pack - Women's</h5>
                            <p class="d-flex flex-row justify-content-between align-items-center">
                                <span class="text-muted">
                                    340.00 DH
                                </span>
                                <span class="text-danger">
                                    <strike>
                                        399.00 DH
                                    </strike>
                                </span>
                            </p>
                            <a href="http://127.0.0.1:8000/products/futura-vario-45-10-sl-pack-womens"
                                class="btn btn-warning btn-lg btn-block">BUY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="shadow mycardd nnb">
                    <div class="card " style="width: 15em;">
                        <img class="card-img-top mb-5 mt-5" src="{{ asset('images\allproducts\1626894967_tent.jpg') }}"
                            height="185">
                        <div class="card-body">
                            <h5 class="card-title">Weekender Tent 3 La Sportiva</h5>
                            <p class="d-flex flex-row justify-content-between align-items-center">
                                <span class="text-muted">
                                    400.00 DH
                                </span>
                                <span class="text-danger">
                                    <strike>
                                        449.00 DH
                                    </strike>
                                </span>
                            </p>
                            <a href="http://127.0.0.1:8000/products/weekender-tent-3"
                                class="btn btn-warning btn-lg btn-block">BUY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm mycardd nnb">
                    <div class="card " style="width: 15em;">
                        <img class="card-img-top mb-5 mt-4" src="{{ asset('images\allproducts\1626896602_ad.jpg') }}"
                            height="188">
                        <div class="card-body">
                            <h5 class="card-title">Alterra FG GTX Hiking Boots - Men's</h5>
                            <p class="d-flex flex-row justify-content-between align-items-center">
                                <span class="text-muted">
                                    129.00 DH
                                </span>
                                <span class="text-danger">
                                    <strike>
                                        159.00 DH
                                    </strike>
                                </span>
                            </p>
                            <a href="http://127.0.0.1:8000/products/alterra-fg-gtx-hiking-boots-mens"
                                class="btn btn-warning btn-lg btn-block">BUY NOW</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>



    <div class="about-container">

        {{-- about --}}
        <div id="about" class="about-section shadow-lg  rounded">
            <div class="about-image" style=" background-color: #fdbe10;">
                <h1>About Us</h1>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum,
                    eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi
                    neque voluptates sit deleniti autem error eos totam nisi neque.
                </p>
            </div>
        </div>
    </div>

    {{-- image befor footer --}}
    <img src="{{ asset('assets/slide2.jpg') }}" class="img-responsive " style="width:100%">

    {{-- <script>
        $("#a1").mouseover(function() {
            $("#mmm").addClass("shadow-lg")
        })
    </script> --}}


@endsection
