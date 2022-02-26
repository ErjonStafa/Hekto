<div class="w-fit h-92 cursor-pointer mr-3 group flex flex-col justify-center items-center text-center">
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

            <div class="rounded-full mr-1 w-3 h-3 bg-[#DE9034]">

            </div>

            <div class="rounded-full mr-1 w-3 h-3 bg-[#DE9034]">

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