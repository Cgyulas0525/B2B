@section('css')
    @include('resources.views.layouts.costumcss')
    @include('resources.views.layouts.datatables_css')
@endsection

<div class="form-group col-lg-12">
    <div class="row topmarginMinusz2em">
        <div class="form-group col-sm-6">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel col-sm-2">
                        {!! Form::label('VoucherNumber', 'Bizonylatszám:') !!}
                    </div>
                    <div class="mylabel col-sm-10">
                        {!! Form::text('VoucherNumber', $shoppingCart->VoucherNumber, ['class' => 'form-control', 'readonly' => 'true']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel col-sm-4">
                        {!! Form::label('PaymentMethod', 'Fizetési mód:') !!}
                    </div>
                    <div class="mylabel col-sm-8">
                        {!! Form::select('PaymentMethod', ddwClass::customerPaymentMethodDDW(), $shoppingCart->PaymentMethod, ['class'=>'select2 form-control', 'required' => 'true', 'id' => 'PaymentMethod']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel col-sm-4">
                        {!! Form::label('CurrencyName', 'Pénznem:') !!}
                    </div>
                    <div class="mylabel col-sm-8">
                        {!! Form::text('CurrencyName', $shoppingCart->CurrencyName, ['class'=>'form-control', 'id' => 'CurrencyName', 'readonly' => 'true']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row topmarginMinusz2em">
        <div class="form-group col-sm-8">
            <div class="row">
                <div class="mylabel col-sm-1">
                    {!! Form::label('CustomerAddress', 'Telephely:') !!}
                </div>
                <div class="mylabel col-sm-11">
                    {!! Form::select('CustomerAddress', ddwClass::customerAddressDDW(session('customer_id')), $shoppingCart->CustomerAddress,['class'=>'select2 form-control', 'required' => 'true', 'id' => 'CustomerAddress']) !!}
                </div>
            </div>
        </div>
        <div class="form-group col-sm-4">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel col-sm-2">
                        {!! Form::label('TransportMode', 'Szállítási mód:') !!}
                    </div>
                    <div class="mylabel col-sm-10">
                        {!! Form::select('TransportMode', ddwClass::transportmodeDDW(), $shoppingCart->TransportMode,['class'=>'select2 form-control', 'required' => 'true', 'id' => 'TransportMode']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row topmarginMinusz3em">
        <div class="form-group col-sm-2">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel col-sm-3">
                        {!! Form::label('DepositValue', 'Előleg:') !!}
                    </div>
                    <div class="mylabel col-sm-9">
                        {!! Form::number('DepositValue', $shoppingCart->DepositValue, ['class' => 'form-control text-right', 'id' => 'DepositValue', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.01"']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-sm-2">
            <div class="form-group col-sm-12">
                <div class="row">
                    <div class="mylabel col-sm-3">
                        {!! Form::label('DepositPercent', 'Előleg %:') !!}
                    </div>
                    <div class="mylabel col-sm-9">
                        {!! Form::number('DepositPercent', $shoppingCart->DepositPercent, ['class' => 'form-control text-right', 'id' => 'DepositPercent', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.01"']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-sm-8">
            <div class="row">
                <div class="form-group col-sm-4">
                    <div class="form-group col-sm-12">
                        <div class="row">
                            <div class="mylabel col-sm-4">
                                {!! Form::label('NetValue', 'Nettó érték:') !!}
                            </div>
                            <div class="mylabel col-sm-8">
                                {!! Form::text('NetValue', number_format($shoppingCart->NetValue, 4, ',', '.'), ['class' => 'form-control text-right', 'id' => 'NetValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.0001"']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <div class="row">
                        <div class="mylabel col-sm-4">
                            {!! Form::label('VatValue', 'Áfa:') !!}
                        </div>
                        <div class="mylabel col-sm-8">
                            {!! Form::text('VatValue', number_format($shoppingCart->VatValue, 4, ',', '.'), ['class' => 'form-control text-right', 'id' => 'VatValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.0001"']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <div class="form-group col-sm-12">
                        <div class="row">
                            <div class="mylabel col-sm-4">
                                {!! Form::label('GrossValue', 'Bruttó érték:') !!}
                            </div>
                            <div class="mylabel col-sm-8">
                                {!! Form::text('GrossValue', number_format($shoppingCart->GrossValue, 4, ',', '.'), ['class' => 'form-control text-right', 'id' => 'GrossValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.0001"']) !!}
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
                <div class="mylabel col-sm-2">
                    {!! Form::label('Comment', 'Megjegyzés:') !!}
                </div>
                <div class="mylabel col-sm-10">
                    {!! Form::textarea('Comment', $shoppingCart->Comment, ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'Megjegyzés', 'id' => 'Comment']) !!}
                </div>
            </div>
        </div>
    </div>

    {!! Form::hidden('VoucherDate', $shoppingCart->VoucherDate, ['class' => 'form-control', 'required' => 'true', 'id'=>'VoucherDate']) !!}
    {!! Form::hidden('DeliveryDate', $shoppingCart->DeliveryDate, ['class' => 'form-control', 'required' => 'true', 'id'=>'DeliveryDate']) !!}
    {!! Form::hidden('Customer', $shoppingCart->Customer, ['class' => 'form-control', 'required' => 'true', 'id'=>'Customer']) !!}
    {!! Form::hidden('CustomerContact', $shoppingCart->CustomerContact, ['class' => 'form-control', 'required' => 'true', 'id'=>'CustomerContact']) !!}
    {!! Form::hidden('Currency', $shoppingCart->Currency, ['class' => 'form-control', 'required' => 'true', 'id'=>'Currency']) !!}
    {!! Form::hidden('CurrencyRate', $shoppingCart->Currency, ['class' => 'form-control', 'required' => 'true', 'id'=>'Currency']) !!}
    {!! Form::hidden('CustomerContract', $shoppingCart->CustomerContract, ['class' => 'form-control', 'required' => 'true', 'id'=>'CustomerContract']) !!}
    {!! Form::hidden('Opened', $shoppingCart->Opened, ['class' => 'form-control', 'required' => 'true', 'id'=>'Opened']) !!}
    {!! Form::hidden('CustomerOrder', $shoppingCart->CustomerOrder, ['class' => 'form-control', 'required' => 'true', 'id'=>'CustomerOrder']) !!}

</div>

<div class="form-group col-sm-12">
    <div class="row">
        <div class="col-sm-6">
            <div class="col-sm-6">
                <h4>Tételek</h4>
            </div>
            <div class="col-sm-6 topmarginMinusz2em">
{{--                <a class="btn btn-primary pull-right" id = 'saveBtn' style="margin-left: 1em;">Mentés</a>--}}
                <a href="{{ route('shoppingCartDetailCreate', $shoppingCart->Id) }}" class="btn btn-warning pull-right">Új tétel</a>
            </div>
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
    @include('resources.views.layouts.datatables_js')
    @include('resources.views.functions.customNumberFormat_js')

    <script type="text/javascript">

        var table;
        var vmi = 0;

        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('[data-widget="pushmenu"]').PushMenu('collapse');

            table = $('.partners-table').DataTable({
                serverSide: true,
                scrollY: 390,
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

            $('#saveBtn').click(function (e) {

                var netValue   = 0;
                var vatValue   = 0;
                var grossValue = 0;

                var sCId = <?php echo $shoppingCart->Id; ?>;

                var update = false;

                table.rows().every( function () {
                    var d = this.data();
                    var quantity = $(table.cell(this.index(), 1).node()).find('input').val();
                    if (d.Quantity != quantity) {

                        if ( !update ) {
                            update = true;
                        }

                        d.Quantity = quantity;
                        d.NetValue = d.Quantity * d.UnitPrice;
                        d.VatValue = (d.NetValue / 100) * d.VatRate;
                        d.GrossValue = d.NetValue + d.VatValue;

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
                    }

                    netValue = netValue + parseFloat(d.NetValue);
                    vatValue = vatValue + parseFloat(d.VatValue);
                    grossValue = grossValue + parseFloat(d.GrossValue);

                    this.invalidate(); // invalidate the data DataTables has cached for this row
                } );

                $('#NetValue').val(custom_number_format(netValue, 4, ',', '.'));
                $('#VatValue').val(custom_number_format(vatValue, 4, ',', '.'));
                $('#GrossValue').val(custom_number_format(grossValue, 4, ',', '.'));

                if ( update ) {
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

// Draw once all updates are done
//                 table.draw();
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

                console.log( netValue, vatValue, grossValue, d.NetValue, d.VatValue, d.GrossValue);

                netValue = netValue - parseFloat(d.NetValue);
                vatValue = vatValue - parseFloat(d.VatValue);
                grossValue = grossValue - parseFloat(d.GrossValue);

                console.log(netValue.toFixed(4));

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

