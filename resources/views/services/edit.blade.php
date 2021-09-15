<x-layouts.admin>
    {{--<x-card>--}}
    <x-feedback/>
    <div class="w-full">
        <div class="mt-8 p-4">
            <div>
                <x-form action="{{ route('services.update',['service'=>$service->slug]) }} " method="PUT">
                    @csrf
                    {{--@method('PUT')--}}
<div class="mx-40">
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-2 flex-1">
                            <label>{{__('Service Name')}}</label>
                            <div >
                                <x-input name="name" value="{{$service->name}}" class="input"/>
                            </div>
                        </div>
                    </div>
                        <div class="flex flex-col mt-4 md:flex-row">
                        <div class="w-full mx-2 mt-4 flex-1">
                            <label>{{__('Item Name')}}</label>

                            <x-select name="item_id" class="input"  id="item_id">
                                @foreach($items as $item )
                                    <option {{$service->item_id==$item->id?'selected':''}} value="{{$item->id}}">{{ $item->name }} </option>
                                @endforeach
                            </x-select>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4 md:flex-row">
                     <div class="w-full mx-2 flex-1">
                       <label>{{__('Price')}}</label>

                          <x-input name="price" value="{{$service->price}}" class="input"/>
                        </div>
                      </div>
                    <div class="flex flex-col mt-4 md:flex-row">
                        <div class="w-full mx-2 flex-1">
                            <label>{{__('Description')}}</label>

                                <x-input name="description" value="{{$service->description}}" class="input"/>

                        </div>
                    </div>

                    <div class="flex p-2 mt-8">
                        <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                        <input type="button" class="btn-cancel"
                               name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/services/manage')"/>
                    </div>
</div>
                </x-form>
            </div>
        </div>
    </div>
    {{--</x-card>--}}
</x-layouts.admin>
