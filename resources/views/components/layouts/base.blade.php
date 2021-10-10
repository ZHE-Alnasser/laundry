<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="_token" content="{!! csrf_token() !!}">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @stack('styles')
    @livewireStyles
</head>
<body dir="{{isRTL()?'rtl':'ltr'}}"  data-theme="light"
      class="min-h-screen bg-base-200" id="wrapper">


@yield('header')

@yield('sidebar')

@yield('content')
{{$slot??''}}


@livewireScripts

<script src="{{ mix('js/app.js') }}" defer></script>
<script src="https://unpkg.com/feather-icons"></script>

{{--@stack('scripts')--}}

</body>

</html>
