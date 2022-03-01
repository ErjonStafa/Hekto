@extends('layouts.pages')

@section('sections')
    <div>
        <x-shop-components.sorting />
    </div>

    <div class="mt-10 2xl:mx-92 mx-60 flex flex-wrap">
        <x-shop-components.list-card :link="'/Images/All/10011 1.png'" :star="'4'" :title="'Vel elit euismod'" :discount="'$26.00'" :price="'$42.00'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'"/>
        <x-shop-components.list-card :link="'/Images/All/image 9.png'" :star="'4'" :title="'Ultricies condimentum imperdiet'" :discount="'$26.00'" :price="'$42.00'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'"/>
        <x-shop-components.list-card :link="'/Images/All/image 1165.png'" :star="'4'" :title="'Vitae suspendisse sed'" :discount="'$26.00'" :price="'$42.00'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'"/>
        <x-shop-components.list-card :link="'/Images/All/image 1173.png'" :star="'4'" :title="'Sed at fermentum'" :discount="'$26.00'" :price="'$42.00'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'"/>
        <x-shop-components.list-card :link="'/Images/All/unnamed 1.png'" :star="'4'" :title="'Fusce pellentesque at'" :discount="'$26.00'" :price="'$42.00'" :description="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.'"/>
    </div>

    <div class="flex justify-center items-center mt-20">
        <img src="/Images/image 1174.png">
    </div>
@endsection