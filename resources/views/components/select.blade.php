<select {{$attributes->merge(['class'=>"select select-bordered  w-full "])}} name="{{$name}}" id="{{$name}}">
    <option value="" disabled selected>
    </option>
    {{$slot}}
</select>
