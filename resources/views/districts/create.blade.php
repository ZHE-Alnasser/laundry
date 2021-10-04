<x-layouts.app>
    <x-card>
    <x-feedback/>
    <h1 class="px-6">{{__('Create').' '.__('Districts')}}</h1>

    <div class=" mt-6 px-6 py-4 overflow-hidden">
        <x-form action="{{url('districts')}}" method="post" has-files>
            @csrf
            <label>{{__('District Name')}}<span class="text-red-600"> *</span></label>
            <x-input required  class="input" name="name" value="{{ old('name') }}"/>

            <div class="mt-5">
                <div><label>{{__('City')}}</label><span class="text-red-600"> *</span></div>
                <x-select required name="city_id" id="city_id" class="select">
                    @foreach($cities as $city )
                        <option value="{{$city->id}}">{{ $city->name }} </option>
                    @endforeach
                </x-select>
            </div>
            <div class="mt-5">
            <label>{{__('Code')}}<span class="text-red-600"> *</span></label>
            <x-input required class="input" name="code" value="{{ old('code') }}"/>
            </div>

            <div class="flex mt-8">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/items/manage')"/>
            </div>
        </x-form>
    </div>

</x-card>
</x-layouts.app>


