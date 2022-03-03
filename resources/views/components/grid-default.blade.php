@extends('layouts.shop')

@section('body')
 

    <div id="grid-section">
        <div class="mt-10 2xl:mx-92 mx-60 flex flex-wrap">
            <x-shop-components.grid-card :link="'/Images/All/10011 1.png'" :title="'Vel elit euismod'" :discount="'$26.00'" :price="'$42.00'"/>
            <x-shop-components.grid-card :link="'/Images/All/image 9.png'" :title="'Ultricies condimentum imperdiet'" :discount="'$26.00'" :price="'$42.00'"/>
            <x-shop-components.grid-card :link="'/Images/All/image 1165.png'" :title="'Vitae suspendisse sed'" :discount="'$26.00'" :price="'$42.00'"/>
            <x-shop-components.grid-card :link="'/Images/All/image 1173.png'" :title="'Sed at fermentum'" :discount="'$26.00'" :price="'$42.00'"/>
            <x-shop-components.grid-card :link="'/Images/All/unnamed 1.png'" :title="'Fusce pellentesque at'" :discount="'$26.00'" :price="'$42.00'"/>
        </div>
    </div>


    <div id="list-section" class="hidden">
        <div class="mt-10 2xl:mx-92 mx-60 flex flex-wrap">
            <x-shop-components.list-card :link="'/Images/All/10011 1.png'" :star="'4'" :title="'Vel elit euismod'" :discount="'$26.00'" :price="'$42.00'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'"/>
            <x-shop-components.list-card :link="'/Images/All/image 9.png'" :star="'4'" :title="'Ultricies condimentum imperdiet'" :discount="'$26.00'" :price="'$42.00'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'"/>
            <x-shop-components.list-card :link="'/Images/All/image 1165.png'" :star="'4'" :title="'Vitae suspendisse sed'" :discount="'$26.00'" :price="'$42.00'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'"/>
            <x-shop-components.list-card :link="'/Images/All/image 1173.png'" :star="'4'" :title="'Sed at fermentum'" :discount="'$26.00'" :price="'$42.00'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'"/>
            <x-shop-components.list-card :link="'/Images/All/unnamed 1.png'" :star="'4'" :title="'Fusce pellentesque at'" :discount="'$26.00'" :price="'$42.00'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'"/>
        </div>
    </div>

@endsection