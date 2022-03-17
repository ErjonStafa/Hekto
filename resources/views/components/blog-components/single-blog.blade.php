<div class="w-5/12 mt-9">
    <div>
        <img src="{{ $imgLink }}" class="w-full rounded">
    </div>

    <div class="flex mt-5 shadow-inset">
        <x-fas-pen-nib class="w-5 text-pink mr-2"/>
        <div class="text-sm text-navy-blue font-josefin mr-4">
            {{ $author }}
        </div>
        <x-bx-calendar class="w-5 text-[#FFA454] mr-1"/>
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