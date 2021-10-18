@extends('components.layouts.print')

@push('after_styles')
    {{--    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@800&display=swap" rel="stylesheet">

    <style>

        a, h1, h2, h3, h4, h5, h6, p, .using-font, label, .btn, th, p {
            font-family: 'Tajawal', sans-serif;
            /*font-family: 'Amiri', sans-serif;*/
            font-size: 30px;
        }

    </style>
@endpush

<div class="bg-white">
    <div class="field text-right mx-10 mt-5">

    </div>

    <img class="img-fluid d-block mx-auto" style="max-width: 30%" src="{{setting('logo')}}" alt="">
    <h2 class="text-center">{{setting('company_name')}}</h2>
    <h2 class="text-center">{{setting('company_address_1')}}</h2>

    <div class="vat justify-center flex "><p class="px-1">{{__('VAT Number').__(':')}}</p><p>{{setting('vat_number')}}</p></div>

    <div class="col ">

        @if($order->total)
            <div class="visible-print  text-center">
                <h5>{{ __('QR') }}</h5>
                {{--                     {{QrCode::size(100)->generate('cm:'.$order->id) }}--}}

               <div class="qr">
                @php
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


    <hr>
    <div class="row mt-5">

        <div class="col"><p>@lang('Order Id'): <b>{{sprintf('%04d',$order->id)}}</b></p>



            <div class="col"><p>@lang('Accountant'): <b>{{optional($order->employee)->name}}</b></p></div>

            <div class="col"></div>

            <div class="col">  <p>@lang('Customer Name'): <b>{{optional($order->customer)->name}}</b></p></div>



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

            @foreach($order->services as $item)
                <tr class="text-center">


                    <td>{{$item->name}} </td> <td>{{$item->pivot->quantity}}</td> <td> {{$item->pivot->price}}</td>
                </tr>


            @endforeach

        </table>

        <table class="table text-center table-bordered table-condensed using-font col-6 mx-2 mt-5">

            <tr>
                <td class="bg-light">@lang('Total amount without VAT'): </td><td>{{$order->sub_total}}</td>
            </tr>
            <tr>
                <td class="bg-light">@lang('Total VAT'): {{setting('vat_rate')}}%</td><td>{{$order->vat }}</td>
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







