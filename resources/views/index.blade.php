@extends('layouts.app')


@section('content')
<!--Hero-->
<div class="hero-bg-image flex flex-col items-center justify-center">
    <h1 class="h1 text-gray-100 text-5xl uppercase pb-10 text-center">Welcome to my blog</h1>
    <a class="bg-gray-100 text-gray-700 py-5 px-5 rounded-lg font-bold uppercase hover:bg-gray-300 transition duration-300" href="">Start Reading</a>
</div>

<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
    <div class="mx-2 md:mx-0">
        <img class="sm:rounded-lg" src="https://picsum.photos/id/239/800/500" alt="">
    </div>
    <div class="flex flex-col justify-center items-left m-10 sm:m-0">
        <h2 class="font-bold text-gray-700 uppercase text-4xl">How to be an expert in 2023</h2>
        <p class="font-bold text-gray-600">You can find a list of programming languages here.</p>
        <p class="text-gray-500 py-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis adipisci voluptatibus corporis placeat facere veritatis impedit blanditiis corrupti qui perspiciatis, delectus rem magnam ipsa, iusto esse officiis quidem temporibus enim.</p>
        <a class="mx-auto bg-gray-500 text-gray-100 py-5 px-5 rounded-lg hover:bg-gray-700 transition duration-300" href="#">Read More</a>
    </div>
</div>

<!--categories-->
<div class="text-center py-15 bg-gray-700 text-gray-100">
    <h2 class="text-2xl">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="font-bold text-3xl py-2">UX Desgin</div>
        <div class="font-bold text-3xl py-2">Programming</div>
        <div class="font-bold text-3xl py-2">Graphics Desgin</div>
        <div class="font-bold text-3xl py-2">Frontend</div>
    </div>
</div>

<!--Recent posts-->
<div class="container mx-auto text-center py-15">
    <h2 class="font-bold text-3xl py-10 text-gray-700">Recent Posts</h2>
    <p class="text-gray-400 px-15 leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam corporis eos sint modi aliquid cumque dolorem quas, esse magnam ex vitae error blanditiis dolorum sit consequatur eligendi tenetur quibusdam!</p>
</div>

<div class="container sm:grid grid-cols-2 mx-auto">
    <div class="flex bg-yellow-400 text-gray-100 pt-10">
        <div class="block m-auto pt-4 pb-15 w-4/5">
            <ul class="flex gap-2 text-xs">
                <li class="bg-gray-100 py-2 px-2 text-black rounded-md hover:bg-yellow-200 transition duration-300"><a href="#">PHP</a></li>
                <li class="bg-gray-100 py-2 px-2 text-black rounded-md hover:bg-yellow-200 transition duration-300"><a href="#">Programming</a></li>
                <li class="bg-gray-100 py-2 px-2 text-black rounded-md hover:bg-yellow-200 transition duration-300"><a href="#">Languages</a></li>
                <li class="bg-gray-100 py-2 px-2 text-black rounded-md hover:bg-yellow-200 transition duration-300"><a href="#">Backend</a></li>
            </ul>
            <h3 class="test-l py-10 leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores excepturi laboriosam illo, aperiam omnis hic natus exercitationem beatae in minus laudantium quaerat quisquam repellendus maxime delectus dolor quas nisi. Maxime?</h3>
            <a class="bg-transparent rounded-lg py-5 px-5 font-bold uppercase border-2" href="#">Read More</a>
        </div>
    </div>

    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/242/800/500" alt="">
    </div>
</div>
@endsection 
