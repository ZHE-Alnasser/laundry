<x-card>

        {{--<x-card>--}}
        <div class=" m-5 flex-1">
            <h2 class="text-gray-800 font-bold">{{__('Most Requested Services')}}</h2>
            <hr class="my-5">
            <div class="row">
                <table class=" table-bordered w-full using-font col-11 mx-2">
                    <thead class="bg-gray-100">
                    <th class="py-3">@lang('Service Name')</th>
                    <th class="py-3">@lang('Number of Orders')</th>

                    </thead>


                    {{--@foreach ($sales as $sale)--}}


                    @foreach ($services as $service)
                        <tr class=" border-b">
                            <td class="text-center py-3"><span>{{$service->name}}</span></td>


                            {{--<td class="vgt-left-align text-left"><span>{{$product->quantity}}</span></td>--}}



                            <td class="text-center py-3"> <span>{{$service->orders_count}}</span></td>

                        </tr>
@endforeach


                            <td></td>
                            <td></td>

                        </tr>

                    {{--@endforeach--}}

                </table>
            </div>
        </div>

        {{--</x-card>--}}

</x-card>