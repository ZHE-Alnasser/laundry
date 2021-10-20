<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}" dir="{{app()->getLocale()=='ar'?'rtl':'ltr'}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="{{$description??''}}">
    <meta name="author" content="{{$author??__('Laundry')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title??__('Laundry')}}</title>
    <meta name="keyword" content="{{$keywords??''}}">
    @stack('before_styles')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>

    </style>
    @stack('after_styles')
</head>
<body>
<button class="btn  btn-info d-print-none pb-2 my-5 print:invisible" onclick="myFunction()">@lang('Print')</button>

<script>
    function myFunction() {
        window.print();
    }
</script>
<div class="fluid-container">

    @yield('content')
    {{$slot??''}}
</div>

@stack('before_scripts')

@stack('after_scripts')
</body>
</html>




