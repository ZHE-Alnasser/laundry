{{--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />--}}
{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />--}}
{{--<link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />--}}
{{--<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />--}}
{{--<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />--}}
{{--<link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />--}}
{{--<link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />--}}
{{--<link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />--}}
{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />--}}
{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />--}}
{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />--}}

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
{{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header" style="background-color: #4B0082; color: white; border: 1px solid black;">Place order for customer</div>--}}

                    {{--<div class="card-body" style="border: 1px solid #4B0082; box-shadow: 14px 12px 8px gray;">--}}
                        {{--<form class="form-inline my-2 m" method="POST" action="{{ route('orders.store')}}">--}}
                            {{--@csrf--}}
                            {{--{{ method_field('POST')}}--}}

                            {{--<div class="form-group" >--}}
                                {{--<select type="text" class="form-control" name="clothid" required="" style="width: 300px;">--}}
                                    {{--<option value="">Select cloth</option>--}}
                                    {{--@foreach($services as $cloth)--}}
                                        {{--<option value="{{ $cloth->id }}">{{ $cloth->cloth_name }}</option>--}}
                                    {{--@endforeach--}}

                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="form-group" style="width: 300px;">--}}
                                {{--<input type="number" name="qty" class="form-control" placeholder="Enter quantity" required="" aria-label="item">--}}
                            {{--</div>--}}
                            {{--<input type="hidden" value="0" name="transid">--}}
                            {{--<button style="width: 300px;" class="btn btn-success my-2 my-sm-0" type="button">Add</button>--}}
                        {{--</form><br><br>--}}

                        {{--<table class="table table-bordered table-hover">--}}
                            {{--<thead style="background-color: black; color: white;">--}}
                            {{--<tr>--}}
                                {{--<!-- <th>Id</th> -->--}}
                                {{--<th>Cloth name</th>--}}
                                {{--<th>Quantity</th>--}}
                                {{--<th>Unit price</th>--}}
                                {{--<th>Amount</th>--}}
                                {{--<th>Action</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody id="myTable">--}}
                            {{--<tr>--}}
                                {{--<th></th>--}}
                                {{--<th></th>--}}
                                {{--<th></th>--}}
                                {{--<th></th>--}}
                                {{--<th></th>--}}
                            {{--</tr>--}}
                            {{--@if($amount > 0)--}}
                                {{--@foreach($orders as $order)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{ $order->cloth_name }}</td>--}}
                                        {{--<td>{{ $order->quantity }}</td>--}}
                                        {{--<td>{{ $order->unit_price }}</td>--}}
                                        {{--<td>{{ $order->sub_total}}</td>--}}

                                        {{--<td>--}}
                                            {{--<form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="float-left">--}}
                                                {{--@csrf--}}
                                                {{--{{ method_field('DELETE') }}--}}
                                                {{--<button type="submit" class="btn btn-danger btn-sm">Remove</button>--}}
                                            {{--</form>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}

                                {{--@endforeach--}}

                                {{--<tr>--}}
                                    {{--<th></th>--}}
                                    {{--<th></th>--}}
                                    {{--<th></th>--}}
                                    {{--<th></th>--}}
                                    {{--<th></th>--}}
                                {{--</tr>--}}

                                {{--<tr style="font-size: 15px; color: #222222; background-color: #c0c0c0;">--}}
                                    {{--<td colspan="1"><strong >Total</strong></td>--}}
                                    {{--<td></td>--}}
                                    {{--<td></td>--}}
                                    {{--<td colspan="1"><strong style="font-size: 15px; color: #222222;">{{ $amount }} </strong></td>--}}
                                    {{--<td></td>--}}
                                {{--</tr>--}}
                            {{--@endif--}}

                            {{--</tbody>--}}
                        {{--</table>--}}

                        {{--@if($amount > 0)--}}

                            {{--<center>--}}
                                {{--<button style="width: 250px;" type="button" class="btn btn-primary lg" data-toggle="modal" data-target="#exampleModal">--}}
                                    {{--Continue--}}
                                {{--</button>--}}


                            {{--</center>--}}
                        {{--@endif--}}


                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Button trigger modal -->--}}


                {{--<!-- Modal -->--}}
                {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                    {{--<div class="modal-dialog" role="document">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="modal-header" style="background-color: gray;">--}}
                                {{--<h5 class="modal-title" id="exampleModalLabel">Complete Payment Process</h5>--}}
                                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                    {{--<span aria-hidden="true">&times;</span>--}}
                                {{--</button>--}}
                            {{--</div>--}}
                            {{--<form method="POST" action="{{ route('payments.store')}}">--}}
                                {{--@csrf--}}
                                {{--{{ method_field('POST')}}--}}
                                {{--<div class="modal-body">--}}

                                    {{--<input type="hidden" value="t" name="transid">--}}
                                    {{--<div class="form-group row">--}}
                                        {{--<label for="cust_gender" class="col-md-4 col-form-label text-md-right">{{ __('Select payment type') }}</label>--}}

                                        {{--<div class="col-md-6">--}}
                                            {{--<select id="pay_type" type="text" class="form-control @error('pay_type') is-invalid @enderror" name="pay_type" value="" required autocomplete="pay_type">--}}
                                                {{--<option value="" disabled>Select payment type</option>--}}
                                                {{--<option value="Cash Payment">Cash Payment</option>--}}
                                                {{--<option value="Card Payment">Card Payment</option>--}}
                                            {{--</select>--}}

                                            {{--@error('cust_gender')--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>massage</strong>--}}
                                    {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="modal-footer">--}}
                                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                    {{--<button type="submit" class="btn btn-primary">Continue</button>--}}
                                {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

    {{--<form action="{{ route("orders.store") }}" method="POST">--}}
        {{--@csrf--}}

        {{-- ... customer name and email fields --}}

        {{--<div class="card">--}}
            {{--<div class="card-header">--}}
                {{--Products--}}
            {{--</div>--}}

            {{--<div class="card-body">--}}
                {{--<table class="table" id="services_table">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>Product</th>--}}
                        {{--<th>Quantity</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--<tr id="service0">--}}
                        {{--<td>--}}
                            {{--<select name="services[]" class="form-control">--}}
                                {{--<option value="">-- choose service --</option>--}}
                                {{--@foreach ($services as $service)--}}
                                    {{--<option value="{{ $service->id }}">--}}
                                        {{--{{ $service->name }} (${{ number_format($service->price, 2) }})--}}
                                    {{--</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<input type="number" name="quantities[]" class="form-control" value="1" />--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr id="service1"></tr>--}}
                    {{--</tbody>--}}
                {{--</table>--}}

                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<button type="button" id="add_row" class="btn btn-default pull-left">+ Add Row</button>--}}
                        {{--<button type="button" id='delete_row' class="pull-right btn btn-danger">- Delete Row</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">--}}
        {{--</div>--}}
    {{--</form>--}}
    {{--@section('scripts')--}}
    {{--<script>--}}
        {{--document.addEventListener('alpine:initializing', () => {--}}
            {{--Alpine.data('pos', () => ({--}}
                {{--// $(document).ready(function(){--}}
                {{--let row_number = 1;--}}
            {{--$("#add_row").click(function (e) {--}}
                {{--e.preventDefault();--}}
                {{--let new_row_number = row_number - 1;--}}
                {{--$('#service' + row_number).html($('#service' + new_row_number).html()).find('td:first-child');--}}
                {{--$('#services_table').append('<tr id="service' + (row_number + 1) + '"></tr>');--}}
                {{--row_number++;--}}
            {{--});--}}

            {{--$("#delete_row").click(function (e) {--}}
                {{--e.preventDefault();--}}
                {{--if (row_number > 1) {--}}
                    {{--$("#service" + (row_number - 1)).html('');--}}
                    {{--row_number--;--}}
                {{--}--}}
            {{--});--}}

        {{--});--}}
        {{--})--}}
    {{--</script>--}}
    {{--<script src="{{ mix('js/app.js') }}" defer></script>--}}
    {{--<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>--}}
    {{--<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>--}}
    {{--<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>--}}
    {{--<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>--}}
    {{--<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>--}}
    {{--<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>--}}
    {{--<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>--}}
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>--}}
    {{--<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>--}}
        {{--@endsection--}}


<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12">
            <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                <tr>
                    <th class="text-center"> # </th>
                    <th class="text-center"> Product </th>
                    <th class="text-center"> Qty </th>
                    <th class="text-center"> Price </th>
                    <th class="text-center"> Total </th>
                </tr>
                </thead>
                <tbody>
                <tr id='addr0'>
                    <td>1</td>
                    <td>
                        <select name="services[]" class="form-control">
                        <option value="">-- choose service --</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">
                                {{ $service->name }} (${{ number_format($service->price, 2) }})
                            </option>
                            @endforeach
                            </select>
                        {{--<input type="text" name='service[]'  placeholder='Enter Product Name' class="form-control"/>--}}
                    </td>
                    <td><input type="number" name='qty[]' placeholder='Enter Qty' class="form-control qty" step="0" min="0"/></td>
                    <td><input type="number" name='price[]' placeholder='Enter Unit Price' class="form-control price" step="0.00" min="0"/></td>
                    <td><input type="number" name='total[]' placeholder='0.00' class="form-control total" readonly/></td>
                </tr>
                <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12">
            <button type="button" id="add_row" class="btn btn-default pull-left">Add Row</button>
            <button type="button" id='delete_row' class="pull-right btn btn-default">Delete Row</button>
        </div>
    </div>
    <div class="row clearfix" style="margin-top:20px">
        <div class="pull-right col-md-4">
            <table class="table table-bordered table-hover" id="tab_logic_total">
                <tbody>
                <tr>
                    <th class="text-center">Sub Total</th>
                    <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly/></td>
                </tr>
                <tr>
                    <th class="text-center">Tax</th>
                    <td class="text-center"><div class="input-group mb-2 mb-sm-0">
                            <input type="number" class="form-control" id="tax" placeholder="0">
                            <div class="input-group-addon">%</div>
                        </div></td>
                </tr>
                <tr>
                    <th class="text-center">Tax Amount</th>
                    <td class="text-center"><input type="number" name='tax_amount' id="tax_amount" placeholder='0.00' class="form-control" readonly/></td>
                </tr>
                <tr>
                    <th class="text-center">Grand Total</th>
                    <td class="text-center"><input type="number" name='total_amount' id="total_amount" placeholder='0.00' class="form-control" readonly/></td>
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
        $('#tax_amount').val(tax_sum.toFixed(2));
        $('#total_amount').val((tax_sum+total).toFixed(2));
    }
</script>