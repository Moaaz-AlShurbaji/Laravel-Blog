<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Str;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('blog.index', compact('posts'));
        //or return view('blog.index')->with('posts',Post::all());
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required:mimes:jpg,png,jpeg|max:5048'
        ]);

        //store the image path
        $slug = Str::slug($request->title, '-');
        $newImageName = uniqid() .'-'. $slug .'.'. $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        
        //dd($newImageName);
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $slug,
            'image_path' => $newImageName,
            'user_id' => Auth::user()->id
        ]);
        return redirect('/blog');
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog.show', compact('post'));
    }

    public function edit($slug)
    {   
        $post = Post::where('slug', $slug)->first();
        return view('blog.edit', compact('post'));
    }

    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required:mimes:jpg,png,jpeg|max:5048'
        ]);

        $slug = Str::slug($request->title, '-');
        $newImageName = uniqid() .'-'. $slug .'.'. $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $slug,
            'image_path' => $newImageName,
            'user_id' => Auth::user()->id
        ]);
        
        return redirect('/blog/'.$slug) -> with('message','Post updated successfuly!');
    }

    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->delete();
        return redirect('/blog') -> with('message','Post deleted successfuly!');
    }
}
