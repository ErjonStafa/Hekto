<div class="mt-32 flex justify-center items-center">
    <img src="/Images/Vector 16.png" class="absolute">
    <img src="/Images/Ellipse 70.png" class="absolute">
    <img src="/Images/Vector 15.png" class="absolute">
</div>
<div class="absolute sm:block hidden xl:mx-[273px] lg:mx-[193px] md:mx-[97px] sm:mx-[17px]">
    <img src="/Images/clock 1.png">
</div>
<div class="mt-10 text-center">
    <x-home-components.body-components.section-title :text="'Your Order Is Completed! '" />
</div>

<div class="flex">
    <div
        class="xl:mx-80 lg:mx-60 md:mx-36 sm:mx-16 mx-3 flex justify-center items-center w-full h-60 border-l-2 border-b-2 border-dashed border-l-[#D2D1D1] border-b-[#D2D1D1]">
        <div class="flex flex-col justify-center items-center text-center">
            <div class="font-lato font-semibold text-[#8D92A7]">
                <x-home-components.body-components.descriptions :text="'Thank you for your order! Your order is being processed and will be completed within 3-6
                hours. You will receive an email confirmation when your order is completed.'" />
            </div>
            <div class="2xl:mt-8 mt-6">
                <x-home-components.body-components.pink-button :text="'Continue shopping'"
                    :link="'/pages/shop'" />
            </div>
        </div>
    </div>
    <div class="absolute mt-48 xl:right-72 lg:right-60 md:right-36 sm:right-16 sm:block hidden">
        <img src="/Images/Group.png">
    </div>
</div>