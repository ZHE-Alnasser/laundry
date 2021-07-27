@extends('components.layouts.admin')

{{--@section('header')--}}

    {{--@include('components.layouts._header')--}}

{{--@endsection--}}

@section('content')

    <div class="bg-white my-2 rounded-lg shadow mx-3 flex">
        <div class="flex-1">
            <div class="py-2 px-5  pb-10">
                <x-feedback/>
                {{ $slot??'' }}
            </div>
        </div>
    </div>

@endsection


