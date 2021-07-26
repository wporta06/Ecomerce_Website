@extends('layouts.app')

@section('content')

    
    {{-- about --}}
    <div id="about" class="about-section mt-2">
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
    <img src="{{ asset('assets/hiking.jpg') }}" class="img-responsive " style="width:100%">

@endsection