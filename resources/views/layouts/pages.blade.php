@extends('layouts.app')

@section('content')

    @php
        $route = (string) Route::currentRouteName();
        $url = explode(".", $route);
    @endphp


    <div class="bg-background-grey 2xl:h-72 h-60">
        <div class="2xl:ml-96 ml-64 2xl:pt-24 pt-16">
            <div class="2xl:text-4xl text-3xl font-bold text-[#101750] font-josefin">
                {{ last($url) }}
            </div>
            <div class="font-lato text-base font-medium flex">
                <div>
                    @for ($i = 0; $i < count($url)-1; $i++)
                        {{ $url[$i]."." }}
                    @endfor
                </div>
                <div class="text-pink">
                    {{ last($url) }}
                </div>
            </div>
        </div>
    </div>

    @yield('sections')
@endsection