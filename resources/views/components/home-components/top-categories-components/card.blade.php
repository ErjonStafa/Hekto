<div class="flex flex-col justify-center items-center text-center group cursor-pointer mr-5">
    <div class="flex justify-center items-center w-64 h-64 rounded-full shadow-inset">
        <div class="w-64 h-64 rounded-full bg-[#9877E7] group-hover:translate-y-1">

        </div>
        <div class="absolute  group-hover:translate-x-1 flex justify-center items-center w-64 h-64 rounded-full bg-background-grey">
            <img src="{{ $link }}" class="w-fit">
        </div>
        
    </div>
    <a href="/pages/shop/{{ $id }}" class="hidden absolute mt-56 group-hover:mt-28 group-hover:transition group-hover:flex justify-center w-24 h-7 leading-7 text-center text-white bg-green-500 font-josefin text-xs rounded-sm">View Shop</a>
    
    <div>
        <div class="mt-3 font-josefin text-navy-blue text-xl">
            {{ $name }}
        </div>
        <div class="mt-3 font-josefin text-navy-blue text-base">
            {{ $price }}
        </div>
    </div>
</div>