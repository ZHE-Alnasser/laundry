<div class="sm:flex">
    <div class="mx-2 sm:flex-col sm:w-1/2">
        <label>{{__('Employee Name')}}<span class="text-red-600"> *</span></label>

        <x-select required class="select  " name="employee_id" id="employees">
            @foreach($employees as $employee)
                {{--@dd($customer)--}}

                <option value="{{$employee->id}}"
                        @if(!is_null($order->employee_id) && $order->employee_id == $employee->id)
                        selected
                        @elseif( is_null($order->employee_id) && $employee->email == auth()->user()->email) selected
                        @endif
                >{{ $employee->name }}</option>
            @endforeach
        </x-select>
    </div>


    <div class="mx-2 sm:mr-6 mt-5 sm:mt-0  sm:flex-col sm:w-1/2">
        <label>{{__('Customer Name')}}<span class="text-red-600"> *</span></label>

        <x-select required class="select  " name="customer_id" id="customers">
            @foreach($customers as $customer)
                {{--@dd($customer)--}}

                <option value="{{$customer->id}}">{{ $customer->name }}</option>
            @endforeach
        </x-select>
    </div>
    {{--    <div class="flex mx-2 flex-col mt-5 md:flex-row">--}}
    {{--        <div class="w-full  flex-1">--}}
    {{--            <label class="label">{{__('Order Process')}}<span class="text-red-600"> *</span></label>--}}
    {{--            <x-select required class="select" name="process" id="process"--}}
    {{--                      label="{{__('state').' '.__('order')}}">--}}
    {{--                <option value="0">{{__('Ready for Pickup')}}</option>--}}
    {{--                <option value="1">{{__('Pickup')}}</option>--}}
    {{--                <option value="2">{{__('In Laundry')}}</option>--}}
    {{--                <option value="3">{{__('Ready for delivery')}}</option>--}}
    {{--                <option value="4">{{__('deliver')}}</option>--}}

    {{--            </x-select>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</div>


<div class="flex items-center mt-5">
    <div class="flex flex-col" >
        <div class="mx-2 flex">
            <input @click="isPickedUp =!isPickedUp" type="checkbox" class="checkbox checkbox-accent" id="is_pickup" name="is_pickup"
            >
            <p class="flex-1 text-s mx-2 font-medium text-gray-600 "> {{__('Needs Pickup?')}}</p>
        </div>

        <div x-show="isPickup" x-transition>
            <div class="flex mx-2 mt-5 ">
                <div class="w-full">
                    <p>{{__('Pickup Frame')}} :<span class="text-red-600"> *</span></p>
                    <x-select required class="select  " name="delivery_time_frame_id" id="delivery_time_frame_id">
                        @foreach($timeframes as $time)
                            {{--@dd($customer)--}}

                            <option value="{{$time->id}}">{{$time->name}} {{$time->description}}</option>
                        @endforeach
                    </x-select>
                </div>

                <div class="mx-2 flex-col w-full">

                    <label>{{__('Request Pickup Date')}}</label>

                    {{--<x-input name="requested_pickup_date" type="text"  class="input"/>--}}
                    <x-input name="requested_pickup_date" type="text"
                             x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                             class="date-range input"/>

                </div>
            </div>
            <div class=" sm:flex w-full mt-5">


                <div class="mx-2 flex-col w-full">

                    <label>{{__('Agent Pickup Date')}}</label>
                    <div class="divUser">
                        <x-input name="agent_pickup_date" type="text"
                                 x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                                 class="input"/>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="divider divider-vertical opacity-50"></div>

    <div class="flex flex-col" x-cloak x-data="{isDelivery:{{old('is_delivery',$order->is_delivery)?'true':'false'}} }">
        <div class="mx-2 flex">
            <input type="checkbox"  @click="isDelivery =!isDelivery" class="checkbox checkbox-accent" id="is_delivery" name="is_delivery"
            >
            <p class="flex-1 text-s mx-2 font-medium text-gray-600 "> {{__('Delivery Order?')}}</p>
        </div>
        <div x-show="isDelivery" x-transition>

            <div class="flex mx-2 mt-5">
                <div class="w-full">
                    <p>{{__('Delivery Frame')}} :<span class="text-red-600"> *</span></p>
                    <x-select required class="select  " name="delivery_time_frame_id" id="delivery_time_frame_id">
                        @foreach($timeframes as $time)
                            {{--@dd($customer)--}}

                            <option value="{{$time->id}}">{{$time->name}} {{$time->description}}</option>
                        @endforeach
                    </x-select>
                </div>
                <div class="mx-2 flex-col w-full">

                    <label>{{__('Request Delivery Date')}}</label>

                    {{--<x-input name="requested_pickup_date" type="text"  class="input"/>--}}
                    <x-input name="requested_delivery_date" type="text"
                             x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                             class="date-range input"/>

                </div>
            </div>

        </div>




        {{--    <div class="mt-5 sm:mt-0 mx-2 flex-col w-full ">--}}
        {{--        <label>{{__('Request Delivery Date')}}</label>--}}

        {{--        <x-input name="requested_delivery_date" type="text"--}}
        {{--                 x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"--}}
        {{--                 class="date-range input"/>--}}

        {{--    </div>--}}

        {{--    <div class="mx-2 mt-5 sm:mt-0 flex-col w-full">--}}

        {{--        <label>{{__('Agent Deliver Date')}}</label>--}}

        {{--        --}}{{--<x-input name="agent_delivery_date" type="text"  class="input"/>--}}
        {{--        <x-input name="agent_delivery_date" type="text"--}}
        {{--                 x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"--}}
        {{--                 class="input"/>--}}


        {{--    </div>--}}


    </div>
    <div class="divider divider-vertical opacity-50"></div>
    <div class="mx-2">

        <label>{{__('Delivered Date')}}</label>
        <div class="divUser">
            <x-input name="agent_delivery_date" type="text"
                     x-init="$nextTick(() => {new flatpickr($el,{enableTime: true,
    dateFormat: 'Y-m-d H:i',    altInput: true})})"
                     class="input"/>
        </div>
    </div>
</div>

{{--</div>--}}


<label class="label  mt-5">{{__('Payment Method')}}<span class="text-red-600"> *</span></label>
<x-select required class=" select mx-2 " name="payment" id="type"
          label="{{__('Payment')}}">
    <option value="1">{{__('Cash')}}</option>
    <option value="2">{{__('Card')}}</option>
    <option value="3">{{__('Transfer')}}</option>
</x-select>


