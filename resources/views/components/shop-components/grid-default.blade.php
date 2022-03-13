<div id="grid-section" class="flex justify-center items-center">
    <div class="mt-10 w-8/12 flex mx-2 items-center flex-wrap">
        @foreach ($products as $product)
        @php
        $discount = $product->cmimi - (0.20 * $product->cmimi);
        @endphp
        <x-shop-components.grid-card :link="$product->img_slug" :title="$product->emri"
            :discount="'$'.number_format((float)$discount, 2, '.', '')"
            :price="'$'.number_format((float)$product->cmimi, 2, '.', '')" />
        @endforeach
    </div>
</div>

<div id="list-section" class="hidden">
    <div class="mt-10 mx-2 flex justify-center items-center flex-wrap">
        @foreach ($products as $product)
        @php
        $discount = $product->cmimi - (0.20 * $product->cmimi);
        @endphp
        <x-shop-components.list-card :link="$product->img_slug" :star="'4'" :title="$product->emri"
            :discount="'$'.number_format((float)$discount, 2, '.', '')"
            :price="'$'.number_format((float)$product->cmimi, 2, '.', '')"
            :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'" />
        @endforeach
    </div>
</div>

<div class="flex justify-center items-center mt-10">
    {{ $products->links() }}
</div>