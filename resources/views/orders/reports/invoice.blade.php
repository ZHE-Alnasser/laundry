@extends('components.layouts.print')

@push('after_styles')
    {{--    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@800&display=swap" rel="stylesheet">

    <style>

        a, h1, h2, h3, h4, h5, h6, p, .using-font, label, .btn, th, p {
            font-family: 'Courier New', sans-serif;
            /*font-family: 'Amiri', sans-serif;*/
            font-size: 30px;
        }

    </style>
@endpush
{{--@section('content')--}}
<div class="bg-white">

    <h1 class="text-center">{{setting('company_name')}}</h1>
    <div class="vat justify-center flex "><p class="px-1">{{__('VAT Number').__(':')}}</p><p>{{setting('vat_number')}}</p></div>
    <div class="col ">

        @if($order->total)
            <div class="visible-print  text-center">
                <h5>{{ __('QR') }}</h5>
                {{--                     {{QrCode::size(100)->generate('cm:'.$order->id) }}--}}

               <div class="qr">
                @php
                   // $qrText = setting('company_name')."
                    $qrText = setting('company_name')."
                    \nInvoice number: ".$order->id."
                    \nVAT Number: ".setting('vat_number')."
                    \nInvoice issue date: ".$order->created_at."
                    \nVAT: ".$order->vat."
                    \nTotal amount with VAT: ".$order->total."
                    \n";



                @endphp
                {{QrCode::generate("$qrText")}}
                </div>
            </div>
        @endif
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

    <hr>
    <div class="row mt-5">

        <div class="col"><p>@lang('Order Id'): <b>{{sprintf('%04d',$order->id)}}</b></p>



            <div class="col"><p>@lang('Accountant'): <b>{{optional($order->employee)->name}}</b></p></div>
            {{--<div class="col"><p>@lang('Accountant'): <b>{{auth()->user()->full_name}}</b></p></div>--}}
{{--@dd(auth()->user()->id)--}}
            <div class="col"></div>
            {{--@dd($order->employee)--}}
            {{--@dd($order->customer_id)--}}
            <div class="col">  <p>@lang('Customer Name'): <b>{{optional($order->customer)->name}}</b></p></div>
                {{--@dd($customer->full_name)--}}
            {{--@dd($order->customer->full_name)--}}


        </div>

        <div class="col">
            <p>@lang('Date'): <b>{{$order->created_at}}</b></p>
        </div>

    </div>
    <hr class=" my-5">
    <div class="mx-auto row">
        <table class="table table-bordered table-condensed using-font col-11 mx-2">
            <thead class="text-center bg-light">
            <th>@lang('Services')</th>
            <th>@lang('Quantity')</th>
            <th>@lang('Amount')</th>

            </thead>
            {{--<tr>--}}
            {{--<td>@lang('total')({{$order->total}}) * @lang('quantity')({{$order->quantity}})</td>--}}
            {{--<td> </td>--}}
            {{--<td>{{$order->total * $order->quantity}}</td>--}}
            {{--</tr>--}}
            {{--@dd($order->product_order)--}}
            {{--@dd($order->services)--}}

            {{--@dd($order)--}}
            @foreach($order->services as $item)
                <tr class="text-center">

                    {{--@dd($item->pivot->selling_price)--}}
                    {{--@dd($order->services)--}}
                    <td>{{$item->name}} </td> <td>{{$item->pivot->qty}}</td> <td> {{$item->pivot->price}}</td>
                </tr>


            @endforeach

        </table>

        <table class="table text-center table-bordered table-condensed using-font col-4 mx-2 mt-5">
            {{--<thead class="bg-light">--}}
            {{--<th>@lang('الاجمالي')</th>--}}

            {{--</thead>--}}
            <tr>
                <td class="bg-light">@lang('Total amount without VAT'): </td><td>{{$order->sub_total}}</td>
            </tr>
            <tr>
                <td class="bg-light">@lang('Total VAT'): 15%</td><td>{{$order->vat }}</td>
            </tr>

            <tr>
                <td class="bg-light">@lang('Total amount with VAT'):</td><td>{{$order->total}}</td>
            </tr>

        </table>
        <div class="col-10 col-offset-3 text-center mt-5 ">
            <p>@lang('Thank you ..')</p>
        </div>
    </div>
    </div>







