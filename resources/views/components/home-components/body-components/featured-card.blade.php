<div class="w-64 h-92 shadow-xl m-2 transition duration-300 ease-in-out group hover:bg-blue cursor-pointer">
    <div class="hidden absolute group-hover:flex hover:justify-center hover:text-center mt-3 ml-3">
        <div class="rounded-full w-8 h-8 p-1 flex text-center hover:bg-shade hover:text-blue text-open-blue">
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

    <button class="hidden absolute mt-60 ml-20 w-24 h-7 text-sm group-hover:justify-center leading-7 group-hover:text-center rounded font-josefin text-white bg-green-500 group-hover:flex group-hover:mt-48 group-hover:transition group-hover:duration-150">View Details</button>

    <div id="product-image" class="w-64 h-56 bg-background-grey flex justify-center items-center">
        <img src="{{ $link }}">
    </div>
    <div class="text-center mt-4">
        <div id="name" class="font-lato font-bold text-lg text-pink group-hover:text-white">
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
        <div class="font-josefin text-sm text-navy-blue mt-3 group-hover:text-white">
            Code - {{ $code }}
        </div>
        <div id="price" class="font-lato text-sm text-navy-blue mt-3 group-hover:text-white">
            {{ $price }}
        </div>
    </div>
</div>
<div id="credit">
    
</div>
