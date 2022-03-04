<div class="lg:flex sm:block flex md:w-64 sm:w-48 h-[74px] lg:mb-5 sm:mb-16 sm:mt-0 mt-5 cursor-pointer">
    <div class="bg-[#F5F6F8] w-24 h-[74] flex justify-center items-center">
        <img src="{{ $link }}" class="max-w-[96px] max-h-[74px]">
    </div>
    <div class="ml-2 flex flex-col">
        <div class="font-josefin text-navy-blue text-base ">
            {{ $title }}
        </div>
        <div class="font-josefin text-navy-blue text-xs">
            <del>{{ $price }}</del>
        </div>
    </div>
</div>