@extends('layouts.pages')

@section('sections')

<div>
    @foreach ($posts as $post)
        @foreach ($autoret as $autor)
            @if ($post->autori_id == $autor->id)
            <x-blog-components.single-blog :id="$post->id" :commenters="$commenters" :comments="$comments" :imgLink="$post->img_slug" :author="$autor->username"
                :publishDate="$post->publish_date" :postTitle="$post->post_title" :text="$post->text" />
            @endif
        @endforeach

    @endforeach

</div>

@endsection