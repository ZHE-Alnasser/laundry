<x-layouts.app>
    <x-card>
    <x-feedback/>
    <div class="w-full">
        <div class="mt-8 p-4">
            <div>
                <x-form action="{{ route('items.update',['item'=>$item->id]) }} " method="PUT">
                    @csrf

                    <div class="flex flex-col md:flex-row">
                        <div class="w-full flex-1">
                            <label>{{__('Item Name')}}<span class="text-red-600"> *</span></label>
                            <div >
                                <x-input required  name="name" value="{{$item->name}}" class="input"/>
                            </div>
                        </div>
                    </div>

                        <div class="field text-right mx-10 mt-5">

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


                        {{--<div class="field mx-10 mt-5 w-full">--}}
                            {{--<label for="image">{{__('Edit Item Image')}}</label>--}}
                            {{--<div class="mt-3">--}}
                                {{--<x-input class="input" type="file" id="image" name="image"/>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--<div class="field mx-10 mb-5 mt-5">--}}
                        {{--<label class=" font-extrabold leading-8 tracking-tight  sm:leading-9"--}}
                               {{--for="image"><i data-feather="image" class="ml-1"></i>{{__('Add Image')}}</label>--}}
                        {{--<div class="mt-1">--}}

                            {{--<label--}}

                                    {{--for="file-upload" class=" ">--}}

                                {{--<x-input class="input" type="file" id="image" name="image"/>--}}
                            {{--</label>--}}
                        {{--</div>--}}

                    <div class="field mb-5 mt-5">

                        {{--<label class=" font-extrabold leading-8 tracking-tight  sm:leading-9"--}}
                               {{--for="image"><i data-feather="image" class="ml-1"></i>{{__('Add Image')}}</label>--}}
                        {{--<div class="mt-1">--}}

                            {{--<label--}}
                                    {{--for="file-upload" class=" ">--}}

                                {{--<x-input class="input" type="file" id="image" name="image"/>--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        <label for="file-upload" class="btn">
<span>
<i data-feather="image" class="ml-1"></i>
    {{__('Upload image')}}
</span>
                            <input class="hidden" id="file-upload"  name="image" type="file"/>
                        </label>

                    </div>
                        <div class="mt-5"> <h1>{{__('Update Services')}}</h1></div>
@include('items.services')

                    <div class="flex p-2 mt-8 sm:mx-10">
                        <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                        <input type="button" class="mx-2 btn-cancel"
                               name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/items/manage')"/>
                    </div>
                    </div>
                </x-form>

            </div>
        </div>
    </div>
    </x-card>
</x-layouts.app>
