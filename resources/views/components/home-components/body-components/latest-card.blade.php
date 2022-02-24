<div class="2xl:mt-30 w-92 h-72 mt-20 2xl:mx-8 mx-5">
    <div class="bg-latest-card w-92 h-64 flex justify-center items-center">
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