<div class="2xl:ml-96 xl:ml-56 lg:ml-32 sm:ml-8 ml-3 2xl:mt-5 mt-4 2xl:mb-5 mb-4 text-blu flex items-center">
    <div id="title" class="2xl:text-4xl text-3xl font-semibold font-josefin">
        <a href="/">Hekto</a>
    </div>
    <div class="flex 2xl:ml-24 lg:ml-16 sm:ml-6 ml-5 items-baseline">
        <x-home-components.navigation-components.navigation-links :link="'/'" :text="'Home'" :selected="true"/>
        <x-home-components.navigation-components.navigation-links :link="'/pages'" :text="'Pages'" :selected="false"/>
        <x-home-components.navigation-components.navigation-links :link="'/products'" :text="'Products'" :selected="false"/>
        <x-home-components.navigation-components.navigation-links :link="'/blog'" :text="'Blog'" :selected="false"/>
        <x-home-components.navigation-components.navigation-links :link="'/pages/shop'" :text="'Shop'" :selected="false"/>
        <x-home-components.navigation-components.navigation-links :link="'/pages/contact-us'" :text="'Contact'" :selected="false"/>
    </div>

    <div>
        <x-home-components.navigation-components.search/>
    </div>
</div>