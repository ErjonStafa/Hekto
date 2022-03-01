<div class="w-fit h-92 2xl:mt-20 mt-16 cursor-pointer mr-3 group ">
    <div class="hidden group-hover:absolute group-hover:flex group-hover:flex-col mt-44 ml-3">
        <div class="rounded-full w-8 h-8 p-1 flex  text-center hover:bg-white hover:text-blue text-open-blue">
            <a href="/cart">
                <x-bx-cart class="w-5 h-6 mr-4"/>
            </a>
        </div>
        
        <div class="rounded-full w-8 h-8 p-1 flex text-center hover:bg-white hover:text-blue text-open-blue">
            <a href="/">
                <x-fas-search-plus class="w-5 h-6 mr-4" />
            </a>
        </div>
        <div class="rounded-full w-8 h-8 p-1 flex text-center hover:bg-white hover:text-blue text-open-blue">
            <a href="/wishlist/add">
                <x-bx-heart class="w-5 h-6 mr-4"/>
            </a>
        </div>
    </div>
    <div class="w-fit h-92 flex flex-col justify-center items-center text-center">
        <div class="bg-background-grey group-hover:bg-[#EBF4F3] flex justify-center items-center w-64 h-72 mr-3">
            <img src="{{ $link }}">
        </div>
        
        <div>
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
            <div class="flex justify-center items-center">
                <div class="font-josefin text-base text-navy-blue mr-1">
                    {{ $discount }}
                </div>
                <div class="font-josefin text-xs text-pink">
                    <del>
                        {{ $price }}
                    </del>
                </div>
            </div>
        </div>
    </div>
</div>