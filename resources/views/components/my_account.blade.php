@extends('layouts.pages')

@section('sections')
    <div id="login" class="flex justify-center items-center">
        <x-my_account-components.login />
    </div>
    <div id="register" class="hidden justify-center items-center">
        <x-my_account-components.register />
    </div>

    <div class="flex justify-center items-center mt-20">
        <img src="/Images/image 1174.png">
    </div>
@endsection