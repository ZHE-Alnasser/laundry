@extends('components.layouts.admin')

{{--@section('header')--}}

    {{--@include('components.layouts._header')--}}

{{--@endsection--}}

@section('content')

    <div class=" flex">
    <x-layouts._sidebar/>
    <div class="flex-1">
            <div class="py-2 px-5  pb-10">
                <x-feedback/>
                {{ $slot??'' }}
                {{--@yield('content')--}}
            </div>
        </div>
    </div>

@endsection


