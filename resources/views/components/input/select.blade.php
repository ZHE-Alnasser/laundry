@props([
'name'=>'',
])
<select {{$attributes->merge(['class'=>"block
items-center py-2 text-sm font-medium text-gray-500 bg-gray-50  border border-gray-300 rounded h-10 w-full print:border-none"])}} name="{{$name}}" id="{{$name}}">
    </option>
    {{$slot}}
</select>

