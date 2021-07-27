<x-layouts.admin>
    <x-feedback/>
    <h1>{{__('Create').' '.__('Services')}}</h1>

    <div class="mt-6 px-6 py-4 overflow-hidden ">
        <x-form action="{{url('services')}}" method="post" has-files>
            @csrf
            <label>{{__('Service Name')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="name" value="{{ old('name') }}"/>

            {{--<label>{{__('Item Name')}}</label><span class="text-red-600"> *</span>--}}
            {{--<x-input class="w-full" name="item_id" value="{{ old('item_id') }}" placeholder="{{__('item')}}"/>--}}
            {{--<x-select name="item_id" id="item_id" class="input">--}}
                {{--@foreach($items as $item )--}}
                    {{--<option value="{{$item->id}}">{{ $item->name }} </option>--}}
                {{--@endforeach--}}
            {{--</x-select>--}}

            <label>{{__('Price')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="price" type="text" value="{{ old('price') }}" />

            <label>{{__('Description')}}</label>
            <x-input class="input" name="description" type="text" value="{{ old('description') }}" />



            <div class="flex mt-3">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/services/manage')"/>
            </div>
        </x-form>
    </div>
</x-layouts.admin>


