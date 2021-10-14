
<div class="" x-data="handler">
    <div class="overflow-x-auto mt-8 col">
        <table class="table border-collapse w-full text-center" id="majors_table">
            <thead class="thead-light">

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


                    <td><x-select name="services[]" class="input rounded-sm">
                            <option value="">-- choose service --</option>
                            @foreach ($services as $service)


                                <option {{ $service->id==$item->pivot->service_id ?'selected':''}} value="{{$service->id}}">
                                    {{ $service->name }} (${{ number_format($service->price, 2) }})
                                </option>
                            @endforeach
                        </x-select> </td>

                    <td> <x-input class="input rounded-sm" name="qty[]" type="number" value="{{ $item->pivot->qty }}" /></td>
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

            <template  x-for="(field, index) in fields" :key="index">

                <tr >
                    <div x-data="{price:'100'}">
                    <td>
                        <input class="input rounded-sm" type="hidden" x-model="field.id"/>
                        {{--<input class="input rounded-sm" type="text" x-model="field.service"/>--}}
                        <x-select name="services[]" class="input rounded-sm">
                            <option value="">-- choose service --</option>
                            @foreach ($services as $service)


                                <option x-data="{
    bodys: {{  $service->price }} }
 " x-price="{{number_format($service->price, 2)}}" value="{{$service->id}}">
                                    {{ $service->name }} (${{ number_format($service->price, 2) }})
                                </option>
                            @endforeach
                        </x-select>
                    </td>
                    <td> <x-input class="input rounded-sm" name="qty[]" type="number" x-model="field.quantity"/></td>
                    <td> <x-input x-bind:value="bodys" class="input rounded-sm" name="price[]" type="number" x-model="field.price"/></td>
                    <td> <x-input class="input rounded-sm" name="amount[]" type="number" x-model="field.amount"/></td>

                    <td>
                        {{--<button type="button" class="bg-red-600 px-4 py-2 rounded-full text-xl text-white "--}}
                        {{--@click="removeField(field)">&times;--}}
                        {{--</button>--}}
                        <button type="button" class="itemToDelete">&times;
                        </button>
                    </td>
                    </div>
                </tr>
            </template>

            </tbody>
            <tfoot class="bg-blue">
            <tr class="bg-blue">
                <td colspan="5" class="text-left bg-blue">
                    <button type="button" class="btn mt-2"
                            @click="addNewField()">{{__('Add')}}</button>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>


<div class="row clearfix" style="margin-top:20px">
    <div class="pull-right col-md-4">
        <table class="table table-bordered table-hover" id="tab_logic_total">
            <tbody>
            <tr>
                <th class="text-center"><p>{{__('Sub Total')}}</p></th>
                <td class="text-center"><input value="{{$order->sub_total}}" type="number" name='sub_total' placeholder='0.00' class="input rounded-sm" id="sub_total" /></td>
            </tr>
            <tr>
                <th class="text-center"><p>{{__('VAT')}}</p></th>
                <td class="text-center"><div class="input-group flex mb-2 mb-sm-0">
                        <input type="number"  class="input rounded-sm" id="tax" value="15" placeholder="0">
                        <div class="input-group-addon  mt-4  mx-2"><p>%</p></div>
                    </div></td>
            </tr>
            <tr>
                <th class="text-center"><p>{{__('Vat Amount')}}</p></th>
                <td class="text-center"><input value="{{$order->vat}}" type="number" name='vat' id="vat" placeholder='0.00' class="input rounded-sm" /></td>
            </tr>
            <tr>
                <th class="text-center"><p>{{__('Grand Total')}}</p></th>
                <td class="text-center"><input type="number" value="{{$order->total}}" name='total' id="total" placeholder='0.00' class="input rounded-sm" /></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


{{--@push('scripts')--}}
<script>


    document.addEventListener('alpine:init', () => {
        Alpine.data('handler', () => ({
            id: '{{count($order->services)}}',
            service: '',
            price: 0,
            quantity:1,
            total:0,

            fields: [

            ],

            addNewField(field) {
                this.fields.push({
                    id: this.id++,
                    service: '',
                    price: 0,
                    amount: 0,
                    quantity:1,
                });
            },
            removeField(field) {
                let position = this.fields.indexOf(field);
                console.log(field,position)
                this.fields.splice(position, 1);
                // this.id = this.id--;
                return true;
                // this.fields.splice(index, 1);
            },

        }))

    })
    function handleClick(event) {
        if (event.target.className == 'itemToDelete') {
            // get row containing clicked button
            var row = event.target.parentNode.parentNode;
            // remove row element
            row.parentNode.removeChild(row);
        }
    }

    window.addEventListener('DOMContentLoaded', function() {
        // register click handler for whole table for efficiency
        document.querySelector('.table').addEventListener('click',handleClick, false);
    }, false);

</script>

