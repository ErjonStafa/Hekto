<div class="w-72 h-92 lg:mt-0 sm:mt-10 mr-7 flex flex-col text-center shadow-inset group cursor-pointer">
    <div class="border-8 border-white w-full mt-0 h-72 bg-[#F5F6F8] flex justify-center items-center">
        <img src="{{ $link }}">
    </div>
    <div class="mt-3">
        <div class="font-lato font-bold text-navy-blue">
            {{ $title }}
        </div>
        <div class="flex justify-center text-center mt-2">
            <div class="text-sm text-navy-blue mr-3">
                {{ $discount }}
            </div>
            <div class="text-xs text-[#1518754d]">
                <del>{{ $price }}</del>
            </div>
        </div>
    </div>
</div>