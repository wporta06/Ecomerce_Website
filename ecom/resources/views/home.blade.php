@extends('layouts.app')

@section('content')

    {{-- cover image --}}
    <div id="home" class="hero-image">
        <div class="hero-text">
            <br>
            <br>
            <h1 style="font-size:50px">NEVER STOP EXPLORING</h1>
        </div>
    </div>


    <!-- the product  category Section) -->
    <div id="band" class="container-fluid text-center " style="background-color: rgb(239 237 238)">
        <br>
        <br>
        <h3>THE HIKEZ</h3>
        <p><em>We love Hiking!</em></p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora, laudantium quaerat asperiores at velit
            provident voluptatem, repellendus ipsam incidunt consequuntur quo deserunt! Ratione consequuntur reprehenderit
            voluptatem, optio aliquam quibusdam nobis!</p>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <p class="text-center"><strong>HIKING BACKPACK</strong></p><br>
                <a href="http://127.0.0.1:8000/products/category/hiking-bags">
                    <img src="{{ asset('assets/BACKPACKS.png') }}" width="300" height="255">
                </a>
                <div>
                    <p>Guitarist and Lead Vocalist</p>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="text-center"><strong>BOOTS</strong></p><br>
                <a href="http://127.0.0.1:8000/products/category/boots">
                    <img src="{{ asset('assets/BOOTS.png') }}" width="255" height="255">
                </a>
                <div>
                    <p>Guitarist and Lead Vocalist</p>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="text-center"><strong>TENTS & SLEEPING BAG</strong></p><br>
                <a href="http://127.0.0.1:8000/products/category/tents-sleeping-bag">
                    <img src="{{ asset('assets/Tent.png') }}" width="355" height="255">
                </a>
                <div>
                    <p>Guitarist and Lead Vocalist</p>
                </div>
            </div>

        </div>
    </div>
    <div class="container mt-3">

        <h2 class="text-center font-weight-bold">Our Partners</h2>
        <div class=" d-flex justify-content-between">

            <div class="slide "><img src="{{ asset('assets/images/adidas.png') }}" width="100" height="100">
            </div>
            <div class="slide"><img src="{{ asset('assets/images/nike.png') }}" width="100" height="100"></div>
            <div class="slide"><img src="{{ asset('assets/images/La-Sportiva-logo.svg') }}" width="150" height="120">
            </div>
            <div class="slide"><img src="{{ asset('assets/images/nord.png') }}" width="150" height="100"></div>
            <div class="slide "><img src="{{ asset('assets/images/salo.png') }}" width="150" height="120"></div>

        </div>
    </div>

    {{-- about --}}
    <div id="about" class="about-section">
        <div class="about-image">
            <h1>About Us</h1>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum,
                eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi
                neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
        </div>
    </div>

    {{-- image befor footer --}}
    <img src="{{ asset('assets/slide2.jpg') }}" class="img-responsive " style="width:100%">

@endsection
