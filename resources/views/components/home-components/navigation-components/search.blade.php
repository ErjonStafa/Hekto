<div>
    <div class="flex">
        <input x-data="{show:true}" type="text" name="search" x-on:click.outside="show=false" id="search" class="border-2 border-lightgrey focus:outline-none focus:border-grey 2xl:w-80 xl:w-60 lg:w-52 md:w-44 sm:w-36 w-32 md:h-10 sm:h-8 h-9 ml-10">
        <div class="bg-pink md:w-10 sm:w-7 w-10 flex items-center">
            <x-feathericon-search class="text-white w-full"/>
        </div>
    </div>
    <div x-show="show" id="found" class="absolute rounded mt-1 p-1 2xl:w-92 xl:w-72 bg-white h-fit lg:w-64 md:w-52 sm:w-44 w-40 ml-10 z-10">
        
    </div>
</div>