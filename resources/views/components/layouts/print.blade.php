{{--@extends('components.layouts.admin')--}}

{{--@section('header')--}}
{{--    <x-layouts._header/>--}}
{{--@endsection--}}

{{--@section('content')--}}

{{--    <div class="bg-white my-2 rounded-lg shadow mx-3 flex">--}}
{{--        <div class="flex-1">--}}
{{--            <div class="py-2 px-5">--}}
{{--                <x-feedback/>--}}
{{--                {{ $slot??'' }}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}


{{--@extends('components.layouts.base')--}}

{{--@section('header')--}}
{{--    <x-layouts._header/>--}}
{{--@endsection--}}

{{--@push('scripts')--}}
{{--    @bukScripts(true)--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"--}}
{{--            integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="--}}
{{--            crossorigin="anonymous">--}}
{{--    </script>--}}
{{--@endpush--}}
{{--@section('content')--}}
<x-layouts.base >
    <div class="flex flex-col sm:flex-row md:flex-row bg-white" {{$attributes??''}}>


        {{--<h1>{{setting('logo')}}</h1>--}}
        {{--<h1>{{setting('comapny_name')}}</h1>--}}
  <h1>{{__('logo')}}</h1>
        <h1>{{__('comapny_name')}}</h1>

        <div class="flex-grow">    <x-layouts._header/>
            <div class="p-2 sm:p-5">

                    @yield('content')
                    {{$slot??''}}
            </div>
        </div>
    </div>

    <x-layouts._footer/>

</x-layouts.base>






