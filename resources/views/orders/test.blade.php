<!-- responsive table-->
<div class="row mt-2" x-data="handler() ">

    <div class="col">
    <table  class="max-w-5xl mx-auto table-auto" id="services_table">
        <thead class="justify-between">
        <tr class="bg-green-600">
            {{--<th class="px-16 py-2">--}}
                {{--<span class="text-gray-100 font-semibold">Avatar</span>--}}
            {{--</th>--}}
            {{--<th class="px-6 py-2">--}}
                {{--<p class="text-gray-100 font-semibold">#</p>--}}
            {{--</th>--}}

            <th class="px-4 py-2">
                <p class="text-gray-100 font-semibold">{{__('Service Name')}}</p>
            </th>

            {{--<th class="px-6 py-2">--}}
                {{--<p class="text-gray-100 font-semibold">{{__('Item Name')}}</p>--}}
            {{--</th>--}}

            <th class="px-6 py-2">
                <p class="text-gray-100 font-semibold">{{__('Quantity')}}</p>
            </th>

            <th class="px-6 py-2">
                <p class="text-gray-100 font-semibold">{{__('Amount')}}</p>
            </th>
            <th class="px-6 py-2">
                <p class="text-gray-100 font-semibold">{{__('Remove')}}</p>
            </th>
        </tr>
        </thead>
        <tbody class="bg-gray-200" >

        {{--<template x-for="service in services" :key="service.id">--}}
        <template x-for="(field, index) in fields" :key="index">
        <tr class="bg-white border-b-2 border-gray-200" >
            <td x-text="index + 1"></td>
{{--<td x-text="services.length" >--}}

{{--</td>--}}
            <td class="px-2 py-2">
                {{--<span class="text-center ml-2 px-8 font-semibold">John Doe</span>--}}
                <input type="hidden"  x-model="field.id"/>
                {{--<input type="hidden"   />--}}
                <select type="text"  x-model="field.service"
                        {{--name="service_id[]"--}}
                        {{--name="service_id"--}}
                        {{--x-bind:name="`serviceOrders[${field.id}][service_id]`"--}}
                        x-bind:name="`serviceOrders[${field.id}][service]`"
                                {{--name="service_id[]"--}}
                        class="input text-center ml-2 px-8 font-semibold">
                    @foreach(\App\Models\Service::all() as $service)
                        <option value="{{$service->id}}">{{$service->name}}</option>
                    @endforeach
                </select>
            </td>

            {{--<td class="px-2 py-2">--}}
                {{--<select  type="text"--}}
                         {{--x-model="service.item_id"--}}
                         {{--name="item_id[]"--}}
                        {{--name="serviceOrders[service]['item_id']"--}}
                        {{--class="input">--}}
                    {{--@foreach(\App\Models\Item::all() as $item)--}}
                        {{--<option value="{{$item->id}}">{{$item->name}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</td>--}}
            <td class="px-2 py-2">
                <input  type="text"
                       {{--x-model="newService"--}}
                                x-model="field.quantity"
                       {{--name="quantity[]"--}}
                               {{--name="serviceOrders[${field.id}]['quantity']"--}}
                        x-bind:name="`serviceOrders[${field.id}][quantity]`"

                        class="input">
            </td>
            <td class="px-2 py-2">
                <input x-model="field.amount" type="number"
                       x-bind:name="`serviceOrders[${field.id}][amount]`"
                       {{--name="serviceOrders[$field.id]['amount']"--}}
                       {{--name="amount[]"--}}
                       class="input">
            </td>
            <td class="px-2 py-2">

                                        </svg>
                 <button type="button" @click="removeField(index)" class="w-full"> <svg
                         xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 text-red-700"
                         viewBox="0 0 20 20"
                         fill="currentColor"
                 >
                                                <path
                                                        fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"
                                                />
                                            </svg></button>
              </span>
            </td>

        </tr>
        </template>
        <tfoot>
        <tr>
            <td colspan="4" class="text-right"><button type="button" class="btn btn-info" @click="addNewField()">+ Add Row</button></td>
        </tr>
        </tfoot>
        </tbody>
    </table>

    </div>
    {{--<div class="flex items-center addColumn text-sm mt-2">--}}
        {{--<a  @click="addNewField()">--}}
            {{--<svg class="w-3 h-3 mr-3 focus:outline-none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">--}}
                {{--<path d="M12 4v16m8-8H4"></path>--}}
            {{--</svg>--}}
        {{--</a>--}}
        {{--<span>{{__('Click to add more')}}</span>--}}
    {{--</div>--}}
</div>

<script>
{{--function handler() {--}}
{{--<!--x-data="{-->--}}
{{--return {--}}
{{--// filter: 'all',--}}
{{--services: [],--}}
{{--// // editedTodo: null,--}}
{{--//--}}
{{--// newService: '',--}}

{{--addService(){--}}
{{--this.services.push({--}}
    {{--id: this.services.length + 1,--}}
    {{--id: '{{count($serviceOrders)}}',--}}
    {{--// item_id:'',--}}
    {{--service_id:'',--}}
    {{--quantity:'',--}}
    {{--amount:''--}}
    {{--// body: this.newService,--}}
    {{--// completed: false--}}
{{--});--}}
{{--// this.newService = '';--}}
{{--},--}}
{{--newService: '',--}}

{{--///     let notExist = true;--}}
{{--//     console.log(services);--}}
{{--//     let {id, amount, name} = service;--}}
{{--//     if (this.services.length) {--}}
{{--//         this.services.map(service => {--}}
{{--//             if (service.id == id) {--}}
{{--//                 service.quantity = Number(service.quantity) + 1;--}}
{{--//                 service.amount = service.amount * service.quantity;--}}
{{--//                 notExist = false;--}}
{{--//             }--}}
{{--//             return item;--}}
{{--//         });--}}
{{--//     }--}}
{{--//--}}
{{--//     if (notExist) {--}}
{{--//         this.services.push({--}}
{{--//             id: id,--}}
{{--//             name: name,--}}
{{--//             quantity: 1,--}}
{{--//             amount: amount,--}}
{{--//             // total: price--}}
{{--//         });--}}
{{--//     }--}}
{{--// },--}}
{{--// deleteService(service){--}}
{{--// let position = this.services.indexOf(service);--}}
{{--// this.services.splice(position, 1);--}}
{{--// }--}}

    {{--removeField(index) {--}}
        {{--this.services.splice(index, 1);--}}
    {{--}--}}
{{--}--}}
{{--}--}}
{{--</script>--}}
function handler() {
    return {
        id: '{{count($serviceOrders)}}',
        serviceName:'',
        quantityName:'',
        amountName:'',
        fields: [
            @php
                if($order->services)
$index=0;
foreach ($serviceOrders as $service)
{
     $amount = optional($service->amount()->whereOrderId($order->id)->first())->value;
     $description = optional($service->quantity()->whereOrderId($order->id)->first())->value;

  echo  "{id: $index,quantity: '$quantity',amount: '$amount' ,service: '$service->id'},";
$index++;
}

            @endphp
        ],
        addNewField() {
            this.fields.push({
                id: this.id++,
                quantity: '',
                amount: '',
                service: ''
            });
        },
        removeField(index) {
            this.fields.splice(index, 1);
        }
    }
}
</script>
{{--<script>--}}
    {{--document.addEventListener('alpine:initializing', () => {--}}
        {{--Alpine.data('services', () => ({--}}

            {{--items: [],--}}


            {{--addItem(service) {--}}
                {{--let notExist = true;--}}
                {{--console.log(service);--}}
                {{--let {id, price, name} = service;--}}
                {{--if (this.items.length) {--}}
                    {{--this.items.map(item => {--}}
                        {{--if (item.id == id) {--}}
                            {{--item.quantity = Number(item.quantity) + 1;--}}
                            {{--item.amount = item.price * item.quantity;--}}
                            {{--notExist = false;--}}
                        {{--}--}}
                        {{--return item;--}}
                    {{--});--}}
                {{--}--}}

                {{--if (notExist) {--}}
                    {{--this.items.push({--}}
                        {{--id: id,--}}
                        {{--name: name,--}}
                        {{--quantity: 1,--}}
                        {{--amount: amount,--}}
                        {{--// total: price--}}
                    {{--});--}}
                {{--}--}}
                {{--// this.calculatePayments();--}}
            {{--},--}}

        {{--}))--}}
    {{--})--}}

{{--</script>--}}
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
