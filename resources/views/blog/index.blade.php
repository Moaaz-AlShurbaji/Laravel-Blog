@extends('layouts.app')

@section('content')

    @if(session()->has('message'))
    <div class="bg-red-700 text-center py-4 lg:px-4">
        <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{ @session()->get('message') }}</span>
        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
    </div>
    @endif

    <div class="container text-center mx-auto pt-15 pb-5">
        <h1 class="text-4xl font-bold">All Posts</h1>
    </div>

    @if(Auth::check())
    <div class="container sm:grid grid-cols-2 mx-auto pb-5 border-b border-gray-300">
        <a class="mx-auto bg-green-500 text-gray-100 py-3 px-4 rounded-md hover:bg-green-700 transition duration-300" href="blog/create">Create Post</a>
    </div>
    @endif

    @foreach ($posts as $post)

        <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
            <div class="">
                <img class="sm:rounded-lg" src="/images/{{ $post->image_path }}" alt="">
            </div>

            <div>
                <h2 class="text-gray-700 font-bold text-2xl py-5">{{ $post->title }}</h2>
                <span>By: <span class="text-gray-700 italic">{{ $post->user->name }}</span>
                On:<span class="text-gray-700 italic">{{ date('d-m-Y', strtotime($post->updated_at)) }}</span></span>
                <p class="text-l text-gray-700 py-8 leading-8">{{ $post->description }}</p>
                <a class="mx-auto bg-gray-500 text-gray-100 py-3 px-4 rounded-md hover:bg-gray-700 transition duration-300" href="blog/{{ $post->slug }}">Read More</a>
            </div>
        </div>

        
    @endforeach
    
    

    

    
@endsection