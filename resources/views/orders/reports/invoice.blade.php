<x-layouts.print>

    <div class="bg-white mx-4">

        <div class="flex flex-col justify-between">
            <div class="text-right">
                <div class="field text-right mx-10 mt-5">

                </div>

            {{--<img class="img-fluid d-block " src="{{asset('/storage/logo/logo.png')}}" alt="{{__('Company Logo')}}">--}}

                <p>{{setting('company_name')}}</p>
                   <div class="flex">

                   <p>{{__('Branch Name')}}: {{optional($order->branch)->name}}</p>

                   </div>




                <p>{{__('Address')}}: {{$order->branch->address}}</p>
            {{--<p>{{setting('company_address_2')}}</p>--}}
                <p>{{__('VAT Number').__(':')}}{{$order->branch->vat_number}}</p>
            </div>
            <div class="flex flex-col ">
                <hr class="my-4">
                <div><p>@lang('Order Id'): <b>{{sprintf('%04d',$order->id)}}</b></p>


                    <div><p>@lang('Accountant'): <b>{{optional($order->employee)->name}}</b></p></div>

                    <div></div>

                    <div><p>@lang('Customer Name'): <b>{{optional($order->customer)->name}}</b></p></div>



                </div>

                <div>
                    <p>@lang('Date'): <b>{{$order->created_at}}</b></p>
                </div>

            </div>
        </div>
        {{--<div class=" text-center ">--}}
        {{--<img class="img-fluid d-block mx-auto" style="max-width: 30%" src="{{asset('img/logo.png')}}" alt="">--}}
        {{--<img class="img-fluid d-block mx-auto" style="max-width: 30%" src="{{setting('company_logo')}}" alt="">--}}
        {{--<h3>{{setting('company_name')}}</h3>--}}
        {{--<h3>{{setting('company_email')}}</h3>--}}
        {{--<h3>{{setting('comapny_address_1')}}</h3>--}}
        {{--<h3>{{setting('vat_number')}}</h3>--}}
        {{--<h3>{{setting('VAT')}}</h3>--}}
        {{--</div>--}}
        {{--<<<<<<< Updated upstream--}}
        {{--=======--}}
        {{--</div>--}}
        {{-->>>>>>> Stashed changes--}}


        {{--@dd($order->customer)--}}
        {{--@dd($order->user,$order->customer)--}}


        <hr class=" my-5">
        <div class="">
            <table class="table table-auto table-bordered table-condensed using-font mx-2">
                <thead class="text-center bg-light">
                <th>@lang('Services')</th>
                <th>@lang('Quantity')</th>
                <th>@lang('Amount')</th>

                </thead>

                @foreach($order->services as $item)
                    <tr>

                        <td>{{$item->name}} </td>
                        <td>{{$item->pivot->quantity}}</td>
                        <td> {{$item->pivot->price}}</td>
                    </tr>


                @endforeach

            </table>

<div class="flex flex-col">
                {{--<thead class="bg-light">--}}
                {{--<th>@lang('الاجمالي')</th>--}}

                {{--</thead>--}}
                <div>
                    <p class="bg-light">@lang('Total amount without VAT'): {{$order->sub_total.' '.currency()}}</p>
                </div>
                <div>
                    <p class="bg-light">@lang('Total VAT'): ({{setting('vat_rate')}}%)

                   {{$order->vat.' '.currency() }}</p>
                </div>

                <div>
                    <p class="bg-light">@lang('Total amount with VAT'):
                   {{$order->total.' '.currency()}}</p>
                </div>

</div>
            <div class="my-5 mx-4">


                {{QrCode::encoding('UTF-8')->generate(
 json_encode(
    [
        'seller_name'=>setting('company_name'),
        'vat_number'=>$order->branch->vat_number,
        'timestamp'=>$order->created_at,
        'total_amount'=>$order->total,
        'vat_amount'=>$order->vat
    ],JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE
)
)}}

            </div>
            <p class="my-3 mx-4">@lang('Thank you ..')</p>
        </div>
    </div>


</x-layouts.print>
