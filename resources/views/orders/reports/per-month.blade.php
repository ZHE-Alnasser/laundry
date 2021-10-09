
<x-layouts.app>
    <x-card>
        <div class=" m-5 flex-1">
            <h3 class="text-3xl text-gray-800 font-bold">{{__('Report Orders Per Month')}}</h3>
            <hr class="my-5">
            <div class="row   overflow-x-auto">
                <table class=" table text-gray-600 w-full using-font col-11 mx-2">
                    <thead class="bg-gray-100">

                    <th class="py-3">@lang('Date')</th>
                    <th class="py-3">@lang('Amount')</th>


                    </thead>


                    @foreach ($orders as $order)

                        <tr class=" border-b">
                            <td class="text-center py-3"> {{$order->month}} /{{$order->year}}</td>
                            <td class="text-center py-3"> {{$order->total_orders}}</td>

                        </tr>

                    @endforeach

                    {{--<tr>--}}
                    {{--<td>{{__('total')}}</td>--}}
                    {{--<td> {{optional($order->employee)->name}}</td>--}}
                    {{--<td></td>--}}
                    {{--<td> {{$order->sum('vat')}}</td>--}}
                    {{--<td> {{$order->without_vat}}</td>--}}
                    {{--<td>{{$order->sum('total')}}</td>--}}
                    {{--</tr>--}}

                </table>
                {{--{{ $orders->links() }}--}}
            </div>
        </div>



    </x-card>
</x-layouts.app>