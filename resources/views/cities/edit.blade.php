<x-layouts.admin>
    {{--<x-card>--}}
    <x-feedback/>
    <div class="w-full">
        <div class="mt-8 p-4">
            <div>
                <x-form action="{{ route('cities.update',['city'=>$city->id]) }} " method="PUT">
                    @csrf

                    <div class="flex flex-col md:flex-row">
                        <div class="w-full sm:mx-10 flex-1">
                            <label>{{__('City Name')}}</label>
                            <div >
                                <x-input name="name" value="{{$city->name}}" class="input"/>
                            </div>
                        </div>
                    </div>

                    <div class="flex p-2 mt-8 sm:mx-10">
                        <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                        <input type="button" class="btn-cancel"
                               name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/cities/manage')"/>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
    {{--</x-card>--}}
</x-layouts.admin>
