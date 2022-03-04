<div class="2xl:mt-30 lg:w-92 md:w-80 sm:w-92 w-11/12 lg:h-72 md:h-64 sm:h-72 mt-20 mx-8 group cursor-pointer">
    <div class="hidden group-hover:flex group-hover:absolute">
        <img src="Images/Latest/Group 27.png">
    </div>
    <div class="hidden group-hover:absolute group-hover:flex group-hover:flex-col mt-32">
        <div class="rounded-full w-8 h-8 p-1 flex  text-center hover:bg-shade hover:text-blue text-open-blue">
            <a href="/cart">
                <x-bx-cart class="w-5 h-6 mr-4"/>
            </a>
        </div>
        <div class="rounded-full w-8 h-8 p-1 flex text-center hover:bg-shade hover:text-blue text-open-blue">
            <a href="/wishlist/add">
                <x-bx-heart class="w-5 h-6 mr-4"/>
            </a>
        </div>
        <div class="rounded-full w-8 h-8 p-1 flex text-center hover:bg-shade hover:text-blue text-open-blue">
            <a href="/">
                <x-fas-search-plus class="w-5 h-6 mr-4" />
            </a>
        </div>
    </div>
    <div class="bg-latest-card group-hover:bg-white w-full h-64 flex justify-center items-center">
        <img src="{{ $link }}" class="w-60 h-60">
    </div>
    
    <div class="flex justify-between 2xl:mt-4 mt-3">
        <div class="font-josefin text-base underline underline-offset-4 text-navy-blue">{{ $name }}</div>
        <div class="flex items-center">
            <div class="font-josefin text-base text-navy-blue mr-1">{{ $discount }}</div>
            <div class="font-josefin text-xs text-pink">
                <del>
                    {{ $price }}
                </del>
            </div>
        </div>
    </div>
</div>