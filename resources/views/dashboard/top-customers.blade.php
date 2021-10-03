<div class="card">

    {{--<x-card>--}}
    <div class=" m-5 flex-1">
        <h2 class="text-gray-800 font-bold">{{__('Most Purchased Customers')}}</h2>
        <hr class="my-5">
        {{--<div class="row">--}}
        <table class=" text-gray-600 w-full using-font col-11 mx-2">
            <thead class="bg-gray-100">
            <th class="py-3">@lang('Customer Name')</th>
            <th class="py-3">@lang('Number of Orders')</th>

            </thead>


            {{--@foreach ($sales as $sale)--}}


            {{--@foreach ($users as $user)--}}
            @foreach ($topCustomers as $user)

                <tr class=" border-b">
                    <td class="text-center py-3"><span>
                            {{$user->name}}</span></td>

                    <td class="text-center py-3"> {{$user->customer_orders_count}}</td>

                </tr>
            @endforeach


            <td></td>
            <td></td>



            {{--@endforeach--}}

        </table>
    </div>
    {{--</div>--}}

    {{--</x-card>--}}

</div>