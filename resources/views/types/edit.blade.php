<x-layouts.admin>
    {{--<x-card>--}}
    <x-feedback/>
    <div class="w-full">
        <div class="mt-8 p-4">
            <div>
                <x-form action="{{ route('types.update',['type'=>$type->id]) }} " method="PUT">
                    @csrf

                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-40 flex-1">
                            <label>{{__('Type Name')}}</label>
                            <div >
                                <x-input name="name" value="{{$type->name}}" class="input"/>
                            </div>
                        </div>
                    </div>

                    <div class="flex p-2 mt-4 mx-40">
                        <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                        <input type="button" class="btn-cancel"
                               name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/types/manage')"/>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
    {{--</x-card>--}}
</x-layouts.admin>
