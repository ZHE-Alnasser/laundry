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
{{--<x-layouts.base >--}}
    {{--<div class="flex flex-col sm:flex-row md:flex-row bg-white" {{$attributes??''}}>--}}


        {{--<h1>{{setting('logo')}}</h1>--}}
        {{--<h1>{{setting('comapny_name')}}</h1>--}}
  {{--<h1>{{__('logo')}}</h1>--}}
        {{--<h1>{{__('comapny_name')}}</h1>--}}

        {{--<div class="flex-grow">    <x-layouts._header/>--}}
            {{--<div class="p-2 sm:p-5">--}}

                    {{--@yield('content')--}}
                    {{--{{$slot??''}}--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<x-layouts._footer/>--}}

{{--</x-layouts.base>--}}


        <!DOCTYPE html>
<html lang="{{ app()->getLocale()}}" dir="{{app()->getLocale()=='ar'?'rtl':'ltr'}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="{{$description??''}}">
    <meta name="author" content="{{$author??__('app_name')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title??__('app_name')}}</title>
    <meta name="keyword" content="{{$keywords??''}}">
    @stack('before_styles')
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:500&display=swap" rel="stylesheet">
    {{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    <style>
        .btn:not(.default-color), a.btn:not(.default-color) {
            color: var(--white) !important;
        }

        a, h1, h2, h3, h4, h5, h6, p, .using-font, label, .btn, th, tr, td {
            font-family: 'Tajawal', sans-serif;
            /*font-size: 30px;*/
        }

        /*.swal-footer {*/
            /*text-align: center;*/
            /*direction: ltr;*/
        /*}*/

        .custom-control-label {
            font-size: 18px;
        }

        .nav-link.active i {
            color: var(--danger);
        }
        .vat{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /*.no-rtl {*/
            /*direction: ltr;*/
            /*text-align: left;*/
            /*unicode-bidi: bidi-override;*/
        /*}*/

        body {
            margin: 20px;
            background-color: #fff
        }
    </style>
    @stack('after_styles')
</head>
<body>

<button class="btn  btn-info d-print-none pb-2 my-5" onclick="myFunction()">@lang('Print')</button>

<script>
    function myFunction() {
        window.print();
    }
</script>
<div class="fluid-container">

    @yield('content')
</div>

@stack('before_scripts')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
@stack('after_scripts')
</body>
</html>




