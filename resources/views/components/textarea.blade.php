@props([
'name',
'type' => 'text',
'value'=>''
])

<textarea
        {{$attributes->merge(['class'=>"form-input block w-full appearance-none border border-gray-300 bg-gray-50 rounded w-full mt-2 p-2 text-gray-700 leading-tight flex-1"]) }}
        name="{{$name}}" id="{{$name}}" rows="4">{{$value}}</textarea>
