<div>
    <x-home-components.promotion-components.promotions />
</div>


<div class="2xl:mt-32 mt-24 text-center">
    <x-home-components.body-components.section-title :text="'Featured Products'" />
</div>

<div class="2xl:mt-20 mt-12">
    <x-featured />
</div>

<div class="2xl:mt-32 mt-24 text-center">
    <x-home-components.body-components.section-title :text="'Latest Products'" />
</div>

<div class="2xl:mt-20 mt-12">
    <x-latest />
</div>

<div class="2xl:mt-32 mt-24 text-center">
    <x-home-components.body-components.section-title :text="'What Shopex Offer!'" />
</div>

<div>
    <x-home-components.shopex-offer-components.shopex-offer />
</div>

<div class="2xl:mt-32 mt-24">
    <x-home-components.promotion-components.second-promotion :title="'Unique Features Of leatest & Trending Poducts'"
        :link="'/Images/Home-Stylish-Club-Sofa-Chair-Pleated-Sofa-Armchair-with-Golden-Legs 1.png'"
        :description1="'All frames constructed with hardwood solids and laminates'"
        :description2="'Reinforced with double wood dowels, glue, screw - nails corner blocks and machine nails'"
        :description3="'Arms, backs and seats are structurally reinforced'" />
</div>

<div class="2xl:mt-32 mt-24 text-center">
    <x-home-components.body-components.section-title :text="'Trending Products'" />
</div>

<div class="2xl:mt-32 mt-24">
    <x-trending />
</div>

<div class="2xl:mt-32 mt-24 text-center">
    <x-home-components.body-components.section-title :text="'Discount Item'" />
</div>

<div>
    <x-home-components.discount-components.discount-promotion />
</div>

<div class="2xl:mt-32 mt-24 text-center">
    <x-home-components.body-components.section-title :text="'Top Categories'" />
</div>

<div>
    <x-home-components.top-categories-components.top-categories />
</div>

<div class="flex justify-center items-center mt-16">
    <img src="/Images/Rectangle 102.png" class="w-full min-h-[300px]">
    <div class="absolute flex flex-col justify-center items-center text-center w-3/6">
        <div>
            <x-home-components.body-components.section-title :text="'Get Leatest Update By Subscribe
            0ur Newslater'" />
        </div>
        <div class="2xl:mt-8 mt-6">
            <x-home-components.body-components.pink-button :text="'Shop now'" :link="'/pages/shop'" />
        </div>
    </div>
</div>

<div class="flex justify-center items-center mt-20">
    <img src="/Images/image 1174.png">
</div>

<div class="2xl:mt-32 mt-24 text-center">
    <x-home-components.body-components.section-title :text="'Leatest Blog'" />
</div>

<div class="2xl:mt-32 mt-16">
    <x-blog-components.top-blogs/>
</div>