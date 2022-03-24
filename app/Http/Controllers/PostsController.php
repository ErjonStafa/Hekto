<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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
        $tags = Tag::all();

        return view('components.blogs', compact('posts', 'autoret', 'tags'));
    }

    public function show($blog){
        $posts = Post::where('id','=' , $blog)->get();
        $id_autori = array();
        $posts_id = array();
        foreach ($posts as $key => $post) {
            array_push($posts_id, $post->id);
            array_push($id_autori, $post->autori_id);
        }

        $autoret = User::whereIn('id',  $id_autori)->get();

        $comments = Comment::all();
        $id_comment_user = array();
        foreach ($comments as $key => $comment) {
            array_push($id_comment_user, $comment->user_id);
        }

        $commenters = User::whereIn('id', $id_comment_user)->get();

        $tags = Tag::select('tags.*')->join('post_tag' , 'tags.id', '=', 'post_tag.tag_id')->where('post_tag.post_id', '=', $blog,)->get();

        return view('components.single-blog', compact('posts', 'autoret','comments', 'commenters', 'tags'));
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

        $tags = $request->input('tags');
        $post->save();

        foreach ($tags as $key => $tag) {
            DB::table('post_tag')->insert([
                'post_id' => $post->id,
                'tag_id'=> $tag
            ]);
        }

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

    public function searchByTag($id){
        $posts = Post::select('posts.*')->join('post_tag', 'posts.id' ,'=', 'post_tag.post_id')->where('post_tag.tag_id', '=', $id)->get();
        $id_autori = array();
        foreach ($posts as $key => $post) {
            array_push($id_autori, $post->autori_id);
        }

        $autoret = User::whereIn('id', $id_autori)->get();

        $tags = Tag::all();

        return view('components.blogs', compact('posts', 'autoret', 'tags'));
    }
}
