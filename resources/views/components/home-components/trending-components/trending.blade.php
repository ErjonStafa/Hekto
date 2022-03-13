<div>
    <div class="flex flex-wrap justify-center items-center">


        <div class="flex sm:flex-row flex-col">
            @foreach ($products as $product)
            @php
                $discount = $product->cmimi - (0.20 * $product->cmimi);
            @endphp
            @if ($loop->index<2) 
                <x-home-components.trending-components.trending-card1 :link="$product->img_slug"
                    :title="$product->emri" :discount="'$'.number_format((float)$discount, 2, '.', '')" :price="'$'.number_format((float)$product->cmimi, 2, '.', '')" />
            @endif
            @endforeach
        </div>
        <div class="flex sm:flex-row flex-col">
            @foreach ($products as $product)
            @php
                $discount = $product->cmimi - (0.20 * $product->cmimi);
            @endphp
            @if ($loop->index<4 && $loop->index>1) 
                <x-home-components.trending-components.trending-card1 :link="$product->img_slug"
                    :title="$product->emri" :discount="'$'.number_format((float)$discount, 2, '.', '')" :price="'$'.number_format((float)$product->cmimi, 2, '.', '')" />
            @endif
            @endforeach
        </div>
    </div>
    <div class="flex sm:flex-row flex-col justify-center items-center mt-10">
        <div class="flex flex-wrap justify-center items-center">
            <div>
                <x-home-components.trending-components.trending-card2 :bgcolor="'bg-[#FFF6FB]'"
                    :imgsrc="'/Images/Trending/image 1162.png'" :title="'23% off in all products'"
                    :link="'/pages/shop-grid-default'" :text="'Shop now '" />

            </div>
            <div class="lg:mt-0 mt-3">
                <x-home-components.trending-components.trending-card2 :bgcolor="'bg-[#EEEFFB]'"
                    :imgsrc="'/Images/Trending/image 1161.png'" :title="'23% off in all products'" :link="'/category'"
                    :text="'View collection'" />
            </div>
        </div>

        <div>
            <x-home-components.trending-components.trending-card3 :link="'/Images/Trending/image 30.png'"
                :title="'Executive Seat chair'" :price="'$32.00'" />
            <x-home-components.trending-components.trending-card3 :link="'/Images/Trending/image 19.png'"
                :title="'Executive Seat chair'" :price="'$32.00'" />
            <x-home-components.trending-components.trending-card3 :link="'/Images/Trending/image 28.png'"
                :title="'Executive Seat chair'" :price="'$32.00'" />
        </div>
    </div>
</div>