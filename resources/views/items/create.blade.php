<x-layouts.app>
    <x-card>
    <x-feedback/>
    <h1 class="px-6">{{__('Create').' '.__('Items')}}</h1>

    <div class="w-full  mt-6 px-6 py-4 overflow-hidden ">
        <x-form action="{{url('items')}}" method="post" has-files>
            @csrf
            <label>{{__('Item Name')}}<span class="text-red-600" > *</span></label>
            <x-input required class="input" name="name" value="{{ old('name') }}"/>

            <div class="field mb-5 mt-5">
                <label class=" font-extrabold leading-8 tracking-tight  sm:leading-9"
                       for="image"><i data-feather="image" class="ml-1"></i>{{__('Add Image')}}</label>
                <div class="mt-1">

                    <label
                    for="file-upload" class=" ">

                    <x-input class="input" type="file" id="image" name="image"/>
                    </label>
                    </div>





            </div>
            {{--<div class="row" x-data="services">--}}
                {{--<div class="col overflow-x-auto ">--}}
                    {{--<table class="table  table-bordered align-items-center table-sm">--}}
                        {{--<thead class="thead-light">--}}
                        {{--<tr>--}}
                            {{--<th>#</th>--}}
                            {{--<th>Text Feild 1</th>                            <th>Text Feild 2</th>--}}
                            {{--<th>Remove</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--<template x-for="(item, index) in items" :key="index">--}}
                            {{--<tr>--}}
                                {{--<td x-text="index + 1"></td>--}}
                                {{--<td><input x-model="item.name" type="text" name="sname[]" class="form-control"></td>--}}
                                {{--<td><input x-model="item.price" type="text" name="price[]" class="form-control"></td>--}}
                                {{--<td><input x-model="item.description" type="text" name="description[]" class="form-control"></td>--}}
                                {{--<td><button type="button" class="btn btn-danger btn-small" @click="deleteItem(index)">&times;</button></td>--}}
                            {{--</tr>--}}
                        {{--</template>--}}
                        {{--</tbody>--}}
                        {{--<tfoot>--}}
                        {{--<tr>--}}
                            {{--<td colspan="4" class="text-right"><button type="button" class="btn btn-info" @click=" addItem()">+ Add Row</button></td>--}}
                        {{--</tr>--}}
                        {{--</tfoot>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="flex mt-8">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/items/manage')"/>
            </div>
        </x-form>
    </div>
    </x-card>
</x-layouts.app>


<script>
    document.addEventListener('alpine:initializing', () => {
        Alpine.data('services', () => ({
            items: [],
            addItem()
            {

                    this.items.push({
                        id: '',
                        name: '',
                        price: '',
                        description: ''
                    });

            },
            deleteItem(index) {
                this.items.splice(index, 1);
            }
            // deleteItem(item)
            // {
            //     let position = this.items.indexOf(item);
            //     this.items.splice(position, 1);
            //     // this.calculatePayments();
            // },
        }))

    })


</script>
