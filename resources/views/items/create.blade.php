<x-layouts.admin>
    <x-feedback/>
    <h1>{{__('Create').' '.__('Items')}}</h1>

    <div class="w-full  mt-6 px-6 py-4 overflow-hidden ">
        <x-form action="{{url('items')}}" method="post" has-files>
            @csrf
            <label>{{__('name').' '.__('items')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="name" value="{{ old('name') }}"/>

            {{--<label for="file-upload" class="btn">--}}
                {{--<span>--}}
                {{--@svg('heroicon-o-upload','h8 w-8 inline')--}}
                    {{--{{__('Upload image')}}--}}


                {{--</span>--}}
                {{--<input class="hidden" wire:model="categoryCover" id="file-upload" type="file"/>--}}
            {{--</label>--}}
            <div class="field mb-5">
                <label class="text-lg font-extrabold leading-8 tracking-tight text-gray-800 sm:text-lg sm:leading-9"
                       for="image">{{__('Add image for the Item')}}</label>
                <div class="mt-3">
                    {{--<x-media wire:ignore name="image" :entity="$item"/>--}}
                    <x-input class="input" type="file" id="image" name="image"/>
                </div>
            </div>

            <div class="flex mt-3">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/items/manage')"/>
            </div>
        </x-form>
    </div>
</x-layouts.admin>


