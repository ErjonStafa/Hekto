<div class="w-64 h-92 shadow-xl m-2 transition duration-150 ease-in-out group hover:bg-blue">
    <div class="hidden absolute group-hover:flex group-hover:text-blue mt-3 ml-3">
        <x-bx-cart class="rounded-full hover:bg-shade w-7 h-7 mr-4 hover:text-blue text-open-blue"/>
        <x-bx-heart class="rounded-full hover:bg-shade w-7 h-7 mr-4 hover:text-blue text-open-blue"/>
        <x-fas-search-plus class="rounded-full hover:bg-shade w-7 h-7 stroke-1 mr-4 hover:text-blue text-open-blue" />
    </div>
    <div id="product-image" class=" w-64 h-56 bg-background-grey flex justify-center items-center">
        <img src="{{ $link }}">
    </div>
    <div class="text-center mt-4">
        <div id="name" class="font-lato font-bold text-lg text-pink">
            {{ $name }}
        </div>
        <div id="decoration" class="flex justify-center items-center mt-3">
            <div class="w-3 h-1 bg-open-green rounded-lg mr-1">
            </div>
            <div class="w-3 h-1 bg-pink rounded-lg mr-1">
            </div>
            <div class="w-3 h-1 bg-darkblue rounded-lg mr-1">
            </div>
        </div>
        <div class="font-josefin text-sm text-navy-blue mt-3">
            Code - {{ $code }}
        </div>
        <div id="price" class="font-lato text-sm text-navy-blue mt-3">
            {{ $price }}
        </div>
    </div>
</div>