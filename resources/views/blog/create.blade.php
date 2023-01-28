@extends('layouts.app')

@section('content')
<div class="container mx-auto text-center pt-15 pb-5">
    <h1 class="text-gray-700 text-4xl font-bold">Add New Post</h1>
</div>

<div class="container mx-auto pb-5">
    <form class="flex flex-col items-center justify-center" action="/blog" method="post" enctype="multipart/form-data">
        @csrf
        
        @error('title')
            <p class="text-red-500 text-s italic pb-3 mt-4">
                {{ $message }}
            </p>
        @enderror
        <input class="w-3/5 h-10 text-2xl rounded-md shadow-lg border-b p-6 mb-5 text-center" type="text" name="title" placeholder="Title">
        
        @error('description')
            <p class="text-red-500 text-s italic pb-3 mt-4">
                {{ $message }}
            </p>
        @enderror
        <textarea class="w-3/5 h-60 rounded-md shadow-lg border-b p-5 mb-5" name="description" id="" cols="30" rows="10"></textarea>
        
        @error('image')
            <p class="text-red-500 text-s italic pb-3 mt-4">
                {{ $message }}
            </p>
        @enderror
        <div class="py-15">
            <label class="bg-gray-200 hover:bg-gray-700 py-5 px-8 rounded-md transition duration-300 text-gray-700 hover:text-gray-100 cursor-pointer font-bold uppercase">
                <span>Select an image to upload</span>
                <input id="dropzone-file" name="image" type="file" class="hidden">
            </label>
            
        </div> 

        <button class="bg-green-500 hover:bg-green-700 py-5 px-8 font-bold uppercase rounded-md text-gray-100 transition duration-300" type="submit">Submit</button>
    </form>
</div>

@endsection