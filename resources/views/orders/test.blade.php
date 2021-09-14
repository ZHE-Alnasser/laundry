<!-- responsive table-->
<div class="mt-2" x-data="services()">


    <table  class="max-w-5xl mx-auto table-auto">
        <thead class="justify-between">
        <tr class="bg-green-600">
            {{--<th class="px-16 py-2">--}}
                {{--<span class="text-gray-100 font-semibold">Avatar</span>--}}
            {{--</th>--}}
            <th class="px-6 py-2">
                <p class="text-gray-100 font-semibold">#</p>
            </th>

            <th class="px-6 py-2">
                <p class="text-gray-100 font-semibold">{{__('Service Name')}}</p>
            </th>

            <th class="px-6 py-2">
                <p class="text-gray-100 font-semibold">{{__('Item Name')}}</p>
            </th>

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
        <tbody class="bg-gray-200" x-model="" x-show="services.length">
        <template x-for="(service, index) in services" :key="index">
        <tr class="bg-white border-b-2 border-gray-200">

<td x-text="index + 1" >

</td>
            <td class="px-6 py-2">
                {{--<span class="text-center ml-2 px-8 font-semibold">John Doe</span>--}}
                <input type="hidden"  x-model="service.id"/>
                <select type="text"
                        name="service_id"
                        {{--name="service_id"--}}
                        {{--x-bind:name="`serviceOrders[${field.id}][service_id]`"--}}
                        {{--name="serviceOrders[1][service_id]`"--}}
                        class="input text-center ml-2 px-8 font-semibold">
                    @foreach(\App\Models\Service::all() as $service)
                        <option value="{{$service->id}}">{{$service->name}}</option>
                    @endforeach
                </select>
            </td>

            <td class="px-6 py-2">
                <select  type="text"
                         name="item_id"
                        {{--name="serviceOrders[1]['item_id']"--}}
                        class="input">
                    @foreach(\App\Models\Item::all() as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </td>
            <td class="px-6 py-2">
                <input x-model="field.quantity" type="text"
                       {{--name="serviceOrders[1]['quantity']"--}}
                               name="quantity"
                       class="input">
            </td>
            <td class="px-6 py-2">
                <input x-model="field.amount" type="text"
                       {{--name="serviceOrders[1]['amount']"--}}
                       name="amount"
                       class="input">
            </td>
            <td class="px-6 py-2">

                                        </svg>
                 <button type="button" @click="deleteService(service)" class="w-full"> <svg
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
        </tbody>
    </table>


    <div class="flex items-center text-sm mt-2">
        <a x-model="newService"
                @click="addService()">
            <svg class="w-3 h-3 mr-3 focus:outline-none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M12 4v16m8-8H4"></path>
            </svg>
        </a>
        <span>{{__('Click to add more')}}</span>
    </div>
</div>

<script>
function services() {
<!--x-data="{-->
return {
// filter: 'all',
services: [],
// editedTodo: null,

newService: '',

addService() {
this.services.push({
id: '{{count($serviceOrders)}}',
body: this.newService,
completed: false
});
this.newService = '';
},
//     let notExist = true;
//     console.log(services);
//     let {id, amount, name} = service;
//     if (this.services.length) {
//         this.services.map(service => {
//             if (service.id == id) {
//                 service.quantity = Number(service.quantity) + 1;
//                 service.amount = service.amount * service.quantity;
//                 notExist = false;
//             }
//             return item;
//         });
//     }
//
//     if (notExist) {
//         this.services.push({
//             id: id,
//             name: name,
//             quantity: 1,
//             amount: amount,
//             // total: price
//         });
//     }
// },
deleteService(service){
let position = this.services.indexOf(service);
this.services.splice(position, 1);
}
}
}
</script>