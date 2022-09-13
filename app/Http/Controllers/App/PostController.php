<?php

namespace App\Http\Controllers\App;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){

        $title = '';
        
        return view('posts',[
            "title" => "All Posts " . $title,
            'active' => 'posts',
            // "posts" => Post::all()
            "posts" => Post::latest()->paginate(7)->withQueryString()
        ]);
    }

    public function show( \App\Models\Post $post ){
        return view('post',[
            "title" => "Single Post",
            'active' => 'posts',
            "post" => $post
        ]);
    }
}
