<div class="flex flex-wrap 2xl:justify-start justify-center items-center">
    @foreach ($products as $item)
    @php
        $discount = $item->cmimi - (0.20 * $item->cmimi);
    @endphp
        <x-home-components.body-components.latest-card :id="$item->id" :link="$item->img_slug" :name="$item->emri" :discount="'$'.number_format((float)$discount, 2, '.', '')"
            :price="'$'.number_format((float)$item->cmimi, 2, '.', '')" />
    @endforeach
</div>