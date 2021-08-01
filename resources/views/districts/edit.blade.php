<x-layouts.admin>
    {{--<x-card>--}}
    <x-feedback/>
    <div class="w-full">
        <div class="mt-8 p-4">
            <div>
                <x-form action="{{ route('districts.update',['district'=>$district->id]) }} " method="PUT">
                    @csrf

                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-10 flex-1">
                            <label>{{__('District Name')}}</label>
                            <div >
                                <x-input name="name" value="{{$district->name}}" class="input"/>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-10 flex-1">
                            <label>{{__('Code')}}</label>
                            <div >
                                <x-input name="code" value="{{$district->code}}" class="input"/>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-10 mt-5 flex-1">
                            <label>{{__('City')}}</label>

                                <x-select name="city_id" id="city_id" class="input">
                                    @foreach($cites as $city )
                                        <option {{$district->city_id==$city->id?'selected':''}} value="{{$city->id}}">{{ $city->name }} </option>
                                    @endforeach
                                </x-select>
                    </div>
                    </div>
                    <div class="flex p-2 mt-4 mx-10">
                        <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                        <input type="button" class="btn-cancel"
                               name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/districts/manage')"/>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
    {{--</x-card>--}}
</x-layouts.admin>
