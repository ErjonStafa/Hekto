@extends('layouts.pages')

@section('sections')


<div class="flex flex-col justify-center items-center mt-20">
    @foreach ($posts as $post)

    <x-blog-components.blog :id="$post->id" :imgLink="$post->img_slug" :author="$post->autori"
        :publishDate="$post->publish_date" :postTitle="$post->post_title" :excerpt="$post->excerpt" />

    @endforeach
</div>

@endsection