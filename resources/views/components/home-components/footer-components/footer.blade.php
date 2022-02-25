<div class="bg-shade mt-40 2xl:h-96 h-80 flex">
    <div class="flex flex-col 2xl:ml-72 ml-36 2xl:pt-24 pt-16">
        <div id="title" class="font-josefin text-4xl mb-8">
            Hekto
        </div>
        <div class="flex justify-center items-center h-12 2xl:mt-8 mt-4 2xl:w-96 w-80">
            <input type="text" name="" id="" class="absolute bg-white rounded-sm 2xl:w-96 w-80 h-12 pl-4 pr-32 focus:outline-none" placeholder="Enter Email Address">
            <button class="absolute 2xl:ml-64 ml-56 rounded-sm 2xl:w-32 w-24 h-11 bg-pink text-white text-base">Sign up</button>
        </div>

        <div class="mt-6">
            <x-home-components.footer-components.link :link="'/contact'" :text="'Contact info'"/>
        </div>

        <div class="mt-2">
            <x-home-components.footer-components.link :link="'https://goo.gl/maps/YW9sBfeoqsaCiLmf6'" :text="'17 Princess Road, London, Greater London NW1 8JR, UK'"/>
        </div>
    </div>

    <div class="flex flex-col 2xl:ml-20 ml-12 2xl:pt-24 pt-16">
        <div>
            <x-home-components.footer-components.titles :text="'Categories'"/>
        </div>
        <div class="2xl:mt-11 mt-8">
            <x-home-components.footer-components.link :link="'/categories'" :text="'Laptops & Computers'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/categories'" :text="'Cameras & Photography'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/categories'" :text="'Smart Phones & Tablets'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/categories'" :text="'Video Games & Consoles'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/categories'" :text="'Waterproof Headphones'"/>
        </div>
    </div>

    <div class="flex flex-col 2xl:ml-20 ml-12 2xl:pt-24 pt-16">
        <div>
            <x-home-components.footer-components.titles :text="'Customer care'"/>
        </div>
        <div class="2xl:mt-11 mt-8">
            <x-home-components.footer-components.link :link="'/account'" :text="'My account'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/discounts'" :text="'Discount'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/returns'" :text="'Returns'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/order/history'" :text="'Order History'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/orader/tracking'" :text="'Order tracking'"/>
        </div>
    </div>

    <div class="flex flex-col 2xl:ml-20 ml-12 2xl:pt-24 pt-16">
        <div>
            <x-home-components.footer-components.titles :text="'Pages'"/>
        </div>
        <div class="2xl:mt-11 mt-8">
            <x-home-components.footer-components.link :link="'/blog'" :text="'Blog'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/shop'" :text="'Browse the shop'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/categories'" :text="'Category'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/pages'" :text="'Pre-built Pages'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/'" :text="'Visual Composer Elements'"/>
        </div>
        <div class="2xl:mt-5 mt-3">
            <x-home-components.footer-components.link :link="'/'" :text="'WooCommerce Pages'"/>
        </div>
    </div>
</div>
