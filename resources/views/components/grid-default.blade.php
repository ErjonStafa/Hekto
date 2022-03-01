@extends('layouts.pages')

@section('sections')
    
    <div>
        <x-shop-components.sorting/>
    </div>

    <div class="mt-10 2xl:mx-92 mx-60 flex flex-wrap">
        <x-shop-components.grid-card :link="'/Images/All/10011 1.png'" :title="'Vel elit euismod'" :discount="'$26.00'" :price="'$42.00'"/>
        <x-shop-components.grid-card :link="'/Images/All/image 9.png'" :title="'Ultricies condimentum imperdiet'" :discount="'$26.00'" :price="'$42.00'"/>
        <x-shop-components.grid-card :link="'/Images/All/image 1165.png'" :title="'Vitae suspendisse sed'" :discount="'$26.00'" :price="'$42.00'"/>
        <x-shop-components.grid-card :link="'/Images/All/image 1173.png'" :title="'Sed at fermentum'" :discount="'$26.00'" :price="'$42.00'"/>
        <x-shop-components.grid-card :link="'/Images/All/unnamed 1.png'" :title="'Fusce pellentesque at'" :discount="'$26.00'" :price="'$42.00'"/>
    </div>

    <div class="flex justify-center items-center mt-20">
        <img src="/Images/image 1174.png">
    </div>
@endsection