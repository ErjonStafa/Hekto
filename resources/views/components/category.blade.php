@extends('layouts.shop')

@section('body')

<div id="shop-body">
    <x-shop-components.grid-default :products='$products' :resultNumber='$result_number' :time='$time' :categories='$categories' :subcategories='$subcategories'/>
</div>
@endsection