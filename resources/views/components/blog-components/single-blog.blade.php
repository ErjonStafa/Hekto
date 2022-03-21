<div class="flex flex-col justify-center items-center mt-20">
    <div class="w-5/12 mt-9">
        <div>
            <img src="{{ $imgLink }}" class="w-full rounded">
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

    <div class="my-12 border w-7/12 border-gray-400"></div>


    <div class="w-7/12 h-10 text-sub-text-color text-sm bg-gray-300 flex text-center items-center justify-between">
        <a href="/pages/blogs/{{ $id-1 }}" class="flex"><x-fas-arrow-left class="mx-2 w-4"/> Previous Post </a>
        <a href="/pages/blogs/{{ $id+1 }}" class="inline-flex">Next Post <x-fas-arrow-right class="mx-2 w-4"/></a>
    </div>
</div>



<div class="flex flex-col justify-center items-center">
    <div class="w-7/12">
        <div class="font-josefin text-navy-blue text-xl font-bold my-4">
            Comment
        </div>
        @foreach ($comments as $comment)
            @foreach ($commenters as $commenter)
                @if ($id == $comment->post_id && $comment->user_id = $commenter->id)
                    <x-blog-components.comment :username="$commenter->username" :comment="$comment->comment" />
                @endif
            @endforeach
        @endforeach

        <form action="/create-post" method="POST">
            <div class="mt">
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
            </div>
        </form>
    </div>
</div>