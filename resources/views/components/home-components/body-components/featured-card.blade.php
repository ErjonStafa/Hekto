<div class="w-64 h-92 last:hover:bg-blue shadow-xl">
    <div id="product-image" class="w-64 h-56 bg-background-grey flex justify-center items-center">
        <img src="{{ $link }}">
    </div>
    <div class="text-center mt-4">
        <div id="name" class="font-lato font-bold text-lg text-pink">
            {{ $name }}
        </div>
        <div id="decoration" class="flex justify-center items-center mt-3">
            <div class="w-3 h-1 bg-open-blue rounded-lg mr-1">
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