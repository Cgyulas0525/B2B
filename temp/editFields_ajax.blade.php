@section('css')
    @include('layouts.costumcss')
    @include('layouts.datatables_css')
@endsection

<div class="form-group col-lg-12">
    <div class="row topmarginMinusz1em">
        <div class="form-group col-sm-6">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel8 col-sm-2">
                        {!! Form::label('VoucherNumber', 'Bizonylatszám:') !!}
                    </div>
                    <div class="mylabel8 col-sm-10">
                        {!! Form::text('VoucherNumber', $shoppingCart->VoucherNumber, ['class' => 'form-control cellLabel', 'readonly' => 'true']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel8 col-sm-4">
                        {!! Form::label('PaymentMethod', 'Fizetési mód:') !!}
                    </div>
                    <div class="mylabel8 col-sm-8">
                        {!! Form::select('PaymentMethod', ddwClass::customerPaymentMethodDDW(), $shoppingCart->PaymentMethod, ['class'=>'select2 form-control cellLabel', 'required' => 'true', 'id' => 'PaymentMethod']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel8 col-sm-4">
                        {!! Form::label('CurrencyName', 'Pénznem:') !!}
                    </div>
                    <div class="mylabel8 col-sm-8">
                        {!! Form::text('CurrencyName', $shoppingCart->CurrencyName, ['class'=>'form-control cellLabel', 'id' => 'CurrencyName', 'readonly' => 'true']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row topmarginMinusz2em">
        <div class="form-group col-sm-8">
            <div class="row">
                <div class="mylabel8 col-sm-1">
                    {!! Form::label('CustomerAddress', 'Telephely:') !!}
                </div>
                <div class="mylabel8 col-sm-11">
                    {!! Form::select('CustomerAddress', ddwClass::customerAddressDDW(session('customer_id')), $shoppingCart->CustomerAddress,['class'=>'select2 form-control cellLabel', 'required' => 'true', 'id' => 'CustomerAddress']) !!}
                </div>
            </div>
        </div>
        <div class="form-group col-sm-4">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel8 col-sm-2">
                        {!! Form::label('TransportMode', 'Szállítási mód:') !!}
                    </div>
                    <div class="mylabel8 col-sm-10">
                        {!! Form::select('TransportMode', ddwClass::transportmodeDDW(), $shoppingCart->TransportMode,['class'=>'select2 form-control cellLabel', 'required' => 'true', 'id' => 'TransportMode']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row topmarginMinusz2em">
        <div class="form-group col-sm-2">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel8 col-sm-3">
                        {!! Form::label('DepositValue', 'Előleg:') !!}
                    </div>
                    <div class="mylabel8 col-sm-9">
                        {!! Form::number('DepositValue', $shoppingCart->DepositValue, ['class' => 'form-control cellLabel text-right', 'id' => 'DepositValue', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.0001"']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-sm-2">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel8 col-sm-3">
                        {!! Form::label('DepositPercent', 'Előleg %:') !!}
                    </div>
                    <div class="mylabel8 col-sm-9">
                        {!! Form::number('DepositPercent', $shoppingCart->DepositPercent, ['class' => 'form-control cellLabel text-right', 'id' => 'DepositPercent', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.0001"']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-sm-8">
            <div class="row">
                <div class="form-group col-sm-4">
                    <div class="form-group col-sm-12">
                        <div class="row">
                            <div class="mylabel8 col-sm-4">
                                {!! Form::label('NetValue', 'Nettó érték:') !!}
                            </div>
                            <div class="mylabel8 col-sm-8">
                                {!! Form::text('NetValue', number_format($shoppingCart->NetValue, 4, ',', '.'), ['class' => 'form-control cellLabel text-right', 'id' => 'NetValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.0001"']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <div class="row">
                        <div class="mylabel8 col-sm-4">
                            {!! Form::label('VatValue', 'Áfa:') !!}
                        </div>
                        <div class="mylabel8 col-sm-8">
                            {!! Form::text('VatValue', number_format($shoppingCart->VatValue, 4, ',', '.'), ['class' => 'form-control cellLabel text-right', 'id' => 'VatValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.0001"']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <div class="form-group col-sm-12">
                        <div class="row">
                            <div class="mylabel8 col-sm-4">
                                {!! Form::label('GrossValue', 'Bruttó érték:') !!}
                            </div>
                            <div class="mylabel8 col-sm-8">
                                {!! Form::text('GrossValue', number_format($shoppingCart->GrossValue, 4, ',', '.'), ['class' => 'form-control cellLabel text-right', 'id' => 'GrossValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.0001"']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comment Field -->
    <div class="form-group col-sm-12 topmarginMinusz3em">
        <div class="form-group col-sm-12">
            <div class="row">
                <div class="mylabel8 col-sm-1">
                    {!! Form::label('Comment', 'Megjegyzés:') !!}
                </div>
                <div class="mylabel8 col-sm-11">
                    {!! Form::textarea('Comment', $shoppingCart->Comment, ['class' => 'form-control cellLabel', 'rows' => '2', 'placeholder' => 'Megjegyzés', 'id' => 'Comment']) !!}
                </div>
            </div>
        </div>
    </div>

    {!! Form::hidden('VoucherDate', $shoppingCart->VoucherDate, ['class' => 'form-control cellLabel', 'required' => 'true', 'id'=>'VoucherDate']) !!}
    {!! Form::hidden('DeliveryDate', $shoppingCart->DeliveryDate, ['class' => 'form-control cellLabel', 'required' => 'true', 'id'=>'DeliveryDate']) !!}
    {!! Form::hidden('Customer', $shoppingCart->Customer, ['class' => 'form-control cellLabel', 'required' => 'true', 'id'=>'Customer']) !!}
    {!! Form::hidden('CustomerContact', $shoppingCart->CustomerContact, ['class' => 'form-control cellLabel', 'required' => 'true', 'id'=>'CustomerContact']) !!}
    {!! Form::hidden('Currency', $shoppingCart->Currency, ['class' => 'form-control cellLabel', 'required' => 'true', 'id'=>'Currency']) !!}
    {!! Form::hidden('CurrencyRate', $shoppingCart->Currency, ['class' => 'form-control cellLabel', 'required' => 'true', 'id'=>'Currency']) !!}
    {!! Form::hidden('CustomerContract', $shoppingCart->CustomerContract, ['class' => 'form-control cellLabel', 'required' => 'true', 'id'=>'CustomerContract']) !!}
    {!! Form::hidden('Opened', $shoppingCart->Opened, ['class' => 'form-control cellLabel', 'required' => 'true', 'id'=>'Opened']) !!}
    {!! Form::hidden('CustomerOrder', $shoppingCart->CustomerOrder, ['class' => 'form-control cellLabel', 'required' => 'true', 'id'=>'CustomerOrder']) !!}

    <div class="card-footer">
        {!! Form::submit('Ment', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('shoppingCarts.index') }}" class="btn btn-default">Kilép</a>
    </div>

</div>

<div class="form-group col-sm-12">
    <div class="row">
        <div class="col-lg-1">
            <div class="col-sm-12">
                <h4>Tételek</h4>
            </div>
        </div>
        <div class="col-lg-1">
            <a href="{{ route('shoppingCartDetailCreate', $shoppingCart->Id) }}" class="btn btn-warning pull-right" style="margin-left: 5px; width: 80px;">Új tétel</a>
        </div>
        <div class="col-lg-6" style="float: right;">
            <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" class="form-horizontal  pull-right" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group col-lg-9">
                    <div class="row">
                        <div class="mylabel col-lg-1">
                            {!! Form::label('kep', 'File:') !!}
                        </div>
                        <div class="mylabel col-lg-2">
                            <label class="image__file-upload">Válasszon
                                {!! Form::file('kep',['class'=>'d-none', 'name' => "import_file", 'accept' => ".xlsx, .xls, .csv", 'id' => "import_file"]) !!}
                            </label>
                        </div>
                        <div class="mylabel col-lg-1">
                            {!! Form::label('code', 'Excel kód:') !!}
                        </div>
                        <div class="mylabel col-lg-3">
                            {!! Form::select('code', ddwClass::excelImportDDW(), null,['class'=>'select2 form-control', 'id' => 'code', 'style' => "width: 10em;"]) !!}
                        </div>
                        <div class="mylabel col-lg-2">
                            {!! Form::label('quantity', 'Mennyiség:') !!}
                        </div>
                        <div class="mylabel col-lg-3">
                            {!! Form::select('quantity', ddwClass::excelImportDDW(), null,['class'=>'select2 form-control', 'id' => 'quantity', 'style' => "width: 10em;"]) !!}
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4">
            <a href="" class="btn btn-primary" id="importButton" style="width: 80px;float: left;">Import</a>
        </div>
    </div>
    <br>
</div>
<div class="col-lg-12 col-md-12 col-xs-12 topmarginMinusz2em">
    @include('flash::message')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body"  >
            <table class="table table-hover table-bordered partners-table" id = "myTable" style="width: 100%;"></table>
        </div>
    </div>
    <div class="text-center"></div>
</div>

@section('scripts')
    @include('layouts.datatables_js')
    @include('functions.customNumberFormat_js')
    @include('functions.sweetalert_js')
    @include('functions.ajax_js')

    <script type="text/javascript">

        var table;
        var vmi = 0;

        $(function () {

            ajaxSetup();

            $('[data-widget="pushmenu"]').PushMenu('collapse');

            table = $('.partners-table').DataTable({
                serverSide: true,
                scrollY: 250,
                scrollX: true,
                paging: false,
                select: false,
                order: [[0, 'asc']],
                ajax: "{{ route('shoppingCartDetailIndex', $shoppingCart->Id ) }}",
                columns: [
                    {title: 'Termék', data: 'ProductName', name: 'ProductName'},
                    {title: 'Mennyiség', data: 'Quantity', width: '150px', name: 'Quantity', id: 'Quntity'},
                    {title: 'Me.egys', data: 'QuantityUnitName', name: 'QuantityUnitName'},
                    {title: 'Egys.ár', data: 'UnitPrice', name: 'UnitPrice', id: 'UnitPrice'},
                    {title: 'Netto', data: 'NetValue', name: 'NetValue', id: 'NetValueD'},
                    {title: 'ÁFA', data: 'VatValue', name: 'VatValue', id: 'VatValueD'},
                    {title: 'Bruttó', data: 'GrossValue', name: 'GrossValue', id: 'GrossValueD'},
                    {title: 'Pénznem', data: 'CurrencyName', name: 'CurrencyName'},
                    {title: 'Id', data: 'Id', name: 'Id', id: 'Id'},
                    {title: 'Product', data: 'Product', name: 'Product', id: 'Product'},
                    {title: 'VatRate', data: 'VatRate', name: 'VatRate', id: 'VatRate'},
                    {title: ' ', data: 'action', sClass: "text-center", width: '50px', name: 'action', orderable: false, searchable: false},
                ],
                columnDefs: [
                    {
                        targets: [8,9,10],
                        visible: false
                    },
                    {
                        targets: [3,4,5,6],
                        render: $.fn.dataTable.render.number( '.', ',', 4),
                        sClass: 'text-right',
                        width: '150px'
                    },
                    {
                        targets: [7],
                        sClass: "text-center",
                        width:'50px'
                    },
                    {
                        targets: [1],
                        render: function ( data, type, full, meta ) {
                            return '<input class="form-control text-right" type="number" value="'+ data +'" onfocusout="QuantityChange('+meta["row"]+', this.value)" pattern="[0-9]+([\.,][0-9]+)?" step="0.0001" style="width:250px;height:20px;font-size: 15px;"/>';
                        },
                    }
                ],
                buttons: [],
            });

            $("#import_file").on("change", function() {
                var importFile = $(this).val();

                var vmi = $('#import_file')[0].files[0].name;

                var path = (window.URL || window.webkitURL).createObjectURL(importFile);

                console.log(path);
                {{--if(importFile && importFile != 0) {--}}
                {{--    console.log($("#import_file").val());--}}
                {{--    $.ajax({--}}
                {{--        type:"GET",--}}
                {{--        url:"{{url('api/excelImportDDW')}}?file="+importFile,--}}
                {{--        success:function(res){--}}
                {{--            if(res){--}}
                {{--                // $("#customercontact_id").empty();--}}
                {{--                // $("#customercontact_id").append('<option></option>');--}}
                {{--                $.each(res,function(key,value){--}}
                {{--                    console.log(value);--}}
                {{--                    // $("#customercontact_id").append('<option value="'+value.Id+'">'+value.Name+'</option>');--}}
                {{--                });--}}

                {{--                if ( res.length == 1 ) {--}}
                {{--                    $('#code').val(res[0].Id);--}}
                {{--                }--}}

                {{--            }else{--}}
                {{--                $("#code").empty();--}}
                {{--            }--}}
                {{--        }--}}
                {{--    });--}}
                {{--}--}}
            });

            $('#code').change(function() {
                let code = $('#code').val();
                console.log(code);
                {{--$.ajax({--}}
                {{--    type:"GET",--}}
                {{--    url:"{{url('api/getCustomerContact')}}",--}}
                {{--    data: { id: customercontact_id },--}}
                {{--    success:function(res){--}}
                {{--        if(res.Email != null || res.Email == ''){--}}
                {{--            $("#email").val(res.Email);--}}
                {{--            $('#email').prop('readonly', true);--}}
                {{--            $("#megjegyzes").focus();--}}
                {{--        }else{--}}
                {{--            sw("Kérem a Symbol Ügyviteli rendszerben rendeljen a felhasználóhoz email címet!");--}}
                {{--            $("#customercontact_id").val(null);--}}
                {{--            $("#customercontact_id").focus();--}}
                {{--        }--}}
                {{--    }--}}
                {{--});--}}
            });

            $('#importButton').click(function (e) {
                let importFile = $("#import_file").val();
                alert(importFile);
            });

        });

        function dotKill(param) {
            if ( param.indexOf('.') != -1 && param.indexOf('.') != (param.length - 5) ) {
                param = param.substr(0, param.indexOf('.')).concat(param.substr(param.indexOf('.') + 1));
                dotKill(param);
            } else {
                vmi = parseFloat(param).toFixed(4);
            }
        }

        function dotKillCall(mi) {
            vmi = 0;
            dotKill($(mi).val().replace(/\,/g, '.'));
            return vmi;
        }

        function QuantityChange(Row, value) {

            var sCId = <?php echo $shoppingCart->Id; ?>;

            var d = table.row(Row).data();
            var netValue = parseFloat(dotKillCall('#NetValue'));
            var vatValue = parseFloat(dotKillCall('#VatValue'));
            var grossValue = parseFloat(dotKillCall('#GrossValue'));

            if ( d.Quantity != value ) {

                netValue = netValue - parseFloat(d.NetValue);
                vatValue = vatValue - parseFloat(d.VatValue);
                grossValue = grossValue - parseFloat(d.GrossValue);

                d.NetValue = value * d.UnitPrice;
                d.VatValue = (d.NetValue / 100) * d.VatRate;
                d.GrossValue = d.NetValue + d.VatValue;
                d.Quantity = value;

                netValue = netValue + parseFloat(d.NetValue);
                vatValue = vatValue + parseFloat(d.VatValue);
                grossValue = grossValue + parseFloat(d.GrossValue);

                $('#NetValue').val(custom_number_format(netValue, 4, ',', '.'));
                $('#VatValue').val(custom_number_format(vatValue, 4, ',', '.'));
                $('#GrossValue').val(custom_number_format(grossValue, 4, ',', '.'));

                $.ajax({
                    type:"GET",
                    url:"{{url('api/shoppingCartDetailQuantityUpdate')}}",
                    data: { Id: d.Id, Quantity: d.Quantity, NetValue: d.NetValue, VatValue: d.VatValue, GrossValue: d.GrossValue },
                    success: function (response) {
                        console.log('Error:', response);
                    },
                    error: function (response) {
                        // console.log('Error:', response);
                        alert('nem ok');
                    }
                });

                table.row(Row).invalidate();

                $.ajax({
                    type:"GET",
                    url:"{{url('api/shoppingCartUpdate')}}",
                    data: { Id: sCId, NetValue: netValue, VatValue: vatValue, GrossValue: grossValue },
                    success: function (response) {
                        console.log('Error:', response);
                    },
                    error: function (response) {
                        // console.log('Error:', response);
                        alert('nem ok');
                    }
                });
            }
        }
    </script>
@endsection

