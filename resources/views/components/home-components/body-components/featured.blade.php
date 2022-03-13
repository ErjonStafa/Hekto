<div>
    <div class="swiper swiper2 pb-24">
        <div class="swiper-wrapper">
            @foreach ($products as $product)
            <div class="swiper-slide flex flex-wrap justify-center items-center">
                <x-home-components.body-components.featured-card :id="$product->id" :link="$product->img_slug" :name="$product->emri" :code="$product->kodi" :price="'$'.number_format((float)$product->cmimi, 2, '.', '') " />
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination swiper-pagination2"></div>
    </div>
</div>