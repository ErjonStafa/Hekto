<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    public function createPost(Request $request){
        $post = new Post;

        $image = $request->file('post_image');
        Storage::disk('public')->put($image->getClientOriginalName(), File::get($image));
        
        $post->img_slug = $image->getClientOriginalName();
        $post->post_title = $request->input('title');
        $post->autori_id = $request->session()->get('user');
        $post->excerpt = Str::limit($request->input('body'), 200, '...');
        $post->text = $request->input('body');
        $post->publish_date = Carbon::today()->toDateString();
        $post->save();

        return redirect()->back()->with('success', 'Post Created Successfully');
    }

    public function createComment(Request $request){
        $comment = new Comment;

        $comment->comment = $request->input('comment');
        $comment->post_id = $request->input('post_id');
        $comment->user_id = $request->session()->get('user');

        $comment->save();

        return redirect()->back()->with('success','Comment posted');
    }
}
