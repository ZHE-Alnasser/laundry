
<x-layouts.app>
        <x-card>
        <div class="w-1/2 m-5 flex-1">
            <h3 class="text-3xl text-gray-800 font-bold">{{__('Report VAT')}}</h3>
            <hr class="my-5">
            <div class="row">
                <table class="table table-bordered table-condensed using-font col-11 mx-2">
                    <thead class="bg-light">
                    <th>#</th>
                    {{--<th>@lang('Invoice Number')</th>--}}
                    <th>@lang('Customer Name')</th>
                    <th>@lang('VAT Rate')</th>
                    <th>@lang('Total VAT')</th>
                    {{--<th>@lang('Total without VAT')</th>--}}
                    <th>@lang('Total amount with VAT')</th>

                    </thead>


                    @foreach ($orders as $order)

                        <tr>
                            <td> #{{$order->id}}</td>
                            <td> {{optional($order->customer)->name}}</td>
                            <td> {{setting('vat_rate')}}</td>
                            <td> {{$order->vat}}</td>
                            {{--<td> {{$order->sub_total}}</td>--}}
                            <td>{{$order->total}}</td>
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