<select {{$attributes->merge(['class'=>"form-select mt-1 block w-1/4
    shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight
    my-4"])}} name="{{$name}}" id="{{$name}}">
    <option value="" disabled selected>
    </option>
    {{$slot}}
</select>
