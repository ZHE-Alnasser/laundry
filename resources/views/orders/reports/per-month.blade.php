
<x-layouts.app>
    <x-card>
        <div class="w-1/2 m-5 flex-1">
            <h3 class="text-3xl text-gray-800 font-bold">{{__('Report Orders Per Month')}}</h3>
            <hr class="my-5">
            <div class="row">
                <table class="table table-bordered table-condensed using-font col-11 mx-2">
                    <thead class="bg-light">

                    <th>@lang('Date')</th>
                    <th>@lang('Amount')</th>


                    </thead>


                    @foreach ($orders as $order)

                        <tr>
                            <td> {{$order->month}} /{{$order->year}}</td>
                            <td> {{$order->total_orders}}</td>

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