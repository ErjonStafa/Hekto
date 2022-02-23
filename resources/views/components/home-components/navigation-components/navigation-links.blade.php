<div>
    <a href="{{ $link }}" class="
    flex  
@if ($selected)
    text-pink
@else
    text-darkblue
@endif
    cursor-pointer
    text-base 
    font-lato
    2xl:mr-9 mr-7">
        {{ $text }}
        @if ($selected)
        <x-bx-chevron-down class="w-5 h-5" />
        @endif
    </a>


</div>