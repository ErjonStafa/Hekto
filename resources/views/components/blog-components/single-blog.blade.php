<div class="flex flex-col justify-center items-center mt-20">
    <div class="w-5/12 mt-9">
        <div>
            <img src="/storage/{{$imgLink}}" class="w-full rounded">
        </div>

        <div class="flex mt-5 shadow-inset">
            <x-fas-pen-nib class="w-5 text-pink mr-2" />
            <div class="text-sm text-navy-blue font-josefin mr-4">
                {{ $author }}
            </div>
            <x-bx-calendar class="w-5 text-[#FFA454] mr-1" />
            <div class="text-sm text-navy-blue font-josefin">
                {{ $publishDate }}
            </div>
        </div>

        <div class="flex mt-7 flex-col">
            <div class="font-josefin text-2xl text-navy-blue font-semibold ">
                {{ $postTitle }}
            </div>
            <div class="font-lato text-[#72718F]">
                {{ $text }}
            </div>
        </div>
    </div>

    <div>
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

    <div class="my-12 border w-7/12 border-gray-400"></div>


    <div class="w-7/12 h-10 text-sub-text-color text-sm bg-gray-300 flex text-center items-center justify-between">
        <a href="/pages/blogs/{{ $id-1 }}" class="flex">
            <x-fas-arrow-left class="mx-2 w-4" /> Previous Post
        </a>
        <a href="/pages/blogs/{{ $id+1 }}" class="inline-flex">Next Post
            <x-fas-arrow-right class="mx-2 w-4" />
        </a>
    </div>
</div>



<div class="flex flex-col justify-center items-center">
    <div class="w-7/12">
        <div class="font-josefin text-navy-blue text-xl font-bold my-4">
            Comment
        </div>
        @if (count($comments) == 0)
        <div class="font-josefin text-blue my-4">
            There are no comments
        </div>
        @else
            @foreach ($comments as $comment)
                @foreach ($commenters as $commenter)
                    @if ($id == $comment->post_id && $comment->user_id = $commenter->id)
                        <x-blog-components.comment :username="$commenter->username" :comment="$comment->comment" />
                    @endif
                @endforeach
            @endforeach
        @endif


        <form action="/create-comment" method="POST" class="my-8 mx-4">
            @csrf
            <div class="font-josefin text-navy-blue text-xl font-bold my-4">
                Post comment
            </div>
            <div>
                <input type="hidden" name="post_id" value="{{ $id }}">
                <textarea name="comment" id="text" placeholder="Write your comment here" class="resize-none w-5/12"
                    required></textarea>
            </div>

            @if (session()->has('role'))
            <button
                class="bg-pink text-white 2xl:text-base md:text-sm text-xs w-5/12 2xl:h-12 lg:h-10 md:h-8 h-8 2xl:leading-10 xl:leading-9 md:leading-8 leading-8 rounded-sm flex justify-center text-center ">
                Post Comment
            </button>
            @else
            <div
                class="bg-pink text-white 2xl:text-base md:text-sm text-xs w-5/12 2xl:h-12 lg:h-10 md:h-8 h-8 2xl:leading-10 xl:leading-9 md:leading-8 leading-8 rounded-sm flex justify-center text-center ">
                <a href="/pages/my-account" class="w-full h-full">
                    Post Comment
                </a>
            </div>
            @endif
        </form>
    </div>
</div>