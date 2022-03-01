<div>
    <a href="{{ $link }}" class="
    flex  
@if ($selected)
    text-pink
@else
    text-darkblue
@endif
    cursor-pointer
    lg:text-base 
    text-sm
    font-lato
    2xl:mr-9 lg:mr-7 sm:mr-3">
        {{ $text }}
        @if ($selected)
        <x-bx-chevron-down class="w-5 h-5" />
        @endif
    </a>


</div>