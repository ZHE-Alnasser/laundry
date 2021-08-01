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

            {{--<template>--}}
            <tbody>
            @foreach($order->services as $item)
                <tr>
                    <td>{{$item->pivot->order_id}} </td>
                    <td>{{$item->name}} </td>
                    <td>{{$item->pivot->item_id}} </td>
                    <td>{{$item->pivot->quantity}}</td>
                    <td>{{$item->pivot->amount}}</td>
                    <td><button type="button" class="btn-delete btn-small" @click="removeField(index)">&times;</button></td>

                </tr>

            @endforeach
            </tbody>
            {{--<x-form action="{{url('order_services')}}" method="post" has-files>--}}

                {{--</template>--}}
                <tbody>
                <template x-for="(field, index) in fields" :key="index">
                    <tr>
                        <td x-text="{{$order->id}}"></td>
                        <td><input x-model="field.service" type="text" name="service_id" class="input"></td>
                        <td><input x-model="field.item" type="text" name="item_id" class="input"></td>
                        <td><input x-model="field.quantity" type="text" name="quantity" class="input"></td>
                        <td><input x-model="field.amount" type="text" name="amount" class="input"></td>
                        <td><button type="button" class=" btn-delete" @click="removeField(index)">&times;</button></td>

                    </tr>
                </template>
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