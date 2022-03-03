<div class="flex flex-wrap justify-center items-center mt-28">
    <div class="w-fit bg-[#2B3CAB] rounded pb-5">
        <img src="/Images/AboutUs/Rectangle 56.png" class="max-w-lg w-96 translate-x-4">
    </div>
    <div class="ml-10 max-w-xl">
        <div>
            <x-home-components.body-components.section-title :text="'Know About Our Ecomerce Business, History'" />
        </div>
        <div class="2xl:mt-8 mt-6 text-sub-text-color font-semibold">
            <x-home-components.body-components.descriptions
                :text="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis neque ultrices mattis aliquam, malesuada diam est. Malesuada sem tristique amet erat vitae eget dolor lobortis. Accumsan faucibus vitae lobortis quis bibendum quam.'" />
        </div>
        <div class="2xl:mt-8 mt-6">
            <x-home-components.body-components.pink-button :text="'Continue shopping'"
                :link="'/pages/shop-grid-default'" />
        </div>
    </div>
</div>