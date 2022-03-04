<div class="flex justify-center items-center lg:mt-0 mt-10">
    <div class="flex flex-col lg:flex-row flex-wrap justify-center items-center 2xl:w-7/12 lg:w-9/12 w-11/12">
        <div class="xl:w-1/2 lg:w-2/5 w-4/5">
            <div >
                <x-home-components.body-components.section-title :text="'20% Discount Of All Products'" />
            </div>
            <div class="font-josefin md:text-xl text-base text-pink">
                Eams Sofa Compact
            </div>
            <div class="text-[#B7BACB] font-lato mt-5">
                <x-home-components.body-components.descriptions
                    :text="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu eget feugiat habitasse nec, bibendum condimentum.'" />
            </div>
            <div class="grid grid-flow-row grid-cols-2 grid-rows-2 gap-3 mt-5">
                <x-home-components.discount-components.checked-line :text="'Material expose like metals'"/>
                <x-home-components.discount-components.checked-line :text="'Clear lines and geomatric figures'"/>
                <x-home-components.discount-components.checked-line :text="'Simple neutral colours.'"/>
                <x-home-components.discount-components.checked-line :text="'Material expose like metals'"/>
            </div>
            
            <div class="2xl:mt-8 mt-6">
                <x-home-components.body-components.pink-button :text="'Shop now'" :link="'/pages/shop'" />
            </div>
        </div>
        <div class="xl:w-1/2 lg:w-3/5">
            <img src="/Images/Discount/Group 154.png" class="w-fit">
        </div>
    </div>
</div>