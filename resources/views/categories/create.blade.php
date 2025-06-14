{{--<x-layouts.app>--}}
    {{--<x-feedback/>--}}
    {{--<x-card>--}}
    {{--<h1 class="px-6">{{__('Create').' '.__('Categories')}}</h1>--}}

    {{--<div class=" mt-6 px-6 py-4 overflow-hidden">--}}
        {{--<x-form action="{{url('categories')}}" method="post" has-files>--}}
            {{--@csrf--}}
            {{--<label>{{__('Category Name')}}<span class="text-red-600"> *</span></label>--}}
            {{--<x-input class="input" name="name" value="{{ old('name') }}"/>--}}


{{--<div class="mt-3">--}}
            {{--<label>{{__('Type')}}<span class="text-red-600"> *</span></label>--}}
             {{--<x-select name="type" class="select">--}}
                 {{--<option value="users">{{__('User')}}</option>--}}
                 {{--<option value="expenses">{{__('Expense')}}</option>--}}
                 {{--<option value="orders">{{__('Order')}}</option>--}}
             {{--</x-select>--}}
{{--</div>--}}
            {{--<div class="flex mt-8">--}}
                {{--<button type='submit' class="btn ml-3">{{__('Create')}}</button>--}}

                {{--<input type="button" class="btn-cancel"--}}
                       {{--name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/category/1')"/>--}}
            {{--</div>--}}
        {{--</x-form>--}}
    {{--</div>--}}
    {{--</x-card>--}}
{{--</x-layouts.app>--}}


{{--@include('components.layouts._header')--}}
{{--@include('components.layouts._sidebar')--}}
{{--<x-layouts.app>--}}


<div class="mx-2">
    <h2>{{__('New category')}}</h2>
    <form wire:submit.prevent="submit">
        <x-input name="name"  type="text" wire:model="name" class="input form-control input-sm"  placeholder="Name"/>
        <div>@error('name') <span class="text-red-600 error">{{ $message }}</span> @enderror</div>

        <button  class="btn mt-1"  type="submit">{{__('Create')}}</button>
    </form>
</div>
{{--</x-layouts.app>--}}