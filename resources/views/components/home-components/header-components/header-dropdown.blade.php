<div>
    <div id="current-select-{{ $type }}" class="flex cursor-pointer px-1">
        <div id="current-select-{{ $type }}-text" class="2xl:mr-2 mr-1">
            {{ $selected }}
        </div>
        <x-bx-chevron-down class="w-5 h-5"/>
        
    </div>
    
    <div class="absolute">
        <div class="hidden pt-2 pb-2 rounded items-center bg-purple-600" id="other-select-{{ $type }}">
            @foreach ($options as $option)
            <div id="{{ $option }}" class="px-2 text-center cursor-pointer hover:bg-purple-500">
                {{ $option }}
            </div>
            @endforeach
        </div>
    </div>
</div>