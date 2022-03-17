@extends('layouts.pages')

@section('sections')


<div class="flex flex-col justify-center items-center mt-20">
    @foreach ($post as $post)
    <x-blog-components.single-blog :id="$post->id" :imgLink="$post->img_slug" :author="$post->autori"
        :publishDate="$post->publish_date" :postTitle="$post->post_title" :text="$post->text" />
    @endforeach

</div>

@endsection