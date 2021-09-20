<x-layouts.admin>
    {{--<x-card>--}}
    <x-feedback/>


    <div class="w-full">
        <div class="mt-8 p-4">
            <div>
                <x-form action="{{ route('orders.update',['order'=>$order->id]) }} " method="PUT">
                    @csrf
                  <div class="inline-flex flex-row w-full">
                    <div class="flex-col w-1/2">
                    <label>{{__('Employee Name')}}<span class="text-red-600"> *</span></label>

                    <x-select class="ml-4 select  " name="customer_id" id="employees" >
                        @foreach($employees as $employee)
                            {{--@dd($customer)--}}

                            <option {{ $order->employee_id==$employee->id?'selected':''}} value="{{$employee->id}}">{{ $employee->full_name }}</option>
                        @endforeach
                    </x-select>
                    </div>
                      <div class="mr-6 flex-col w-1/2">
                        <label>{{__('Customer Name')}}<span class="text-red-600"> *</span></label>

                    <x-select class="ml-4 select  " name="employee_id" id="employees" >
                        @foreach($customers as $customer)
                            {{--@dd($customer)--}}

                            <option {{ $order->customer_id==$customer->id?'selected':''}} value="{{$customer->id}}">{{ $customer->full_name }}</option>
                        @endforeach
                    </x-select>
                      </div>
                    </div>

                    <div class="mt-8">
                        <p>{{__('Time Frame')}} :<span class="text-red-600"> *</span></p>
                        <x-select class="ml-4 select  " name="time_frame_id" id="time_frame_id" >
                            @foreach($timeframes as $time)
                                {{--@dd($customer)--}}

                                <option  {{ $order->time_frame_id==$time->id?'selected':''}} value="{{$time->id}}">{{ $time->name }}</option>
                            @endforeach
                        </x-select>
                    </div>
                   {{--<div class="mx-40">--}}
                        {{--<div class="flex flex-col md:flex-row">--}}
                            {{--<div class="w-full mx-2 flex-1">--}}
                                {{--<label>{{__('Service Name')}}</label>--}}
                                {{--<div >--}}
                                    {{--<x-input name="service_id" value="{{$services->name}}" class="input"/>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="flex flex-col mt-4 md:flex-row">--}}
                            {{--<div class="w-full mx-2 flex-1">--}}
                                {{--<label>{{__('Item Name')}}</label>--}}

                                {{--<select name="item_id" class="input"  id="item_id">--}}
                                    {{--@foreach($items as $item )--}}
                                        {{--<option {{$services->item_id==$item->id?'selected':''}} value="{{$item->id}}">{{ $item->name }} </option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    <div class="inline-flex flex-row w-full mt-8">
                        <div class="flex-col w-full">

                                <label>{{__('Request Pickup Date')}}</label>

                                    <x-input name="requested_pickup_date" type="text" value="{{$order->requested_pickup_date}}" class="input"/>


                        </div>

                        <div class="mr-6 flex-col w-full ">
                                <label>{{__('Request Delivery Date')}}</label>

                                    <x-input name="requested_delivery_date" type="text"
                                    x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                                    value="{{$order->requested_delivery_date}}" class="date-range input"/>

                        </div>
                    </div>

                    <div class="inline-flex flex-row w-full mt-8">
                        <div class=" flex-col w-full">

                                <label>{{__('Agent Pickup Date')}}</label>
                                <div class="divUser">
                                    <x-input name="agent_pickup_date" type="text"
                                             x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                                             value="{{$order->agent_pickup_date}}" class="input"/>
                                </div>
                            </div>

                        <div class="mr-6 flex-col w-full">

                                <label>{{__('Agent Deliver Date')}}</label>

                                    <x-input name="agent_delivery_date" type="text" value="{{$order->agent_delivery_date}}" class="input"/>

                            </div>


                    </div>


                    <script>
                        flatpickr('#requested_pickup_date')
                        flatpickr('#agent_pickup_date')
                        flatpickr('#requested_delivery_date')
                        flatpickr('#agent_delivery_date')

                    </script>


                    <label class="label mt-8">{{__('Payment Method')}}</label>
                    <x-select class=" select " name="payment" id="type"
                            label="{{__('Payment')}}">
                        <option value="1" {{$order->payment === 'cash' ? "selected" : "" }}>{{__('Cash')}}</option>
                        <option value="2" {{$order->payment === 'card' ? "selected" : "" }}>{{__('Card')}}</option>
                        <option value="2" {{$order->payment === 'transfer' ? "selected" : "" }}>{{__('Transfer')}}</option>
                    </x-select>

                    {{--<div class="inline-flex flex-row w-full mt-8">--}}
                        {{--<div class="flex-col w-full">--}}
                                {{--<label>{{__('Discount')}}</label>--}}

                                    {{--<x-input name="discount" value="{{$order->discount}}" class="input"/>--}}

                            {{--</div>--}}


                        {{--<div class="mr-6 flex-col w-full">--}}
                                {{--<label>{{__('VAT')}}</label>--}}
                                    {{--<x-input name="vat" value="{{$order->vat}}" class="input"/>--}}

                        {{--</div>--}}

                        {{--<div class="mr-6 flex-col w-full">--}}

                        {{--<label>{{__('Total Without VAT')}}</label>--}}
                                    {{--<x-input name="without_vat" value="{{$order->sub_total}}" class="input"/>--}}

                        {{--</div>--}}

                        {{--<div class="mr-6 flex-col w-full">--}}

                        {{--<label>{{__('Total With VAT')}}</label>--}}
                                    {{--<x-input name="total" value="{{$order->total}}" class="input"/>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="flex flex-col mt-8 md:flex-row">
                            <div class="w-full  flex-1">
                        <label class="label">{{__('Order Process')}}</label>
                        <x-select class="ml-4 select" name="process" id="process"
                                  label="{{__('state').' '.__('order')}}">
                            <option value="1" {{$order->state === '1' ? "selected" : "" }}>{{__('Ready for Pickup')}}</option>
                            <option value="2" {{$order->state === '2' ? "selected" : "" }}>{{__('Pickup')}}</option>
                            <option value="3" {{$order->state === '3' ? "selected" : "" }}>{{__('In Laundry')}}</option>
                            <option value="4" {{$order->state === '4' ? "selected" : "" }}>{{__('Ready for delivery')}}</option>
                            <option value="4" {{$order->state === '5' ? "selected" : "" }}>{{__('deliver')}}</option>

                        </x-select>
                            </div>
                        </div>

                    {{--<div class="col-sm-offset-2 mt-8">--}}
                        {{--<table class="table table-striped">--}}
                            {{--<thead>--}}

                            {{--<tr>--}}
                                {{--<td>#</td>--}}
                                {{--<th>item</th>--}}
                                {{--<th>Service</th>--}}
                                {{--<th>Quantity</th>--}}
                                {{--<th>Price</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--@foreach($order->services as $item)--}}
                                {{--<tr>--}}
                                    {{--<td>{{$item->pivot->order_id}} </td>--}}
                                    {{--<td>{{$item->pivot->item_id}} </td>--}}
                                    {{--<td>{{$item->name}} </td>--}}
                                    {{--<td>{{$item->pivot->qty}}</td>--}}
                                    {{--<td>{{$item->pivot->amount}}</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</div>--}}

                    @include('orders.example')
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
