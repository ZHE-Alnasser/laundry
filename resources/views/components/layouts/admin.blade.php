@extends('components.layouts.base')

{{--@section('header')--}}
    {{--<x-header/>--}}
{{--@endsection--}}

@push('styles')
    @bukStyles(true)
@endpush

@push('scripts')
    @bukScripts(true)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
            integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="
            crossorigin="anonymous">
    </script>
@endpush

@section('content')
    <div class="flex flex-col sm:flex-row md:flex-row ">
        <div>
            <x-layouts._sidebar/>
        </div>
        <div class="flex-grow m-2">
            <x-card>
                @yield('content')
                {{$slot??''}}
            </x-card>
        </div>
    </div>

@endsection






