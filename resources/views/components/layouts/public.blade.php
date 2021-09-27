@extends('components.layouts.admin')

{{--@section('header')--}}

    {{--@include('components.header')--}}
{{--@endsection--}}


@section('content')
            {{ $slot??'' }}
@endsection

