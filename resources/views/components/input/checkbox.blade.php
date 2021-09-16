@props([
'name',
// 'value'=>'1',
'label'=> __('validation.attributes.'.$name),
'checked' => false,
'id'=> $name
])
{{--{{ $checked || old("$name") ? 'checked' : '' }}--}}
<div class="m-2 md:m-4">
<input type="checkbox" id="{{$id}}" name="{{$name}}"  {!! $attributes->merge(['class' => 'checkbox']) !!}>
    <label class="ms-1">{{__("$label")}} </label>
</div>


{{--<span class="">--}}
{{--    <label>{{__($label)}}</label>--}}
{{--    <input--}}
{{--        {{$attributes->merge(['class'=>"form-input block w-full--}}
{{--            shadow appearance-none border mt-3 rounded w-full p-3 text-gray-700 leading-tight flex-1"]) }}--}}
{{--        name="{{ $name }}"--}}
{{--        type="{{ $type }}"--}}
{{--        id="{{ $name }}"--}}
{{--        value="{{ old($name, $value) }}"--}}
{{--        placeholder="{{$label}}"--}}
{{--    />--}}
{{--</span>--}}
