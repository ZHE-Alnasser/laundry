@extends('components.layouts.base')

{{--@section('header')--}}

    {{--@include('components.header')--}}
{{--@endsection--}}


@section('content')
            {{ $slot??'' }}
@endsection

