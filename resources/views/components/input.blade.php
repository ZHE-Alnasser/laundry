{{--@props(['disabled' => false])--}}

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm w-full px-5 py-1 text-gray-700 bg-gray-200 rounded focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}/>
