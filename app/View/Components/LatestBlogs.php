<?php

namespace App\View\Components;

use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class LatestBlogs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $blogs = Post::orderByDesc('publish_date')->paginate(3);
        $id_autori = array();
        foreach ($blogs as $key => $blog) {
            array_push($id_autori, $blog->autori_id);
        }

        $autoret = User::whereIn('id',  $id_autori)->get();

        return view('components.blog-components.latest-blogs',compact('blogs', 'autoret'));
    }
}