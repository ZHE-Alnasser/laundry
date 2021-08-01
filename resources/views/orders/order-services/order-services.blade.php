{{--<x-form action="{{url('orders')}}" method="post" has-files>--}}

<div class="row" x-data="handler">
    <div class="col">
        <table class="table table-bordered align-items-center table-sm">
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
                    <td><input x-model="field.id" type="text" name="order_id[]" class="input"></td>
                    <td><input x-model="field.item_id" type="text" name="item_id[]" class="input"></td>
                    <td><input x-model="field.service_id" type="text" name="service_id[]" class="input"></td>
                    <td><input x-model="field.quantity" type="text" name="quantity[]" class="input"></td>
                    <td><input x-model="field.amount" type="text" name="amount[]" class="input"></td>
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
            fields: [],
            addNewField() {
                this.fields.push({
                    txt1: '',
                    txt2: ''
                });
            },
            removeField(index) {
                this.fields.splice(index, 1);
            }
        }))
    })
</script>
{{--</x-form>--}}