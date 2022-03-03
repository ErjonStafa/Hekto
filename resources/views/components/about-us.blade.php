@extends('layouts.pages')

@section('sections')

<div>
    <x-about-us-components.history/>
</div>

<div class="mt-36">
    <x-about-us-components.sections-titles :text="'Our Features'" />
</div>

<div>
    <x-about-us-components.our-features/>
</div>

<div>
    <x-about-us-components.comments/>
</div>


@endsection