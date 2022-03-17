<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all()->sortByDesc('publish_date');
        return view('components.blogs', compact('posts'));
    }

    public function show($blog){
        $post = Post::where('id','=' , $blog)->get();
        return view('components.single-blog', compact('post'));
    }
}
