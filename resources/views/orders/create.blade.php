<x-layouts.admin>
    <x-feedback/>
    <h1 class="px-6">{{__('Create').' '.__('Order')}}</h1>

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

            {{--<label>{{__('Name')}}<span class="text-red-600"> *</span></label>--}}
            {{--<x-input class="input" name="name" value="{{ old('name') }}"/>--}}



            {{--<div class="w-full mt-5">--}}
            {{--<label>{{__('Service')}}</label></div>--}}
            {{--<x-select name="service_id" id="service_id" class="input">--}}
                {{--@foreach($services as $service )--}}
                    {{--<option value="{{$service->id}}">{{ $service->name }} </option>--}}
                {{--@endforeach--}}
            {{--</x-select>--}}


            {{--<div class="inline-flex flex-row mt-5">--}}
                {{--<div class="w-full flex-col">--}}
                    {{--<label>{{__('Item Name')}}</label><span class="text-red-600"> *</span>--}}
                    {{--<x-input class="w-full" name="item_id" value="{{ old('item_id') }}" placeholder="{{__('item')}}"/>--}}
                    {{--<x-select name="item_id" id="item_id" class="input">--}}
                        {{--@foreach($items as $item )--}}
                            {{--<option value="{{$item->id}}">{{ $item->name }} </option>--}}
                        {{--@endforeach--}}
                    {{--</x-select>--}}
                {{--</div>--}}
                {{--<div class="w-1/2 flex-col mr-3">--}}
                    {{--<label>{{__('Quantity')}}</label>--}}
                    {{--<x-input type="number" class="input qty" name="quantity" value="1" step="any" required=""/>--}}
                {{--</div>--}}
            {{--</div>--}}


<div class="flex">
            <div class="flex-col w-1/2">
                <label>{{__('Employee Name')}}<span class="text-red-600"> *</span></label>

                <x-select class="ml-4 select  " name="customer_id" id="customer" >
                    @foreach($employees as $employee)
                        {{--@dd($customer)--}}

                        <option value="{{$employee->id}}">{{ $employee->full_name }}</option>
                    @endforeach
                </x-select>
            </div>
            <div class="mr-6 flex-col w-1/2">
                <label>{{__('Customer Name')}}<span class="text-red-600"> *</span></label>

                <x-select class="ml-4 select  " name="employee_id" id="employees" >
                    @foreach($customers as $customer)
                        {{--@dd($customer)--}}

                        <option { value="{{$customer->id}}">{{ $customer->full_name }}</option>
                    @endforeach
                </x-select>
            </div>
</div>
            <div class="mt-8">
            <p>{{__('Time Frame')}} :<span class="text-red-600"> *</span></p>
                <x-select class="ml-4 select  " name="time_frame_id" id="time_frame_id" >
                    @foreach($timeframes as $time)
                        {{--@dd($customer)--}}

                        <option { value="{{$time->id}}">{{ $time->name }}</option>
                    @endforeach
                </x-select>
            </div>
    <div class="inline-flex flex-row w-full mt-8">
        <div class="flex-col w-full">

            <label>{{__('Request Pickup Date')}}</label>

            {{--<x-input name="requested_pickup_date" type="text"  class="input"/>--}}
            <x-input name="requested_pickup_date" type="text"
                     x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                     class="date-range input"/>

        </div>

        <div class="mr-6 flex-col w-full ">
            <label>{{__('Request Delivery Date')}}</label>

            <x-input name="requested_delivery_date" type="text"
                     x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                     class="date-range input"/>

        </div>
    </div>

    <div class="inline-flex flex-row w-full mt-8">
        <div class=" flex-col w-full">

            <label>{{__('Agent Pickup Date')}}</label>
            <div class="divUser">
                <x-input name="agent_pickup_date" type="text"
                         x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                          class="input"/>
            </div>
        </div>

        <div class="mr-6 flex-col w-full">

            <label>{{__('Agent Deliver Date')}}</label>

            {{--<x-input name="agent_delivery_date" type="text"  class="input"/>--}}
            <x-input name="agent_delivery_date" type="text"
                     x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                     class="input"/>


            {{--<x-input--}}
                    {{--name="serviceOrders[1]['service_id']"--}}
                    {{--type="text"  class="input"/>--}}
            {{--<input name="serviceOrders[{1}]['order_id']" type="number"  class="input"/>--}}
            {{--<input name="serviceOrders[{1}][{1}]['service_id']" type="number"  class="input"/>--}}
            {{--<x-input name="serviceOrders[{1}][{1}]['item_id']" type="number"  class="input"/>--}}
            {{--<x-input name="serviceOrders[{1}][{1}]['quantity']`" type="number"  class="input"/>--}}
            {{--<x-input name="serviceOrders[{1}][{1}]['amount']`" type="number"  class="input"/>--}}

        </div>


    </div>


    {{--<script>--}}
        {{--flatpickr('#requested_pickup_date')--}}
        {{--flatpickr('#agent_pickup_date')--}}
        {{--flatpickr('#requested_delivery_date')--}}
        {{--flatpickr('#agent_delivery_date')--}}

    {{--</script>--}}


    <label class="label mt-8">{{__('Payment Method')}}</label>
    <x-select class=" select " name="payment" id="type"
              label="{{__('Payment')}}">
        <option value="1" >{{__('Cash')}}</option>
        <option value="2" >{{__('Card')}}</option>
        <option value="3" >{{__('Transfer')}}</option>
    </x-select>

    <div class="inline-flex flex-row w-full mt-8">
        {{--<div class="flex-col w-full">--}}
            {{--<label>{{__('Discount')}}</label>--}}

            {{--<x-input type="number" name="discount"  class="input"/>--}}

        {{--</div>--}}


        {{--<div class="mr-6 flex-col w-full">--}}
            {{--<label>{{__('VAT')}}</label>--}}
            {{--<x-input type="number"  name="vat"  class="input"/>--}}

        {{--</div>--}}

        {{--<div class="mr-6 flex-col w-full">--}}

            {{--<label>{{__('Sub Total')}}</label>--}}

            {{--<x-input type="number"  name="sub_total" class="input"/>--}}

        {{--</div>--}}

        {{--<div class="mr-6 flex-col w-full">--}}

            {{--<label>{{__('Total With VAT')}}</label>--}}
            {{--<x-input type="number" name="total"  class="input"/>--}}
        {{--</div>--}}
    </div>
    <div class="flex flex-col mt-8 md:flex-row">
        <div class="w-full  flex-1">
            <label class="label">{{__('Order Process')}}</label>
            <x-select class="ml-4 select" name="process" id="process"
                      label="{{__('state').' '.__('order')}}">
                <option value="1" >{{__('Ready for Pickup')}}</option>
                <option value="2" >{{__('Pickup')}}</option>
                <option value="3" >{{__('In Laundry')}}</option>
                <option value="4" >{{__('Ready for delivery')}}</option>
                <option value="5" >{{__('deliver')}}</option>

            </x-select>
        </div>
    </div>
    {{--<label>{{__('Pick Up Time Frame')}}</label>--}}
     {{--<p>{{__('please Indicate the time in hour between 7 and 21')}}</p>--}}
    {{--<x-input type="number" name="time"  class="input"/>--}}

    {{--<label>{{__('price')}}<span class="text-red-600"> *</span></label>--}}
            {{--<x-input class="input" name="price" type="text" value="{{ old('price') }}" />--}}

<div>
@include('orders.example')

</div>
            <div class="flex mt-3">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/services/manage')"/>
            </div>



    </x-form>
    </div>
</x-layouts.admin>

