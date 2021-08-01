<x-layouts.admin>
    {{--<x-card>--}}
    <x-feedback/>
    <div class="w-full">
        <div class="mt-8 p-4">
            <div>
                <x-form action="{{ route('items.update',['item'=>$item->id]) }} " method="PUT">
                    @csrf

                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-10 flex-1">
                            <label>{{__('Item Name')}}</label>
                            <div >
                                <x-input name="name" value="{{$item->name}}" class="input"/>
                            </div>
                        </div>
                    </div>

                        <div class="field text-right mx-10 ">

                                @if($item->hasMedia('items') )
                                    <div class="object-cover mb-5 ">
                                        @foreach($item->getMedia('items') as $attachment)
                                            <div class="h-25 w-25">
                                                {{$attachment}}
                                            </div>
                                        @endforeach
                                    </div>
                                @endif


                        </div>

            <div class="flex flex-col md:flex-row">
                        <div class="field mb-5 mx-10 mt-6 w-full">
                            <label for="image">{{__('Edit Item Image')}}</label>
                            <div class="mt-3">
                                <x-input class="input" type="file" id="image" name="image"/>
                            </div>
                        </div>
            </div>

                    <div class="flex p-2 mt-4 mx-10">
                        <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                        <input type="button" class="btn-cancel"
                               name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/items/manage')"/>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
    {{--</x-card>--}}
</x-layouts.admin>
