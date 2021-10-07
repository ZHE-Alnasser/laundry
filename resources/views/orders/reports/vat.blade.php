
<x-layouts.app>
        <x-card>
        <div class=" m-5 flex-1">
            <h3 class="text-3xl text-gray-800 font-bold">{{__('Report VAT')}}</h3>
            <hr class="my-5">
            <div class="row">
                <table class="text-gray-600 w-full using-font col-11 mx-2">
                {{--<table class="table table-bordered table-condensed using-font col-11 mx-2">--}}
                    <thead class="bg-gray-100">
                    <th class="py-3">#</th>
                    {{--<th>@lang('Invoice Number')</th>--}}
                    <th class="py-3" >@lang('Customer Name')</th>
                    <th class="py-3">@lang('VAT Rate')</th>
                    <th class="py-3">@lang('Total VAT')</th>
                    {{--<th>@lang('Total without VAT')</th>--}}
                    <th class="py-3">@lang('Total amount with VAT')</th>

                    </thead>


                    @foreach ($orders as $order)

                        <tr class=" border-b">
                            <td class="text-center py-3"> #{{$order->id}}</td>
                            <td class="text-center py-3"> {{optional($order->customer)->name}}</td>
                            <td class="text-center py-3"> {{setting('vat_rate')}}</td>
                            <td class="text-center py-3"> {{$order->vat}}</td>
                            {{--<td> {{$order->sub_total}}</td>--}}
                            <td class="text-center py-3">{{$order->total}}</td>
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