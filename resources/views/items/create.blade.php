<x-layouts.app>
    <x-card>

    <h1 class="px-6">{{__('Create').' '.__('Items')}}</h1>

    <div class="w-full  mt-6 px-6 py-4 overflow-hidden ">
        <x-form action="{{url('items')}}" method="post" has-files>
            @csrf
            <label>{{__('Item Name')}}<span class="text-red-600" > *</span></label>
            <x-input required class="input" name="name" value="{{ old('name') }}"/>

            <div class="field mb-5 mt-5">
                <label class=" font-extrabold leading-8 tracking-tight  sm:leading-9"
                       for="image">{{__('Add Image')}}</label>
                <div class="mt-1">

                    {{--<label--}}
                    {{--for="file-upload" class=" ">--}}

                    {{--<x-input class="input" type="file" id="image" name="image"/>--}}
                    {{--</label>--}}
                    {{--</div>--}}

                    <label for="file-upload" class="btn">
<span>
{{-- @svg('heroicon-o-upload','h8 w-8 inline')--}}
    <i data-feather="image" class="ml-1"></i>
    {{__('Upload image')}}
</span>
                        <input class="hidden"  id="file-upload" name="image" type="file"/>
                    </label>





                </div>
            </div>
            <div class="mt-5"> <h1>{{__('Create Services')}}</h1></div>
            @include('items.services')

            <div class="flex mt-8">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="mx-2 btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/items/manage')"/>
            </div>
        </x-form>
    </div>
    </x-card>
</x-layouts.app>



