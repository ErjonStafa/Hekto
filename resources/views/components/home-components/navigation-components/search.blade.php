<div>
    <div class="flex">
        <input type="text" name="search" id="search"
            class="border-2 border-lightgrey focus:outline-none focus:border-grey 2xl:w-80 xl:w-60 lg:w-52 md:w-44 sm:w-36 w-32 md:h-10 sm:h-8 h-9 ml-10">
        <div class="bg-pink md:w-10 sm:w-7 w-10 flex items-center">
            <x-feathericon-search class="text-white w-full" />
        </div>
    </div>
    <div id="found-container" class="absolute rounded mt-1 p-1 2xl:w-92 xl:w-72 h-0 bg-white max-h-96 overflow-y-scroll scrollbar-hide scroll-smooth scroll-m-0 lg:w-64 md:w-52 sm:w-44 w-40 ml-10 z-10">
        <div id="loading" class="hidden animate-pulse">
            <div class="flex-1 space-y-6 py-1">
                <div class="space-y-3">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="h-2 bg-slate-700 rounded col-span-2"></div>
                        <div class="h-2 bg-slate-700 rounded col-span-1"></div>
                    </div>
                    <div class="h-2 bg-slate-700 rounded"></div>
                </div>
            </div>
        </div>
        <div id="found" class="h-auto inline-flex flex-col">

        </div>
    </div>