<x-layouts.admin>
    <x-feedback/>
    <h1>{{__('Create').' '.__('Services')}}</h1>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <x-form action="{{url('services')}}" method="post" has-files>
            @csrf
            <label>{{__('name').' '.__('services')}}<span class="text-red-600"> *</span></label>
            <x-input class="w-full" name="name" value="{{ old('name') }}"/>

            <label>{{__('Item Name')}}</label><span class="text-red-600"> *</span>
            {{--<x-input class="w-full" name="item_id" value="{{ old('item_id') }}" placeholder="{{__('item')}}"/>--}}
            <x-select name="item_id" id="item_id">
                @foreach($items as $item )
                    <option value="{{$item->id}}">{{ $item->name }} </option>
                @endforeach
            </x-select>

            <label>{{__('price')}}<span class="text-red-600"> *</span></label>
            <x-input class="w-full" name="price" type="text" value="{{ old('price') }}" />



            <div class="flex mt-3">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/services/manage')"/>
            </div>
        </x-form>
    </div>
</x-layouts.admin>


