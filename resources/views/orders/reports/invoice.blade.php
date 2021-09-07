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
    <div class="col ">

        @if($order->total)
            <div class="visible-print  text-center">
                <h5>{{ __('QR') }}</h5>
                {{--                     {{QrCode::size(100)->generate('cm:'.$order->id) }}--}}

               <div class="qr">
                @php
                   // $qrText = setting('company_name')."
                    $qrText = 'Name'."
                    \nInvoice number: ".$order->id."
                    \nVAT Number:
                    \nInvoice issue date: ".$order->created_at."
                    \nTotal amount with VAT: ".$order->total."
                    \nVAT: ".$order->vat;



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
       <h1>{{setting('app_name', 'default value')}}</h1>
        <div class="col"><h4>@lang('Order Id'): <b>{{sprintf('%04d',$order->id)}}</b></h4>


            <div class="col"><h4>@lang('Accountant'): <b>{{optional($order->employee)->full_name}}</b></h4></div>
                {{--@dd($employee->full_name)--}}

            <div class="col"></div>
            {{--@dd($order->employee)--}}
            {{--@dd($order->customer_id)--}}

            <div class="col">  <h4>@lang('Customer Name'): <b>{{optional($order->customer)->full_name}}</b></h4></div>
                {{--@dd($customer->full_name)--}}


        </div>

        <div class="col">
            <h4>@lang('Date'): <b>{{$order->created_at}}</b></h4>
        </div>

    </div>
    <hr class="my-5">
    <div class="row">
        <table class="table table-bordered table-condensed using-font col-11 mx-2">
            <thead class="bg-light">
            <th>@lang('services')</th>
            <th>@lang('quantity')</th>
            <th>@lang('Amount')</th>

            </thead>
            {{--<tr>--}}
            {{--<td>@lang('total')({{$order->total}}) * @lang('quantity')({{$order->quantity}})</td>--}}
            {{--<td> </td>--}}
            {{--<td>{{$order->total * $order->quantity}}</td>--}}
            {{--</tr>--}}
            {{--@dd($order->product_order)--}}
            @foreach($order->services as $item)
                <tr>

                    {{--@dd($item->pivot->selling_price)--}}
                    {{--@dd($item->pivot->quantity)--}}
                    <td>{{$item->name}} </td> <td>{{$item->pivot->quantity}}</td> <td> {{$item->pivot->amount}}</td>
                </tr>


            @endforeach

        </table>

        <table class="table table-bordered table-condensed using-font col-4 mx-2 mt-5">
            {{--<thead class="bg-light">--}}
            {{--<th>@lang('الاجمالي')</th>--}}

            {{--</thead>--}}
            <tr>
                <td class="bg-light">@lang('Total amount without VAT'): </td><td>{{$order->without_vat}}</td>
            </tr>
            <tr>
                <td class="bg-light">@lang('Total VAT'): 15%</td><td>{{$order->vat }}</td>
            </tr>

            <tr>
                <td class="bg-light">@lang('Total amount with VAT'):</td><td>{{$order->total}}</td>
            </tr>

        </table>
        <div class="col-10 col-offset-3 text-center mt-5 ">
            <h3>@lang('Thank you for shopping')</h3>
        </div>
    </div>
    </div>







