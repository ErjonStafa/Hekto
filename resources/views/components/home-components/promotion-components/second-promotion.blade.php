<div class="bg-grey pt-10 pb-10">
    <div class="flex sm:flex-row flex-col justify-center items-center 2xl:px-80 xl:px-60 lg:px-36 md:px-12 sm:px-2">
        <div>
            <img src="{{ $link }}" class="absolute 2xl:w-112 xl:w-80 lg:w-60 sm:w-52 w-60 ">
            <img src="/Images/Ellipse 63.png" class="2xl:w-112 xl:w-96 lg:w-64 sm:w-56 w-64">
        </div>
        <div class="ml-7">
            <div>
                <x-home-components.body-components.section-title :text="$title" />
            </div>
            <div class="font-lato font-medium 2xl:text-base lg:text-sm sm:text-xs flex items-center text-sub-text-color mt-7">
                <div class="w-3 h-3 rounded-full bg-pink mr-3">

                </div>
                <x-home-components.body-components.descriptions :text="$description1" />
            </div>
            <div class="font-lato font-medium 2xl:text-base lg:text-sm sm:text-xs flex items-center text-sub-text-color mt-3">
                <div class="w-3 h-3 rounded-full bg-[#2B2BF5] mr-3">

                </div>
                <x-home-components.body-components.descriptions :text="$description2" />
            </div>
            <div class="font-lato font-medium 2xl:text-base lg:text-sm sm:text-xs flex items-center text-sub-text-color mt-3">
                <div class="w-3 h-3 rounded-full bg-[#2BF5CC] mr-3">

                </div>
                <x-home-components.body-components.descriptions :text="$description3" />
            </div>
            <div class="2xl:mt-8 mt-6">
                <x-home-components.body-components.pink-button :text="'Add to cart'" :link="'/pages/cart/add'"/>
            </div>
        </div>
    </div>
</div>