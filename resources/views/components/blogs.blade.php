@extends('layouts.pages')

@section('sections')

<div class="grid grid-cols-10">
    <div x-data="{show:false}" class="col-span-2">
        <div class="w-1/4 absolute flex justify-center items-center mt-10">
            <div
                class="bg-pink text-white 2xl:text-base md:text-sm text-xs w-4/12 2xl:h-12 lg:h-10 md:h-8 h-8 2xl:leading-10 xl:leading-9 md:leading-8 leading-8 flex justify-center text-center rounded">
                <button class="w-full h-full flex justify-center items-center" x-on:click="show=true">
                    <x-fas-pen-nib class="w-3 mx-2" />
                    <div>Create post</div>
                </button>
            </div>
        </div>
        <div x-show="show" class="fixed top-0 justify-center flex w-full h-full z-50 items-center bg-black bg-opacity-20">
            <div x-on:click.outside="show=false" class="fixed shadow-custom bg-white w-5/12 h-fit p-10">
                <form action="/create-post" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="flex flex-col">
                            <label for="title" class="text-navy-blue text-lg font-josefin font-semibold">Title:</label>
                            <input type="text" name="title" id="title" class="rounded border-violet"
                                placeholder="Give a title to your post" required>
                        </div>
    
                        <div class="flex flex-col mt-3">
                            <label for="body" class="text-navy-blue text-lg font-josefin font-semibold">Text:</label>
                            <textarea name="body" id="body" placeholder="Write something here" required rows="10"
                                class="resize-none border-violet rounded"></textarea>
                        </div>

                        <div class="grid grid-cols-4 mt-3">
                            <label for="">Choose tags:</label>
                            @foreach ($tags as $tag)
                                <label for="{{ $tag->id }}">
                                    <input type="checkbox" name="tags[]" id="{{ $tag->id }}" class="focus:ring-white checked:bg-violet" value="{{ $tag->id }}">
                                    {{ $tag->tag_name }}
                                </label>
                            @endforeach
                        </div>
    
                        <div class="flex flex-col mt-3">
                            <label for="post_image" class="text-navy-blue text-lg font-josefin font-semibold">Choose
                                image:</label>
                            <input type="file" name="post_image" required id="post_image"
                                class="file:bg-violet file:border-none file:rounded-l file:text-white border border-violet text-violet rounded "
                                accept=".png,.jpeg">
                        </div>
    
                        <div class="mt-4">
                            @if (session()->has('role'))
                            <button
                                class="bg-violet text-white 2xl:text-base md:text-sm text-xs w-full 2xl:h-12 lg:h-10 md:h-8 h-8 2xl:leading-10 xl:leading-9 md:leading-8 leading-8 rounded-sm flex justify-center text-center">
                                Post Comment
                            </button>
                            @else
                            <div
                                class="bg-violet text-white 2xl:text-base md:text-sm text-xs w-full 2xl:h-12 lg:h-10 md:h-8 h-8 2xl:leading-10 xl:leading-9 md:leading-8 leading-8 rounded-sm flex justify-center text-center">
                                <a href="/pages/my-account" class="w-full h-full">
                                    Post Comment
                                </a>
                            </div>
                            @endif
                        </div>
    
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-span-6 flex flex-col justify-center items-center mt-20">
        @if (count($posts) == 0)
        <div class="font-josefin text-2xl font-bold text-blue my-4">
            There are no posts
        </div>
        @else
        @foreach ($posts as $post)
            @foreach ($autoret as $autor)
                @if ($post->autori_id == $autor->id)

                <x-blog-components.blog :id="$post->id" :imgLink="$post->img_slug" :author="$autor->username"
                    :publishDate="$post->publish_date" :postTitle="$post->post_title" :excerpt="$post->excerpt" />
                
                @endif
            @endforeach
        @endforeach
        @endif
    </div>

    <div class="col-span-2">
        <div class="font-josefin text-navy-blue underline underline-offset-2 text-xl mt-20">
            Tags
        </div>
        <div class="grid grid-cols-3">
            @foreach ($tags as $tag)
            <div>
                <a href="/pages/blogs/tag/{{ $tag->id }}" class="text-navy-blue font-josefin text-base hover:text-pink">{{ $tag->tag_name }}</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection