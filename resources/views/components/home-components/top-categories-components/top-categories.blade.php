<div class="swiper swiper3 pb-10">
    <div class="swiper-wrapper">

        @foreach ($products as $product)
        <div class="swiper-slide">
            <x-home-components.top-categories-components.card :id="$product->id" :link="$product->img_slug" :name="$product->emri" :price="$product->cmimi"/>
        </div>
        @endforeach
        
    </div>
    <div class="swiper-pagination swiper-pagination3"></div>
</div>