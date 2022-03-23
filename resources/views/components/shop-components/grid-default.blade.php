<div>
    <x-shop-components.sorting :results="$resultNumber" :time="$time" />
</div>


<div class="grid grid-flow-row grid-cols-10">
    <div class="col-span-2 mt-28 flex flex-col justify-center items-center h-fit">
        <div class="text-xl text-white bg-off-navy-blue px-3 w-5/6">
            Categories
        </div>

        <div class="bg-grey border border-navy-blue w-5/6">
            @foreach ($categories as $category)
            
                @foreach ($subcategories as $subcategory)
                    @if ($subcategory->parent_id == $category->id)
                    <div>
                        <x-shop-components.subcategories :categoryId="$category->id" :name="$category->emri"
                            :subcategories="$subcategories" />
                    </div>
                    @break
                    @else
                    <div>
                        <x-shop-components.category-name :categoryId="$category->id" :name="$category->emri" />
                    </div>
                    @endif
                @endforeach
            @endforeach
        </div>

    </div>
    <div class="col-span-7">
        <div id="grid-section" class="flex justify-center items-center">
            <div class="mt-10 flex mx-2 items-center flex-wrap">
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
            {{ $products->links('pagination::tailwind') }}
        </div>
    </div>
    <div class="col-span-1">

    </div>
</div>