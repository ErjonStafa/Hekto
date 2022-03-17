<div class="cursor-pointer font-lato w-40 bg-background-grey text-blue h-fit" x-data="{show: false}" x-on:click="show = !show">
    <div class="flex">
        <div>{{ $name }}</div>
        <x-bx-chevron-down class="w-5"/>
    </div>
    <div class="ml-3">
        <ul x-show="show">
            @foreach ($subcategories as $subcategory)
            @if ($subcategory->parent_id == $categoryId)
            <li>
                <a href="/pages/shop/category/{{ $subcategory->id }}" id="{{ ''.$subcategory->emri.$subcategory->id.'' }}" class="font-lato text-[#72718F]">
                    {{ $subcategory->emri }}
                </a>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>