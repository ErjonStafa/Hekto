<div class="cursor-pointer font-lato  text-blue" x-data="{show: false}" x-on:click="show = !show">
    <div class="flex border-t border-dashed border-t-navy-blue p-3">
        <div>{{ $name }}</div>
        <x-bx-chevron-down class="w-5"/>
    </div>
    <div>
        <div x-show="show">
            @foreach ($subcategories as $subcategory)
            @if ($subcategory->parent_id == $categoryId)
            <div class="font-lato border border-dashed border-t-navy-blue py-1 px-6">
                <a href="/pages/shop/category/{{ $subcategory->id }}" id="{{ ''.$subcategory->emri.$subcategory->id.'' }}">
                    {{ $subcategory->emri }}
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>