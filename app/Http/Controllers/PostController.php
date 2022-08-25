<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::find(5);
        // $posts = Post::select('title', 'content')->get();
        // $posts = Post::where('title', 'sed iusto nihil')->get();
        // $posts = Post::where('id', 20)->first();
        // $posts = Post::orderByDesc('id')->get();
        // $posts = Post::latest()->get();
        // $posts = Post::orderByDesc('id')->paginate(20);
        // $posts = Post::orderByDesc('id')->simplePaginate(20);
        // dd($posts);


        // dd(request()->search);
        $count = 20;
        if(request()->has('count')) {
            $count = request()->count;
        }

        if(request()->search) {
            $posts = Post::where('title', 'like', '%'.request()->search.'%')->orderByDesc('id')->paginate(20);
        }else {
            $posts = Post::orderByDesc('id')->paginate($count);
        }

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);

        $img_name = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $img_name);

        Post::create([
            'title' => $request->title,
            'image' => $img_name,
            'content' => $request->content,
        ]);

        // return redirect()->back();
        return redirect()->route('posts.index')->with('msg', 'Post Created Successfully');
    }

    public function destroy($id)
    {
        // Post::destroy($id);
        $post = Post::find($id);
        File::delete(public_path('uploads/'.$post->image));
        $post->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $post = Post::find($id);
        // return date('d') . ' | ' . $post->updated_at->format('d');
        // if(date('d') - $post->updated_at->format('d') < 10) {
        //     return 'You cant update this post';
        // }
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);

        // if($post->update_at->format('d'))

        $img_name = $post->image;

        if($request->hasFile('image')) {
            $img_name = rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
        }

        $post->update([
            'title' => $request->title,
            'image' => $img_name,
            'content' => $request->content,
        ]);

        // return redirect()->back();
        return redirect()->route('posts.index')->with('msg', 'Post Updated Successfully');
    }
}
