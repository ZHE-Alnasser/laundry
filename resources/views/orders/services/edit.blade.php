
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="mt-10 clearfix">
        <div class="col-md-12">
            <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                <tr>
                    {{--<th class="text-center"><p> # </p></th>--}}
                    <th class="text-center"><p>{{__('Services')}}</p></th>
                    <th class="text-center"><p>{{__('Quantity')}}</p></th>
                    <th class="text-center"><p>{{__('Price')}}</p></th>
                    <th class="text-center"><p>{{__('Amount')}}</p></th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach($orders as $order)--}}
                    {{--<tr data-entry-id="{{ $order->id }}">--}}
                        {{--<td>--}}
                            {{--{{ $order->id ?? '' }}--}}
                        {{--</td>--}}



                               {{--<tr> @foreach($order->services as $item)--}}

                                  {{--<td>{{ $item->name }} ({{ $item->pivot->qty }} x ${{ $item->price }})</td>--}}
                                    {{--<td>{{ $item->pivot->qty }}</td>--}}
                        {{--@endforeach</tr>--}}


                        {{--<td>--}}

                                @foreach($order->services as $item)
                                    <tr>
                            <td><select name="services[]" class="input rounded-sm">
                                    {{--<option value="">-- choose service --</option>--}}
                                    @foreach ($services as $service)
                                        <option {{ $item->service_id==$service->id ?'selected':''}} value="{{$service->id}}">
                                            {{ $service->name }} (${{ number_format($service->price, 2) }})
                                        </option>
                                    @endforeach
                                </select> </td>

                                    <td><input type="number" name='qty[]' value="{{ $item->pivot->qty }}" placeholder='Enter Qty' class="input rounded-sm qty" step="0" min="0"/></td>

                                    {{--<td> ({{ $item->pivot->qty }} x ${{ $item->price }})</td>--}}
                                    <td><input type="number" name='price[]' value="{{ $item->pivot->price}}" placeholder='Enter Unit Price' class="input rounded-sm price" step="0.00" min="0"/></td>

                                    <td><input type="number" name='total[]' placeholder='0.00' class="input rounded-sm total" readonly/></td>
                                    </tr>
                                @endforeach

                        {{--</td>--}}
                        <td>
                            {{-- ... buttons ... --}}
                        </td>

                    {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
    <div class="clearfix">
        <div class="flex justify-around ">
            <button type="button" id="add_row" class="bg-gray-200 p-2 rounded-sm float-endpull-left">+ {{__('Add Row')}}</button>
            <button type="button" id='delete_row' class=" text-red-400">{{__('Delete Row')}}</button>
        </div>
    </div>
    <div class="row clearfix" style="margin-top:20px">
        <div class="pull-right col-md-4">
            <table class="table table-bordered table-hover" id="tab_logic_total">
                <tbody>
                <tr>
                    <th class="text-center"><p>{{__('Sub Total')}}</p></th>
                    <td class="text-center"><input type="number" value="{{$order->sub_total}}" name='sub_total' placeholder='0.00' class="input rounded-sm" id="sub_total" readonly/></td>
                </tr>
                <tr>
                    <th class="text-center"><p>{{__('VAT')}}</p></th>
                    <td class="text-center"><div class="input-group flex mb-2 mb-sm-0">
                            <input type="number" class="input rounded-sm" id="tax" value="15" placeholder="0">
                            <div class="input-group-addon  mt-4  mx-2"><p>%</p></div>
                        </div></td>
                </tr>
                <tr>
                    <th class="text-center"><p>{{__('Vat Amount')}}</p></th>
                    <td class="text-center"><input type="number" value="{{$order->vat}}" name='vat' id="vat" placeholder='0.00' class="input rounded-sm" readonly/></td>
                </tr>
                <tr>
                    <th class="text-center"><p>{{__('Grand Total')}}</p></th>
                    <td class="text-center"><input type="number" value="{{$order->total}}" name='total' id="total" placeholder='0.00' class="input rounded-sm" readonly/></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var i=1;
        $("#add_row").click(function(){b=i-1;
            $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
            $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
            i++;
        });
        $("#delete_row").click(function(){
            if(i>1){
                $("#addr"+(i-1)).html('');
                i--;
            }
            calc();
        });

        $('#tab_logic tbody').on('keyup change',function(){
            calc();
        });
        $('#tax').on('keyup change',function(){
            calc_total();
        });


    });

    function calc()
    {
        $('#tab_logic tbody tr').each(function(i, element) {
            var html = $(this).html();
            if(html!='')
            {
                var qty = $(this).find('.qty').val();
                var price = $(this).find('.price').val();
                $(this).find('.total').val(qty*price);

                calc_total();
            }
        });
    }

    function calc_total()
    {
        total=0;
        $('.total').each(function() {
            total += parseInt($(this).val());
        });
        $('#sub_total').val(total.toFixed(2));
        tax_sum=total/100*$('#tax').val();
        $('#vat').val(tax_sum.toFixed(2));
        $('#total').val((tax_sum+total).toFixed(2));
    }
</script>