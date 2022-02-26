@extends('layouts.pages')

@section('sections')
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
            <input type="number" class="ml-1 w-14 h-6 pl-1 text-sub-text-color text-xs focus:outline-none box-border border border-lightgrey">
        </div>
        <div class="inline-flex ml-5 font-lato text-base text-off-navy-blue">
            <div>Sort By: </div>
            <select name="sorting" class="ml-1 w-24 h-7 cursor-pointer text-sub-text-color text-xs focus:outline-none box-border border border-lightgrey">
                <option value="best-match" selected>Best Match</option>
                <option value="name">Name</option>
            </select>
        </div>
        <div class="flex ml-5 font-lato text-base text-off-navy-blue">
            <div>View: </div>
            <x-fas-th-large class="w-4 ml-1"/>
            <x-fas-list class="w-4 ml-1"/>
            <input type="text" class="ml-4 w-40 h-7 text-sub-text-color text-xs px-2 focus:outline-none border border-lightgrey">
        </div>
    </div>

    <div class="mt-10 2xl:mx-92 mx-60 flex flex-wrap">
        <x-shop-components.grid-card :link="'/Images/All/10011 1.png'" :title="'Vel elit euismod'" :discount="'$26.00'" :price="'$42.00'"/>
        <x-shop-components.grid-card :link="'/Images/All/image 9.png'" :title="'Ultricies condimentum imperdiet'" :discount="'$26.00'" :price="'$42.00'"/>
        <x-shop-components.grid-card :link="'/Images/All/image 1165.png'" :title="'Vitae suspendisse sed'" :discount="'$26.00'" :price="'$42.00'"/>
        <x-shop-components.grid-card :link="'/Images/All/image 1173.png'" :title="'Sed at fermentum'" :discount="'$26.00'" :price="'$42.00'"/>
        <x-shop-components.grid-card :link="'/Images/All/unnamed 1.png'" :title="'Fusce pellentesque at'" :discount="'$26.00'" :price="'$42.00'"/>
    </div>
@endsection