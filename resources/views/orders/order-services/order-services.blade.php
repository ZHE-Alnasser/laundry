{{--<x-form action="{{url('orders')}}" method="post" has-files>--}}

<div class="row" x-data="handler">
    <div class="col">
        <table class="table table-bordered align-items-center table-sm" id="order_services">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>{{__('Services')}}</th>
                <th>{{__('Items')}}</th>
                <th>{{__('Quantity')}}</th>
                <th>{{__('Amount')}}</th>
                <th>Remove</th>
            </tr>
            </thead>

            {{--<x-form action="{{url('order_services')}}" method="post" has-files>--}}

            {{--</template>--}}
            <tbody>
            <form action="/orders" method="post">
                @csrf
            <template x-for="(field, index) in fields" :key="index">
                <tr>
                    {{--<td >1</td>--}}
                    {{--<td><input x-model="field.id" type="text" name="order_id[]" value="{{}}" class="input"></td>--}}
                    <td x-text="index + 1"></td>
                    <td>
                        <select x-model="field.service" type="text"
                                {{--name="service_id[]" --}}
                                x-bind:name="`serviceOrders[${field.id}][service]`"
                                class="input">
                        @foreach(\App\Models\Service::all() as $service)
                                <option value="{{$service->id}}" >{{$service->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td> <select x-model=field.item" type="text"
                                 {{--name="item_id[]" --}}
                                 x-bind:name="`serviceOrders[${field.id}][item]`"

                                 class="input">
                            @foreach(\App\Models\Item::all() as $item)
                                <option value="{{$item->id}}" >{{$item->name}}</option>
                            @endforeach
                        </select></td>
                    <td><input x-model="field.quantity" type="text"
                               {{--name="quantity[]" --}}
                               x-bind:name="`serviceOrders[${field.id}][quantity]`"
                               class="input"></td>
                    <td><input x-model="field.amount" type="text"
                               {{--name="amount[]" --}}
                               x-bind:name="`serviceOrders[${field.id}][amount]`"
                               class="input"></td>
                    <td><button type="button" class=" btn-delete" @click="removeField(index)">&times;</button></td>

                </tr>
            </template>
                <button>Submit</button>
            </form>
            </tbody>
            {{--<tfoot>--}}

            {{--</x-form>--}}
            <tr>
                <td colspan="4" class="text-right"><button type="button" class="btn" @click="addNewField()">+ {{__('Add Row')}}</button></td>
            </tr>
            {{--</tfoot>--}}
        </table>
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('handler', () => ({
            fields: [
                @php
                if($order->services)
                $index=0;
                foreach ($serviceOrders as $service)
                {
                $amount = $service->amount;
                $quantity = $service->quantity;
                echo  "{id: $index,amount: '$amount',quantity: '$quantity' ,order:'$order'},";
                $index++;
                }
           @endphp
            ],

    {{--function handler() {--}}
        {{--return {--}}
            {{--id: '{{count($serviceOrders)}}',--}}
            {{--serviceName: '',--}}
            {{--itemName: '',--}}
            {{--amount: '',--}}
            {{--quantity: '',--}}
            // fields: [
                {{--@php--}}
                    {{--if($ser->majors)--}}
    {{--$index=0;--}}
    {{--foreach ($universityMajors as $major)--}}
    {{--{--}}
        {{--$cost = optional($major->cost()->whereUniversityId($university->id)->first())->value;--}}
        {{--$description = optional($major->info()->whereUniversityId($university->id)->first())->value;--}}
      {{--echo  "{id: $index,cost: '$cost',description: '$description' ,major: '$major->id'},";--}}
   {{--$index++;--}}
    {{--}--}}

                {{--@endphp--}}
                // {txt1: 'hi', txt2: 'hello'}
            // ],
            addNewField() {
                this.fields.push({
                    // id: this.id++,
                    service: '',
                    item: '',
                    quantity:'',
                    amount:''
                });
            },
            removeField(index) {
                this.fields.splice(index, 1);
            }
        }))
    })
</script>
{{--</x-form>--}}