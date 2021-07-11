<x-layouts.admin>
    {{--<x-card>--}}
    <x-feedback/>
    <div class="w-full">
        <div class="mt-8 p-4">
            <div>
                <x-form action="{{ route('services.update',['service'=>$service->id]) }} " method="PUT">
                    @csrf
                    {{--@method('PUT')--}}

                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-2 flex-1">
                            <label>{{__('Service Name')}}</label>
                            <div class="divUser">
                                <x-input name="name" value="{{$service->name}}" class="input"/>
                            </div>
                        </div>
                        <div class="w-full mx-2 flex-1">
                        <label>{{__('Description')}}</label>
                        <div class="divUser">
                        <x-input name="description" value="{{$service->description}}" class="input"/></div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-2 flex-1">
                            <label>{{__('Price')}}</label>
                            <div class="divUser">
                                <x-input name="price" value="{{$service->price}}" class="input"/>
                            </div>
                        </div>
                    </div>

                    <div class="flex p-2 mt-4">
                        <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                        <input type="button" class="btn-cancel"
                               name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/users/manage')"/>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
    {{--</x-card>--}}
</x-layouts.admin>
