<div class="flex flex-col justify-center items-center text-center group cursor-pointer mr-5">
    <div class="flex justify-center items-center w-64 h-64 rounded-full shadow-inset">
        <div class="w-64 h-64 rounded-full bg-[#9877E7] group-hover:translate-y-1">

        </div>
        <div class="absolute  group-hover:translate-x-1 flex justify-center items-center w-64 h-64 rounded-full bg-background-grey">
            <img src="{{ $link }}" class="w-fit">
        </div>
        
    </div>
    <div>
        <div class="mt-3 font-josefin text-navy-blue text-xl">
            {{ $name }}
        </div>
        <div class="mt-3 font-josefin text-navy-blue text-base">
            {{ $price }}
        </div>
    </div>
</div>