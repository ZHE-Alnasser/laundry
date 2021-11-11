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

                <option {{(old('customer_id',$order->customer_id )==$customer->id )?'selected':''}} value="{{$customer->id  }}">{{ $customer->name }}</option>
            @endforeach
        </x-select>
    </div>

</div>


<div class="flex items-center mt-5">
    <div class="flex flex-col" x-cloak x-data="{isPickedUp:{{old('is_pickup',$order->is_pickup)?'true':'false'}} }">
        <div class="mx-2 flex">
            <input name="is_pickup" type="hidden" value="0">
            <input @click="isPickedUp =!isPickedUp" type="checkbox" class="checkbox checkbox-primary" id="is_pickup" name="is_pickup"
                   value="1"{{ (isset($order) && old('is_pickup',$order->is_pickup)) || old('is_pickup', 0) === 1 ? 'checked' : '' }} >
            <p class="flex-1 text-s mx-2 font-medium text-gray-600 "> {{__('Needs Pickup?')}}</p>
        </div>

        <div x-show="isPickedUp" x-transition>
            <div class="flex mx-2 mt-5 ">
                <div class="w-full">
                    <p>{{__('Pickup Frame')}} :<span class="text-red-600"> *</span></p>
                    <x-select class="select  " name="pickup_time_frame_id" id="pickup_time_frame_id">
                        @foreach($timeframes as $time)
                            {{--@dd($customer)--}}

                            <option  {{old('pickup_time_frame_id',$order->pickup_time_frame_id)==$time->id?'selected':''}} value="{{$time->id}}">{{$time->name}} {{$time->description}}</option>
                        @endforeach
                    </x-select>
                </div>

                <div class="mx-2 flex-col w-full">

                    <label>{{__('Request Pickup Date')}}</label>

                    {{--<x-input name="requested_pickup_date" type="text"  class="input"/>--}}
                    <x-input value="{{$order->requested_pickup_date}}" name="requested_pickup_date" type="text"
                             x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                             class="date-range input"/>

                </div>
            </div>
            <div class=" sm:flex w-full mt-5">


                <div class="mx-2 flex-col w-full">

                    <label>{{__('Agent Pickup Date')}}</label>
                    <div class="divUser">
                        <x-input value="{{$order->agent_picked_up_date}}" name="agent_picked_up_date" type="text"
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
            <input name="is_delivery" type="hidden" value="0">
            <input

                    type="checkbox"  @click="isDelivery =!isDelivery" class="checkbox checkbox-primary" id="is_delivery" name="is_delivery"
                    value="1"{{ (isset($order) && old('is_delivery',$order->is_delivery)) || old('is_delivery', 0) === 1 ? 'checked' : '' }}
            >
            <p class="flex-1 text-s mx-2 font-medium text-gray-600 "> {{__('Delivery Order?')}}</p>
        </div>
        <div x-show="isDelivery" x-transition>

            <div class="flex mx-2 mt-5">
                <div class="w-full">
                    <p>{{__('Delivery Frame')}} :<span class="text-red-600"> *</span></p>
                    <x-select  class="select  " name="delivery_time_frame_id" id="delivery_time_frame_id">
                        @foreach($timeframes as $time)
                            {{--@dd($customer)--}}

                            <option {{old('delivery_time_frame_id',$order->delivery_time_frame_id)==$time->id?'selected':''}} value="{{$time->id}}">{{$time->name}} {{$time->description}}</option>
                        @endforeach
                    </x-select>
                </div>
                <div class="mx-2 flex-col w-full">

                    <label>{{__('Request Delivery Date')}}</label>

                    {{--<x-input name="requested_pickup_date" type="text"  class="input"/>--}}
                    <x-input name="requested_delivery_date" type="text"
                             value="{{$order->requested_delivery_date}}"
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
            <x-input name="agent_delivered_date" type="text"
                     value="{{$order->agent_delivered_date}}"
                     x-init="$nextTick(() => {new flatpickr($el,{enableTime: true,
    dateFormat: 'Y-m-d H:i',    altInput: true})})"
                     class="input"/>
        </div>
    </div>
</div>

{{--</div>--}}
<div class="flex">
<div class="mx-2 mt-3">
    <label>{{__('Payment Method')}}:<span class="text-red-600"> *</span></label>
    <div  class="mt-1 flex-col" name="payment_method">

            <label class="mb-1 inline-flex items-center">

        <input class="w-5 h-5 mx-1 radio radio-primary" type="radio" required name="payment" value="cash"{{old('payment',$order->payment) === 'cash' ? "checked" : "" }}/>
                <span class="label-text">{{__('Cash') }}</span>
            </label>
        <label class="inline-flex mb-1 items-center">

        <input class="w-5 h-5 mx-1 radio radio-primary" type="radio" name="payment" value="cash"{{old('payment',$order->payment) === 'card' ? "checked" : "" }}/>
                <span class="label-text">{{__('Card') }}</span>
            </label>
        <label class="inline-flex items-center">

        <input class="w-5 h-5 mx-1 radio radio-primary" type="radio" name="payment" value="transfer"{{old('payment',$order->payment) === 'transfer' ? "checked" : "" }}/>
                <span class="label-text">{{__('Transfer')}}</span>
            </label>

        </div>
</div>
</div>

{{--todo enhance the way delivery was appears--}}
    <div class="w-full  mt-5 flex-1">
        <label>{{__('Delivery Address')}}</label>
        <div class=" sm:flex w-full mt-1">
        <x-select name="city_id" id="city_id" class="w-1/2">
            @foreach($cities as $city )
                <option {{$city->city_id==$city->id?'selected':''}} value="{{$city->id}}">{{ $city->name }} </option>
            @endforeach
        </x-select>
<span class="mx-2"> _ </span>

    <x-select name="district_id" id="district_id" class="w-1/2">
        @foreach($districts as $district )
            <option {{$district->district_id==$district->id?'selected':''}} value="{{$district->id}}">{{ $district->name }} </option>
        @endforeach
    </x-select>
    </div>
</div>

{{--</div>--}}
