<div class="bg-grey w-full 2xl:h-[764px] h-[500px]">

    {{-- copied from figma --}}
    <div class="absolute 2xl:ml-12 lg:ml-5 md:ml-3">
        <img src="{{ asset('Images/image 32.png') }}" class="2xl:w-96 lg:w-64 md:w-48 sm:w-32 2xl:h-96 lg:h-64 md:h-48 sm:h-32">
    </div>
    <div>
        <div class="absolute rounded-full bg-lightpink 2xl:w-104 xl:w-80 lg:w-72 md:w-44 sm:w-36 2xl:h-104 xl:h-80 lg:h-72 md:h-44 sm:h-36 bg-opacity-30 2xl:right-56 xl:right-40 lg:right-20 md:right-12 sm:right-5 2xl:mt-20 mt-16">

        </div>
        <div class="absolute rounded-full bg-lightpink 2xl:w-104 xl:w-80 lg:w-72 md:w-44 2xl:h-104 xl:h-80 lg:h-72 md:h-44 bg-opacity-30 2xl:right-48 xl:right-32 lg:right-14 md:right-8 sm:right-2 mt-12">

        </div>
        <div class="absolute 2xl:w-36 lg:w-24 md:w-20 sm:w-14 2xl:h-36 lg:h-24 md:h-20 sm:h-14 2xl:right-40 xl:right-24 lg:right-12 md:right-6 sm:right-1 mt-12">
            <img src="{{ asset('Images/50percent-off.png')}}" class="2xl:w-36 xl:w-24 lg:w-20 md:w-12 sm:w-6 2xl:h-36 xl:h-24 lg:h-20 md:h-12 sm:h-6">
        </div>
        <div class="absolute 2xl:right-60 xl:right-44 lg:right-24 md:right-14 sm:right-8 2xl:mt-24 mt-20">
            <img src="{{ asset('Images/Shell-Shaped-Armchair-Pink-Velvet-Fabric-One-Seater-Sofa-for-Living-Room .png')}}"
                class="2xl:w-96 xl:w-72 lg:w-64 md:w-40 sm:w-32 2xl:h-96 xl:h-72 lg:h-64 md:h-40 sm:h-32">
        </div>
    </div>

    <div class="2xl:ml-96 xl:ml-64 lg:ml-52 sm:ml-20">

        <div class="2xl:pt-52 xl:pt-36 lg:pt-32 sm:pt-52 font-lato text-pink font-bold 2xl:text-base 2xl:leading-7 lg:text-sm text-xs leading-5">
            Best Furniture For Your Castle....
        </div>

        <div
            class="text-blu 2xl:text-6xl 2xl:leading-20 xl:text-4xl md:text-3xl sm:text-2xl font-bold leading-10 font-josefin 2xl:w-[650px] w-112 tracking-wide 2xl:mt-3 mt-2">
            New Furniture Collection
            Trends in 2020
        </div>

        <div class="text-slate-400 2xl:text-base lg:text-sm sm:text-xs font-lato font-bold 2xl:mt-3 mt-2 w-112">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing
            in phasellus non in justo.
        </div>

        <div class="2xl:mt-8 mt-6">
            <x-home-components.body-components.pink-button :text="'Shop now'" :link="'/pages/shop-grid-default'"/>
        </div>
    </div>
</div>