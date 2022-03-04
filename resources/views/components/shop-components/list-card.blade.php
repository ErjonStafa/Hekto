<div class="w-[1141px] h-64 mt-8 shadow-xl flex cursor-pointer pb-1">
    <div class="w-80 h-52 flex justify-center items-center">
        <img src="{{ $link }}" >
    </div>
    <div>
        <div class="flex items-center mt-12">
            <div class="font-josefin text-lg text-navy-blue">
                {{ $title }}
            </div>
            <div class="flex justify-center items-center">
                <div class="rounded-full mr-1 w-3 h-3 bg-[#DE9034]">
                </div>
                <div class="rounded-full mr-1 w-3 h-3 bg-pink">
                </div>
                <div class="rounded-full mr-1 w-3 h-3 bg-off-purple">
                </div>
            </div>
        </div>
        <div class="flex items-center text-center mt-3">
            <div class="font-josefin text-base text-navy-blue mr-2">
                {{ $discount }}
            </div>
            <div class="font-josefin text-xs text-pink mr-2">
                <del>
                    {{ $price }}
                </del>
            </div>
            <div class="flex">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $star)
                    <x-fas-star class="w-3 text-[#FFC416]"/>
                    @else
                    <x-fas-star class="w-3 text-[#B2B2B2]" />
                    @endif
                @endfor
                
            </div>
        </div>

        <div class="font-lato text-[#9295AA] mt-3">
            {{ $description }}
        </div>

        <div class="flex mt-7">
            <div class="rounded-full w-8 h-8 p-1 flex  text-center text-[#535399] shadow-custom ">
                <a href="/cart">
                    <x-bx-cart class="w-5 h-6 mr-4"/>
                </a>
            </div>
            
            <div class="rounded-full w-8 h-8 p-1 flex text-center text-[#535399] shadow-custom ">
                <a href="/">
                    <x-fas-search-plus class="w-5 h-6 mr-4" />
                </a>
            </div>
            <div class="rounded-full w-8 h-8 p-1 flex text-center text-[#535399] shadow-custom ">
                <a href="/wishlist/add">
                    <x-bx-heart class="w-5 h-6 mr-4"/>
                </a>
            </div>
        </div>
    </div>
</div>