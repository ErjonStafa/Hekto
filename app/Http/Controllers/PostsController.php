<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all()->sortByDesc('publish_date');
        $id_autori = array();
        foreach ($posts as $key => $post) {
            array_push($id_autori, $post->autori_id);
        }

        $autoret = User::whereIn('id', $id_autori)->get();

        return view('components.blogs', compact('posts', 'autoret'));
    }

    public function show($blog){
        $posts = Post::where('id','=' , $blog)->get();
        $id_autori = array();
        foreach ($posts as $key => $post) {
            array_push($id_autori, $post->autori_id);
        }

        $autoret = User::whereIn('id',  $id_autori)->get();

        $comments = Comment::all();
        $id_comment_user = array();
        foreach ($comments as $key => $comment) {
            array_push($id_comment_user, $comment->user_id);
        }

        $commenters = User::whereIn('id', $id_comment_user)->get();

        return view('components.single-blog', compact('posts', 'autoret','comments', 'commenters'));
    }

    public function createComment(Request $request){

    }
}
