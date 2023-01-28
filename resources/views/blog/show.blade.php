@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<div class="bg-indigo-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{ @session()->get('message') }}</span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
</div>
@endif

<div class="container mx-auto text-center pt-15 pb-5">
    <h1 class="text-gray-700 text-4xl font-bold">{{ $post->title }}</h1>
</div>
<div class="container mx-auto text-center">
    <span>By: <span class="text-gray-700 italic">{{ $post->user->name }}</span>
    On:<span class="text-gray-700 italic">{{ date('d-m-Y', strtotime($post->updated_at)) }}</span></span>
</div>

<div class="container mx-auto pt-15 pb-5">
    <div class="flex h-96 justify-center">
        <img class="sm:rounded-lg w-3/5" src="/images/{{ $post->image_path }}" alt="">
    </div>
    
    <div class="container mx-auto text-lg pt-15 text-gray-700 leading-6">
        {{ $post->description }}
    </div>

    @if(Auth::user() && Auth::user()->id == $post->user_id)
        <div class="pt-10">
            <a class="mx-auto bg-yellow-400 text-gray-100 py-3 px-4 rounded-md hover:bg-yellow-700 transition duration-300" href="{{ $post->slug }}/edit">Edit Post</a>
        </div>
    @endif

    @if(Auth::user() && Auth::user()->id == $post->user_id)
        <div class="pt-10">
            <a class="mx-auto bg-red-700 text-gray-100 py-3 px-4 rounded-md hover:bg-red-800 transition duration-300" href="{{ $post->slug }}/delete">Delete Post</a>
        </div>
    @endif
    
    
</div>
@endsection