{{--<div class="form-group col-md">--}}
{{--    <label class="control-label" id="{{$name}}lbl" for="{{$name}}"> @lang("$name") @if(isset($required)) <span class="text-danger">*</span> @endif </label>--}}
{{--<textarea  class="form-control @if($errors->has("$name")) is-invalid @endif"--}}
{{--                    rows="5"   id="{{$name}}" name="{{$name}}"--}}
{{--                       placeholder="{{__("$name")}}" @if(isset($required)) required @endif>{{old("$name",${$singular}->{$name})}}</textarea>--}}
{{--    <div class="invalid-feedback">--}}
{{--        {{$errors->first("$name")?:__('Please provide a valid ').__("$name")}}--}}
{{--    </div>--}}
{{--</div>--}}

@props([
'name',
'type' => 'text',
'value'=>''
])

<textarea
        {{$attributes->merge(['class'=>"form-input block w-full appearance-none border border-gray-300 bg-gray-50 rounded w-full mt-2 p-2 text-gray-700 leading-tight flex-1"]) }}
        name="{{$name}}" id="{{$name}}" rows="4">{{$value}}</textarea>
