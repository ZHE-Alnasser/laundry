@props(['name' => ''])

@php($hasError =$errors->has($name)?'is-invalid':'')
<input
    {{$attributes->merge(['class'=>"input $hasError"]) }}
/>
@error("$name") <span class="text-red-700">{{ $message }}</span> @enderror
{{--class="form-input block bg-gray-50 focus:bg-white w-full rounded-md pr-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"--}}
