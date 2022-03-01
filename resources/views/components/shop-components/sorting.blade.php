<div class="2xl:ml-96 ml-64 2xl:mt-24 mt-16 flex items-center">
    <div>
        <div class="font-josefin font-semibold 2xl:text-2xl text-xl text-navy-blue">
            Ecommerce Acceories & Fashion item
        </div>
        <div class="font-lato text-sub-text-color text-xs">
            About 9620 results(0.62seconds)
        </div>
    </div>
    <div class="inline-flex ml-5 font-lato text-base text-[#3F509E]">
        <div>Per Page:</div>
        <input type="number" name="products-per-page" class="ml-1 w-14 h-6 pl-1 text-sub-text-color text-xs focus:outline-none box-border border border-lightgrey">
    </div>
    <div class="inline-flex ml-5 font-lato text-base text-off-navy-blue">
        <div>Sort By: </div>
        <select name="sorting" class="ml-1 w-24 h-7 cursor-pointer text-sub-text-color text-xs focus:outline-none box-border border border-lightgrey">
            <option value="best-match" selected>Best Match</option>
            <option value="name">Name</option>
        </select>
    </div>
    <div class="flex justify-center items-center ml-5 font-lato text-base text-off-navy-blue">
        <div>View: </div>
        <a id="grid" href="/pages/shop-grid-default">
            <x-fas-th-large class="w-4 ml-1"/>
        </a>
        <a id="list" href="/pages/shop-list">
            <x-fas-list class="w-4 ml-1"/>
        </a>
        <input type="text" class="ml-4 w-40 h-7 text-sub-text-color text-xs px-2 focus:outline-none border border-lightgrey">
    </div>
</div>