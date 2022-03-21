@extends('layouts.pages')

@section('sections')


<div class="flex flex-col justify-center items-center mt-20">
    @foreach ($posts as $post)
        @foreach ($autoret as $autor)
            @if ($post->autori_id == $autor->id)
                <x-blog-components.blog :id="$post->id" :imgLink="$post->img_slug" :author="$autor->username"
                    :publishDate="$post->publish_date" :postTitle="$post->post_title" :excerpt="$post->excerpt" />
            @endif
        @endforeach
    @endforeach
</div>
@endsection