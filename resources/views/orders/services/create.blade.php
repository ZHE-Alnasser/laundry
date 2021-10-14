{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>--}}
{{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}

{{--<!------ Include the above in your HEAD tag ---------->--}}

{{--<div class="container">--}}
{{--<div class="mt-10 clearfix">--}}
{{--<div class="col-md-12">--}}
{{--<table class="table table-bordered table-hover" id="tab_logic">--}}
{{--<thead>--}}
{{--<tr>--}}
{{--<th class="text-center"><p> # </p></th>--}}
{{--<th class="text-center"><p>{{__('Services')}}</p></th>--}}
{{--<th class="text-center"><p>{{__('Quantity')}}</p></th>--}}
{{--<th class="text-center"><p>{{__('Price')}}</p></th>--}}
{{--<th class="text-center"><p>{{__('Amount')}}</p></th>--}}
{{--</tr>--}}
{{--</thead>--}}
{{--<tbody>--}}
{{--@foreach($order->services as $item)--}}
{{--<tr >--}}
{{--<td>1</td>--}}

{{--<td><select name="services[]" class="input rounded-sm">--}}
{{--<option value="">-- choose service --</option>--}}
{{--@foreach ($services as $service)--}}
{{--<option {{ $item->service_id==$service->id ?'selected':''}} value="{{$service->id}}">--}}
{{--{{ $service->name }} (${{ number_format($service->price, 2) }})--}}
{{--</option>--}}
{{--@endforeach--}}
{{--</select> </td>--}}

{{--<input type="text" name='service[]'  placeholder='Enter Product Name' class="form-control"/>--}}

{{--<td><input type="number" name='qty[]' value="{{ $item->pivot->qty }}" placeholder='Enter Qty' class="input rounded-sm qty" step="0" min="0"/></td>--}}
{{--<td><input type="number" name='price[]' value="{{ $item->pivot->price}}" placeholder='Enter Unit Price' class="input rounded-sm price" step="0.00" min="0"/></td>--}}
{{--<td><input type="number" name='amount[]' value="{{ $item->pivot->amount}}" placeholder='0.00' class="input rounded-sm total" readonly/></td>--}}
{{--</tr>--}}
{{--@endforeach--}}
{{--<tr id='addr1'></tr>--}}


{{--<tr id='addr0'>--}}
{{--<td>1</td>--}}
{{--<td>--}}
{{--<select name="services[]" class="input rounded-sm">--}}
{{--<option value="">-- choose service --</option>--}}
{{--@foreach ($services as $service)--}}
{{--<option value="{{ $service->id }}">--}}
{{--{{ $service->name }} (${{ number_format($service->price, 2) }})--}}
{{--</option>--}}
{{--@endforeach--}}
{{--</select>--}}
{{--<input type="text" name='service[]'  placeholder='Enter Product Name' class="form-control"/>--}}
{{--</td>--}}
{{--<td><input type="number" name='qty[]' placeholder='Enter Qty' class="input rounded-sm qty" step="0" min="0"/></td>--}}
{{--<td><input type="number" name='price[]' placeholder='Enter Unit Price' class="input rounded-sm price" step="0.00" min="0"/></td>--}}
{{--<td><input type="number" name='amount[]' placeholder='0.00' class="input rounded-sm total" readonly/></td>--}}
{{--</tr>--}}
{{--<tr id='addr1'></tr>--}}
{{--</tbody>--}}
{{--</table>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row clearfix">--}}
{{--<div class="col-md-12">--}}
{{--<button type="button" id="add_row" class="bg-gray-200 p-2 rounded-sm float-endpull-left">+ {{__('Add Row')}}</button>--}}
{{--<button type="button" id='delete_row' class=" btn-outline  text-red-400">{{__('Delete Row')}}</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row clearfix" style="margin-top:20px">--}}
{{--<div class="pull-right col-md-4">--}}
{{--<table class="table table-bordered table-hover" id="tab_logic_total">--}}
{{--<tbody>--}}
{{--<tr>--}}
{{--<th class="text-center"><p>{{__('Sub Total')}}</p></th>--}}
{{--<td class="text-center"><input value="{{$order->sub_total}}" type="number" name='sub_total' placeholder='0.00' class="input rounded-sm" id="sub_total" readonly/></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<th class="text-center"><p>{{__('VAT')}}</p></th>--}}
{{--<td class="text-center"><div class="input-group flex mb-2 mb-sm-0">--}}
{{--<input type="number"  class="input rounded-sm" id="tax" value="15" placeholder="0">--}}
{{--<div class="input-group-addon  mt-4  mx-2"><p>%</p></div>--}}
{{--</div></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<th class="text-center"><p>{{__('Vat Amount')}}</p></th>--}}
{{--<td class="text-center"><input value="{{$order->vat}}" type="number" name='vat' id="vat" placeholder='0.00' class="input rounded-sm" readonly/></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<th class="text-center"><p>{{__('Grand Total')}}</p></th>--}}
{{--<td class="text-center"><input type="number" value="{{$order->total}}" name='total' id="total" placeholder='0.00' class="input rounded-sm" readonly/></td>--}}
{{--</tr>--}}
{{--</tbody>--}}
{{--</table>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<script>--}}


{{--$(document).ready(function(){--}}
{{--var i=1;--}}
{{--$("#add_row").click(function(){b=i-1;--}}
{{--$('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);--}}
{{--$('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');--}}
{{--i++;--}}
{{--});--}}
{{--$("#delete_row").click(function(){--}}
{{--if(i>1){--}}
{{--$("#addr"+(i-1)).html('');--}}
{{--i--;--}}
{{--}--}}
{{--calc();--}}
{{--});--}}

{{--$('#tab_logic tbody').on('keyup change',function(){--}}
{{--calc();--}}
{{--});--}}
{{--$('#tax').on('keyup change',function(){--}}
{{--calc_total();--}}
{{--});--}}


{{--});--}}

{{--function calc()--}}
{{--{--}}
{{--$('#tab_logic tbody tr').each(function(i, element) {--}}
{{--var html = $(this).html();--}}
{{--if(html!='')--}}
{{--{--}}
{{--var qty = $(this).find('.qty').val();--}}
{{--var price = $(this).find('.price').val();--}}
{{--$(this).find('.total').val(qty*price);--}}

{{--calc_total();--}}
{{--}--}}
{{--});--}}
{{--}--}}

{{--function calc_total()--}}
{{--{--}}
{{--total=0;--}}
{{--$('.total').each(function() {--}}
{{--total += parseInt($(this).val());--}}
{{--});--}}
{{--$('#sub_total').val(total.toFixed(2));--}}
{{--tax_sum=total/100*$('#tax').val();--}}
{{--$('#vat').val(tax_sum.toFixed(2));--}}
{{--$('#total').val((tax_sum+total).toFixed(2));--}}
{{--}--}}

{{--function removeField(index) {--}}
{{--this.fields.splice(index, 1);--}}
{{--}--}}
{{--</script>--}}


{{--<x-layouts.app>--}}


<div class="" x-data="handler">


    <h1 class="mt-8 mx-3">{{__('Add Items')}}</h1>
    <div class="mt-5 flex mx-3">
        <div class="w-1/2">
    <x-select   x-model="item" x-ref="itemEL" name="items[]" class="input w-1/2">
        <option >-- choose service --</option>
        @foreach ($items as $item)


            <option value="{{ $item->id }}">
               {{ $item->name }}
            </option>
        @endforeach
    </x-select>


        </div>
    <button type="button" class="btn mx-2 mt-1"
            @click="addNewField(service)">{{__('Add')}}</button>

    </div>
    <div class="overflow-x-auto mt-8 col">
        <table class="table border-collapse w-full text-center" id="majors_table">
            <thead class="border thead-light">
            {{--<th>#</th>--}}
            <th>{{__('Item Name')}}</th>
            <th>{{__('Service Name')}}</th>
            <th>{{__('Quantity')}}</th>
            <th>{{__('Price')}}</th>
            <th>{{__('Amount')}}</th>
            <th>{{__('Remove')}}</th>

            <th></th>

            </thead>
            <tbody>
            @foreach($order->services as $item)

                <tr>
                    {{--<td ></td>--}}

                    {{--<input type="hidden" x-model="field.id"/>--}}
                    {{--@dd($item)--}}
                    {{--@dd($item->pivot->service_id)--}}

                    {{--<td><x-select name="services[]" class="input rounded-sm">--}}
                            {{--<option value="">-- choose service --</option>--}}
                            {{--@foreach ($services as $service)--}}


                                {{--<option {{ $service->id==$item->pivot->service_id ?'selected':''}} value="{{$service->id}}">--}}
                                    {{--{{ $service->name }} (${{ number_format($service->price, 2) }})--}}
                                {{--</option>--}}
                            {{--@endforeach--}}
                        {{--</x-select> </td>--}}

                    {{--<input type="text" x-model="field.service"/></td>--}}
                    <td> <x-input class="input rounded-sm"
                                  name="qty[]" type="number" value="{{ $item->pivot->qty }}" /></td>
                    <td> <x-input class="input rounded-sm" name="price[]" type="number" value="{{ $item->pivot->price}}"/></td>
                    <td> <x-input class="input rounded-sm" name="amount[]" type="number" value="{{ $item->pivot->amount}}"/></td>

                    <td>

                        {{--<button type="button" class="bg-red-600 px-4 py-2 rounded-full text-xl text-white "--}}
                        {{--@click="removeField(field)">&times;--}}
                        {{--</button>--}}
                        <button type="button" class="itemToDelete">&times;
                        </button>
                    </td>

                </tr>
            @endforeach

            <template  x-for="(service, index) in services" :key="index">
                {{--<template x-for="item in items" :key="item.id"">--}}
                <tr >
                    <div >
                        {{--<td x-text="index + 1"></td>--}}

                        <td>  <h2 x-text="$refs.itemEL.options[$refs.itemEL.selectedIndex].text"></h2></td>
                        <td>
                            <input class="input rounded-sm" type="hidden" x-model="service.id"/>
                            {{--<input class="input rounded-sm" type="text" x-model="field.service"/>--}}
                            <select  x-model="service.service"
                                      x-bind:name="`services[${index}][service]`"

                                      {{--name="services[]" --}}
                                      class="input rounded-sm">
                                <option   >-- choose service --</option>
                                @foreach ($services as $service)


                                    <option x-model="x={{number_format($service->price, 2)}}" value="{{$service->id}}">
                                        {{ $service->name }} <p x-model="p">(${{ number_format($service->price, 2) }})</p>
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td> <input class="input rounded-sm"
                                      x-bind:name="`services[${index}][qty]`"

                                      {{--name="qty[]" type="number" --}}
                                      x-model="service.qty"/></td>
                        <td> <input  class="input rounded-sm"
                                 x-bind:name="`services[${index}][price]`"
                                    x-bind:placeholder="x"
                                 {{--name="price[]" --}}

                                 x-model="service.price"/>
                        {{--<h2 x-text="'{{__('Unit Price')}}: ' + x + '{{currency()}}'"><></h2>--}}
                        {{--<h2 x-text="'{{__('Unit Price')}}: ' + service.price + '{{currency()}}'"><></h2>--}}
                        {{--<h2 x-text.number="$refs.priceEL.options[$refs.priceEL.selectedIndex].text"></h2>--}}
                        </td>
                        <td> <input class="input rounded-sm"
                                    x-bind:name="`services[${index}][amount]`"
                                    {{--name="amount[]"  --}}type="number"
                                    x-bind:value="service.service * service.qty"
                                    x-model="service.amount"/></td>
                        {{--<td class="text-center"><h2  x-text="service.amount" ></h2></td>--}}

                        <td>

                            <button type="button" class="bg-red-600 px-4 py-2 rounded-full text-xl text-white "
                            @click="removeField(service)">&times;
                            </button>
                            {{--<button type="button" class="itemToDelete">&times;--}}
                            {{--</button>--}}
                        </td>
                    </div>
                </tr>

            </template>

            </tbody>

        </table>
    </div>



<div class="row clearfix"  style="margin-top:20px">
    <div class="pull-right col-md-4">
        <table class="table table-bordered table-hover" id="tab_logic_total">
            <tbody>
            <tr>
                <th class="text-center"><p>{{__('Sub Total')}}</p></th>
                {{--<td class="text-center"><h2  ></h2></td>--}}
                <td class="text-center"><input required value="{{$order->sub_total}}" type="number" name='sub_total' placeholder='0.00' class="input rounded-sm" id="sub_total" /></td>
            </tr>
            <tr>
                <th class="text-center"><p>{{__('VAT')}}</p></th>
                <td class="text-center"><div class="input-group flex mb-2 mb-sm-0">
                        <input required type="number"  class="input rounded-sm" id="tax" value="15" placeholder="0">
                        <div class="input-group-addon  mt-4  mx-2"><p>%</p></div>
                    </div></td>
            </tr>
            <tr>
                <th class="text-center"><p>{{__('Vat Amount')}}</p></th>
                <td class="text-center"><input required value="{{$order->vat}}" type="number" name='vat' id="vat" placeholder='0.00' class="input rounded-sm" /></td>
            </tr>
            <tr>
                <th class="text-center"><p>{{__('Grand Total')}}</p></th>
                <td class="text-center"><input required type="number" value="{{$order->total}}" name='total' id="total" placeholder='0.00' class="input rounded-sm" /></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

{{--@push('scripts')--}}
<script>


    document.addEventListener('alpine:init', () => {
        Alpine.data('handler', () => ({
            id: '{{count($order->services)}}',
            service:'',
            // price:0,
            x:0,
            p:0,
             {{--@php--}}

                    {{--foreach ($items as $item){--}}
                    {{--$service=optional($item->services()->whereItemId($item->id)->first())->value;--}}
                    {{--dd($service);--}}
                    {{--}--}}
                    {{--@endphp--}}

            quantity:1,
            total:0,
            total_amount: 0,
            paid: 0,
            change: 0,
            item:'',
            services: [
                // {id: 0, service: 'service', price: 0, amount: 9}

                {{--@php--}}
                {{--//  if($order->services)--}}
                {{--$index=0;--}}
                {{--foreach ($order->services as $item)--}}
                {{--{--}}
                {{--$service=$item->pivot->service_id;--}}
                {{--$price=$item->pivot->price;--}}
                {{--$quantity = $item->pivot->qty;--}}
                {{--$amount = $item->pivot->amount;--}}
                {{--echo  "{id: $index,service: '$service',price: '$price' ,quantity: '$quantity',amount,'$amount'},";--}}
                {{--$index++;--}}
                {{--}--}}


                {{--@endphp--}}

            ],

            addNewField(service) {
                // let notExist = true;
                console.log(service);
                let {id,price,name} = service;
                // if (this.items.length) {
                //     this.items.map(item => {
                //         if (item.id == id) {
                //             item.quantity = Number(item.quantity) + 1;
                //             item.total = item.price * item.quantity;
                //             // notExist = false;
                //         }
                //         return item;
                //     });
                // }

                // if (notExist) {

                    this.services.push({
                        id: id,
                        service: name,
                        price: price,
                        amount: price,
                        qty: 1,
                    });
                // }
            },
            removeField(service) {
                let position = this.services.indexOf(service);
                console.log(service,position)
                this.services.splice(position, 1);
                // this.id = this.id--;
                return true;
                // this.fields.splice(index, 1);
            },
            adjustBy(item, quantity = 1)
            {
                let newQuantity = item.quantity + (Number(quantity));
                this.adjustQuantity(item, newQuantity)

            },
            adjustQuantity(item, quantity = 1)
            {
                if (quantity < 1) return;
                item.quantity = Number(quantity);
                item.total = item.price * item.quantity;
                this.calculatePayments();
            },

            calculatePayments(calValue = 0)
            {
                this.total = this.fields.reduce((n, {total}) => n + total, 0);
                this.paid = calValue;

                this.change = Math.round(((this.paid - this.total_amount) + Number.EPSILON) * 100) / 100;
            },

        }))

    })


</script>
