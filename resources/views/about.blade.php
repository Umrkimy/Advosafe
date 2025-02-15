@extends('layout.default')

@section('head')
@endsection

@section('main')
<div class=" sm:flex items-center max-w-screen-xl">
    <div class="sm:w-1/2 p-10">
        <div class="image object-center text-center">
            <img src="https://i.imgur.com/WbQnbas.png">
        </div>
    </div>
    <div class="sm:w-1/2 p-5">
        <div class="text ">
            <span class="text-whitesmoke border-b-2 border-indigo-600 uppercase">About us</span>
            <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">About <span class="text-indigo-600">Our Company</span>
            </h2>
            <p class="text-whitesmoke">
                Welcome to our homepage! We are dedicated to providing you with the best experience possible. Our team works tirelessly to ensure that our products and services meet the highest standards of quality and excellence. We believe in innovation, integrity, and customer satisfaction. Thank you for visiting us, and we hope you find everything you need.
            </p>
        </div>
    </div>
</div>

<div class="sm:w-full p-5 mt-10">
    <div class="text-center">
        <h3 class="text-2xl font-bold text-indigo-600">Our Mission</h3>
        <p class="mt-4 text-black">
            Our mission is to deliver high-quality products that bring value to our customers and make their lives easier. We strive to innovate and continuously improve our offerings to meet the evolving needs of our clients. Our commitment to excellence drives us to exceed expectations and build lasting relationships based on trust and satisfaction.
        </p>
    </div>
</div>
@endsection

@section('footer')
@endsection
