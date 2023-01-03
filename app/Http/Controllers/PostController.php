<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    //video 5
    // {
    //     return view('posts', [
    //         "title" => "Posts",
    //         "posts" => Post::all()
    //     ]);
    // }

    // fungsi show di bawah sama namun berbeda pemanggilan parameter
    // public function show($slug)
    // {
    //     return view('post', [
    //         'title' => 'Single Post',
    //         'post' => Post::find($slug)
    //     ]);
    // }
    // public function show($id)
    // {
    //     return view('post', [
    //         'title' => 'Single Post',
    //         'post' => Post::find($id)
    //     ]);
    // }
    //video 5 
    //video 10
    // {
    //     return view('posts', [
    //         "title" => "Posts",
    //         //untuk menampilkan post berdasarkan yang terbaru di created_at bukan berdasarkan id
    //         "posts" => Post::latest()->get()
    //     ]);
    // }
    //video 10

    //video 11
    // {
    //     return view('posts', [
    //         "title" => "All Posts",
    //         //untuk menampilkan post berdasarkan yang terbaru di created_at bukan berdasarkan id
    //         "posts" => Post::with(['user', 'category'])->latest()->get()
    //     ]);
    // }
    //video 11
    //video 12
    {
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            //untuk menampilkan post berdasarkan yang terbaru di created_at bukan berdasarkan id
            "posts" => Post::with(['user', 'category'])->latest()->get()
        ]);
    }
    //video 12

    //video 7
    public function show(Post $post)
    {
        // return view('post', [
        // 'title' => 'Single Post',
        // 'post' => $post
        // ]);

        //video 12 
        return view('post', [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post
        ]);
        //video12
    }
    //video 7
}
