{
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


            <template  x-for="(service, index) in services" :key="index">

                <tr >
                    <div >


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
                        <td> <input class="input rounded-sm" type="number"
                                      x-bind:name="`services[${index}][qty]`"


                                      x-model="service.qty"/></td>
                        <td> <input  class="input rounded-sm"
                                 x-bind:name="`services[${index}][price]`"
                                    x-bind:placeholder="x"


                                 x-model="service.price"/>

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

            quantity:1,
            total:0,
            total_amount: 0,
            paid: 0,
            change: 0,
            item:'',
            services: [


            ],

            addNewField(service) {

                console.log(service);
                let {id,price,name} = service;


                    this.services.push({
                        id: id,
                        service: name,
                        price: price,
                        amount: price,
                        qty: 1,
                    });

            },
            removeField(service) {
                let position = this.services.indexOf(service);
                console.log(service,position)
                this.services.splice(position, 1);
                // this.id = this.id--;
                return true;

            },


        }))

    })


</script>
