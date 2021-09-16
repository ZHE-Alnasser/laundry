{{--@props(['disabled' => false])--}}
@props([
'name'=>'',
'type' => 'text',
'value'=>'',
'label'=> __('validation.attributes.'.$name),
])
{{--<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm w-full px-5 py-1 text-gray-700 bg-gray-200 rounded focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}/>--}}
<label>{{__($label)}}</label>
<x-input.input {{$attributes->merge(['class'=>''])}}
               {{--        wire:dirty.class="border-4"--}}
               {{-- todo it good function but it cause issue when file is modeled --}}
               name="{{ $name }}"
               type="{{ $type }}"
               id="{{ $name }}"
               value="{{ old($name, $value) }}"
               placeholder="{{$label}}"
/>