<div>
    <div class="flex font-josefin items-center 2xl:text-base text-sm h-11 text-white bg-violet">
    
        {{-- email --}}
        <a href="mailto:mhhasanul@gmail.com" class="flex">
            <x-far-envelope class="w-4 h-4 2xl:ml-96 ml-64 2xl:mr-3 mr-2"/>
            <div>
                mhhasanul@gmail.com
            </div>
        </a>
    
        {{-- phone --}}
        <a href="tel:(12345)67890" class="flex">
            <x-bx-phone-call class="w-4 h-4 2xl:ml-12 ml-10 2xl:mr-3 mr-2"/>
            <div>
                (12345)67890
            </div>
        </a>
    
        {{-- language --}}
        @php
            $selected = 'English';
            $options = array('English', 'Albanian');
        @endphp
        <div class="2xl:ml-96 ml-72">
            <x-home-components.header-components.header-dropdown :type='"language"' :selected="$selected" :options="$options"/>
        </div>
    
        {{-- currency --}}
        @php
            $selected = 'USD';
            $options = array('USD', 'EUR');
        @endphp
        <div class="2xl:ml-5 ml-3 2xl:mr-2 mr-1">
            <x-home-components.header-components.header-dropdown :type='"currency"' :selected="$selected" :options="$options"/>
        </div>
    
        {{-- login --}}
        <a href="/login" class="flex">
            <div class="2xl:ml-5 ml-3 2xl:mr-2 mr-1">
                Login
            </div>
            <x-far-user class="w-4 h-4  " />
        </a>
    
        {{-- wishlist --}}
    
        <a href="/wishlist" class="flex">
            <div class="2xl:ml-5 ml-3 2xl:mr-2 mr-1">
                Wishlist
            </div>
            <x-bx-heart class="w-4 h-4" />
        </a>
    
        {{-- cart --}}
        <a href="/cart">
            <x-bx-cart class="w-5 h-5 2xl:ml-8 ml-5 " />
        </a>
    </div>
</div>