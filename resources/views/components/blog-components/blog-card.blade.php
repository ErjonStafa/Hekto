<div class="w-92 h-fit mr-9 mt-5 flex flex-col">
    <div class="w-92 h-64 rounded-lg">
        <img src="/storage/{{$imgLink}}" class="w-full h-full rounded-lg">
    </div>
    <div class="flex mx-5 mt-5 shadow-inset">
        <x-fas-pen-nib class="w-5 text-pink mr-2"/>
        <div class="text-sm text-navy-blue font-josefin mr-4">
            {{ $author }}
        </div>
        <x-bx-calendar class="w-5 text-[#FFA454] mr-1"/>
        <div class="text-sm text-navy-blue font-josefin">
            {{ $publishDate }}
        </div>
    </div>
    <div class="flex mx-5 mt-7 flex-col ">
        <div class="font-josefin text-lg text-navy-blue font-semibold group-hover:text-pink">
            {{ $postTitle }}
        </div>
        <div class="font-lato text-[#72718F] ">
            {{ $excerpt }}
        </div>
    </div>
    <div class="font-lato text-navy-blue group mx-5 mt-3 hover:text-pink underline underline-offset-2">
        <a href="/pages/blogs/{{ $id }}">
            Read More
        </a>
    </div>
</div>