<div class="grid grid-rows-2 grid-cols-2 mx-40 gap-20">
    <div>
        <div class="mt-28">
            <x-home-components.body-components.section-title :text="'Information About us'" />
        </div>
        <div class="mt-3 text-sub-text-color font-semibold">
            <x-home-components.body-components.descriptions
                :text="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis neque ultrices mattis aliquam, malesuada diam est. Malesuada sem tristique amet erat vitae eget dolor lobortis. Accumsan faucibus vitae lobortis quis bibendum quam.'" />
        </div>
        <div class="flex mt-8">
            <div class="w-6 h-6 rounded-full bg-[#5625DF] mr-3">

            </div>
            <div class="w-6 h-6 rounded-full bg-[#FF27B7] mr-3">

            </div>
            <div class="w-6 h-6 rounded-full bg-[#37DAF3]">

            </div>
        </div>
    </div>
    <div>
        <div class="mt-28">
            <x-home-components.body-components.section-title :text="'Contact Way'" />
        </div>
        <div class="grid grid-rows-2 grid-cols-2 gap-y-12 gap-x-8 mt-5 font-lato text-base text-sub-text-color font-semibold">
            <div class="flex items-center">
                <div class="bg-[#5726DF] rounded-full w-11 h-11 mr-3">

                </div>
                <div class="w-44">
                    <x-home-components.body-components.descriptions :text="'Tel: 877-67-88-99'" />
                    <x-home-components.body-components.descriptions :text="'E-Mail: shop@store.com'" />
                </div>
            </div>
            <div class="flex items-center">
                <div class="bg-pink rounded-full w-11 h-11 mr-3">

                </div>
                <div class="w-44">
                    <x-home-components.body-components.descriptions :text="'Support Forum'" />
                    <x-home-components.body-components.descriptions :text="'For over 24hr'" />
                </div>
            </div>
            <div class="flex items-center">
                <div class="bg-[#FFB265] rounded-full w-11 h-11 mr-3">

                </div>
                <div class="w-44">
                    <x-home-components.body-components.descriptions :text="'20 Margaret st, London Great britain, 3NM98-LK'" />
                </div>
            </div>
            <div class="flex items-center">
                <div class="bg-[#1BE982] rounded-full w-11 h-11 mr-3">

                </div>
                <div class="w-44">
                    <x-home-components.body-components.descriptions :text="'Free standard shipping'" />
                    <x-home-components.body-components.descriptions :text="'on all orders.'" />
                </div> 
            </div>
        </div>
    </div>
    <div>
        <div>
            <x-home-components.body-components.section-title :text="'Get in touch'" />
        </div>
        <div class="mt-3 text-sub-text-color font-semibold">
            <x-home-components.body-components.descriptions
                :text="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis neque ultrices  tristique amet erat vitae eget dolor los vitae lobortis quis bibendum quam.'" />
        </div>
        <div>
            <div class="grid grid-cols-2 mt-3">
                <div>
                    <x-contact-us-components.input :type="'text'" :name="'name'" :placeholder="'Your Name*'"/>
                </div>
                <div>
                    <x-contact-us-components.input :type="'text'" :name="'email'" :placeholder="'Your E-mail'"/>
                </div>
            </div>
            <div class="mt-3">
                <x-contact-us-components.input :type="'text'" :name="'subject'" :placeholder="'Subject*'"/>
            </div>
            <div class="mt-3">
                <x-contact-us-components.input :type="'textarea'" :name="'message'" :placeholder="'Type Your Messege*'"/>
            </div>
        </div>
    </div>


    <div>
        <img src="/Images/Contact-us/Group 124.png" class="max-w-3xl w-112">
    </div>
</div>