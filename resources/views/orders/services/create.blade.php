
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

{{--<div class="container">--}}
    {{--<div class="mt-10 clearfix">--}}
        {{--<div class="col-md-12">--}}
            {{--<table class="table table-bordered table-hover" id="tab_logic">--}}
                {{--<thead>--}}
                {{--<tr>--}}
<div class="flex flex-col mt-5">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200" id="tab_logic">
                    <thead class="bg-gray-50">
                    <tr>
                    <th class="text-center "><p> # </p></th>
                    <th class="text-center "><p>{{__('Services')}}</p></th>
                    <th class="text-center "><p>{{__('Quantity')}}</p></th>
                    <th class="text-center "><p>{{__('Price')}}</p></th>
                    <th class="text-center "><p>{{__('Amount')}}</p></th>
                </tr>
                </thead>
                <tbody>
                <tr id='addr0'>
                    <td>1</td>
                    <td>
                        <p>
                        <select name="services[]" class="input rounded-sm">

                            <option value="">-- {{__('choose service')}} --</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">
                                {{ $service->name }} (${{ number_format($service->price, 2) }})
                            </option>
                            @endforeach
                            </select></p>
                        {{--<input type="text" name='service[]'  placeholder='Enter Product Name' class="form-control"/>--}}
                    </td>
                    <td><p><input type="number" name='qty[]' placeholder="{{__('Enter Qty')}}" class="input rounded-sm qty" step="0" min="0"/></p></td>
                    <td><p><input type="text" name='price[]' placeholder="{{__('Enter Unit Price')}}" class="input rounded-sm price" step="0.00" min="0"/></p></td>
                    <td><input type="number" name='amount[]' placeholder='0.00' class="input rounded-sm total" readonly/></td>
                </tr>
                <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
    <div class="clearfix">
        <div class="flex justify-around mt-3">
           <p><button type="button" id="add_row" class="btn btn-add bg-gray-200 p-2  float-endpull-left">+ {{__('Add Row')}}</button></p>
            <p><button type="button" id='delete_row' class="btn btn-delete  text-white">- {{__('Delete Row')}}</button></p>
        </div>
    </div>
    <div  style="margin-top:20px">
        <div class="pull-right mt-8 col-md-4">
            <table class="table table-bordered  table-hover bg-white divide-y divide-gray-200 " id="tab_logic_total">
                <tbody>
                <tr>
                    <th class="text-center"><p>{{__('Sub Total')}}</p></th>
                    <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="input rounded-sm mx-5" id="sub_total" readonly/></td>
                </tr>
                <tr>
                    <th class="text-center"><p>{{__('VAT')}}</p></th>
                    <td class="text-center"><div class="input-group flex mb-2 mb-sm-0">
                            <input type="number" class="input rounded-sm mx-5" id="tax" value="15" placeholder="0">
                            <div class="input-group-addon  mt-4  mx-2"><p>%</p></div>
                        </div></td>
                </tr>
                <tr>
                    <th class="text-center"><p>{{__('Vat Amount')}}</p></th>
                    <td class="text-center"><input type="number" name='vat' id="vat" placeholder='0.00' class="input rounded-sm mx-5" readonly/></td>
                </tr>
                <tr>
                    <th class="text-center"><p>{{__('Grand Total')}}</p></th>
                    <td class="text-center"><input type="number" name='total' id="total" placeholder='0.00' class="input rounded-sm mx-5" readonly/></td>
                </tr>
                </tbody>
            </table>
        </div>
    {{--</div>--}}
{{--</div>--}}
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