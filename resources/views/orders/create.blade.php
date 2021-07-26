<x-layouts.admin>
    <x-feedback/>
    <h1>{{__('Create').' '.__('Order')}}</h1>

    <div class="w-full  mt-6 px-6 py-4 bg-white  overflow-hidden sm:rounded-lg">
        <x-form action="{{url('orders')}}" method="post" has-files>
            @csrf
            {{--<label>{{__('Employee Name')}}<span class="text-red-600"> *</span></label>--}}

            {{--<select class="ml-4 select  appearance-none border-2 border-gray-200 rounded w-48" name="user_id" id="employees" >--}}
            {{--@foreach($employees as $employee)--}}
                {{--@dd($customer)--}}

                {{--<option value="{{ $employee->id }}">{{ $employee->name }}</option>--}}
            {{--@endforeach--}}
            {{--</select>--}}

            <label>{{__('Name')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="name" value="{{ old('name') }}"/>



            <div class="w-full mt-5">
            <label>{{__('Service')}}</label></div>
            <x-select name="service_id" id="service_id" class="input">
                @foreach($services as $service )
                    <option value="{{$service->id}}">{{ $service->name }} </option>
                @endforeach
            </x-select>


            <div class="inline-flex flex-row mt-5">
                <div class="w-full flex-col">
                    <label>{{__('Item Name')}}</label><span class="text-red-600"> *</span>
                    {{--<x-input class="w-full" name="item_id" value="{{ old('item_id') }}" placeholder="{{__('item')}}"/>--}}
                    <x-select name="item_id" id="item_id" class="input">
                        @foreach($items as $item )
                            <option value="{{$item->id}}">{{ $item->name }} </option>
                        @endforeach
                    </x-select>
                </div>
                <div class="w-1/2 flex-col mr-3">
                    <label>{{__('Quantity')}}</label>
                    <x-input type="number" class="input qty" name="quantity" value="1" step="any" required=""/>
                </div>
            </div>


            {{--<label>{{__('price')}}<span class="text-red-600"> *</span></label>--}}
            {{--<x-input class="input" name="price" type="text" value="{{ old('price') }}" />--}}



            <div class="flex mt-3">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/services/manage')"/>
            </div>
        </x-form>
    </div>
</x-layouts.admin>


