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
            <h4>Tételek</h4>
        </div>
        <div class="col-sm-6">
            <a class="btn btn-primary pull-right" id = 'saveBtn' style="margin-left: 1em;">Mentés</a>
            <a href="{{ route('shoppingCartDetailCreate', $shoppingCart->Id) }}" class="btn btn-warning pull-right">Új tétel</a>
        </div>
    </div>
    <br>
</div>
<div class="col-lg-12 col-md-12 col-xs-12 topmarginMinusz2em">
    @include('flash::message')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body"  >
            <table class="tablesmall table-hover table-bordered" id="myTable" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 25em; text-align: center;">Termék</th>
                        <th style="width: 15em; text-align: center;">Mennyiség</th>
                        <th style="width: 10em;text-align: center;">Me.</th>
                        <th style="text-align: center;">Egys.ár</th>
                        <th style="text-align: center;">Nettó</th>
                        <th style="text-align: center;">Áfa</th>
                        <th style="text-align: center;">Bruttó</th>
                        <th style="width: 5em;text-align: center;">Pénznem</th>
                        <th class="hide-col"></th>
                        <th class="hide-col"></th>
                        <th class="hide-col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(shoppingCartClass::getShoppingCartDetails($shoppingCart->Id) as $shoppingCartDetail)
                        <tr>
                            <td>{!! Form::text('ProductName', $shoppingCartDetail->ProductName, ['class' => 'form-control', 'id'=>'ProductName', 'readonly' => 'true', 'style' => 'cursor: not-allowed']) !!}</td>
                            <td>{!! Form::number('Quantity', $shoppingCartDetail->Quantity, ['class' => 'form-control text-right', 'id' => 'Quantity', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.0001"']) !!}</td>
                            <td>{!! Form::text('QuantityUnit', $shoppingCartDetail->QuantityUnitName, ['class' => 'form-control', 'id'=>'QuantityUnit', 'readonly' => 'true', 'style' => 'cursor: not-allowed']) !!}</td>
                            <td>{!! Form::text('UnitPrice', number_format($shoppingCartDetail->UnitPrice, 4, ',', '.'), ['class' => 'form-control text-right', 'id'=>'UnitPrice', 'readonly' => 'true', 'style' => 'cursor: not-allowed']) !!}</td>
                            <td>{!! Form::text('NetValueD', number_format($shoppingCartDetail->NetValue, 4, ',', '.'), ['class' => 'form-control text-right', 'id' => 'NetValueD', 'readonly' => 'true', 'style' => 'cursor: not-allowed']) !!}</td>
                            <td>{!! Form::text('VatValueD', number_format($shoppingCartDetail->VatValue, 4, ',', '.'), ['class' => 'form-control text-right', 'id' => 'VatValueD', 'readonly' => 'true', 'style' => 'cursor: not-allowed']) !!}</td>
                            <td>{!! Form::text('GrossValueD', number_format($shoppingCartDetail->GrossValue, 4, ',', '.'), ['class' => 'form-control text-right', 'id' => 'GrossValueD', 'readonly' => 'true', 'style' => 'cursor: not-allowed']) !!}</td>
                            <td>{!! Form::text('Currency', $shoppingCartDetail->CurrencyName, ['class' => 'form-control text-center', 'id'=>'Currency', 'readonly' => 'true', 'style' => 'cursor: not-allowed']) !!}</td>
                            <td class="hide-col">{!! Form::hidden('id', $shoppingCartDetail->Id, ['class' => 'form-control', 'id' => 'Id']) !!}</td>
                            <td class="hide-col">{!! Form::hidden('Product', $shoppingCartDetail->Product, ['class' => 'form-control', 'id' => 'Product']) !!}</td>
                            <td class="hide-col">{!! Form::hidden('VatRate', $shoppingCartDetail->VatRate, ['class' => 'form-control', 'id' => 'VatRate']) !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center"></div>
</div>

@section('scripts')
    @include('resources.views.layouts.datatables_js')
    @include('resources.views.functions.customNumberFormat_js')

    <script type="text/javascript">
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('[data-widget="pushmenu"]').PushMenu('collapse');

            var rows = $('#myTable').find('tbody').children();

            console.log(rows);

            rows.each(function (i) {
                var inputs = $(this).find('input');
                i++;
                inputs.eq(0).attr('id', 'ProductName'+i )
                    .attr('name', 'ProductName'+i )
                inputs.eq(1).attr('id', 'Quantity'+i )
                    .attr('name', 'Quantity'+i )
                inputs.eq(2).attr('id', 'QuantityUnit'+i )
                    .attr('name', 'QuantityUnit'+i )
                inputs.eq(3).attr('id', 'UnitPrice'+i )
                    .attr('name', 'UnitPrice'+i )
                inputs.eq(4).attr('id', 'NetValueD'+i )
                    .attr('name', 'NetValueD'+i )
                inputs.eq(5).attr('id', 'VatValueD'+i )
                    .attr('name', 'VatValueD'+i )
                inputs.eq(6).attr('id', 'GrossValueD'+i )
                    .attr('name', 'GrossValueD'+i )
                inputs.eq(7).attr('id', 'Currency'+i )
                    .attr('name', 'Currency'+i )
                inputs.eq(8).attr('id', 'Id'+i )
                    .attr('name', 'Id'+i )
                inputs.eq(9).attr('id', 'Product'+i )
                    .attr('name', 'Product'+i )
                inputs.eq(10).attr('id', 'VatRate'+i )
                    .attr('name', 'VatRate'+i )
            });

            var netValue   = 0;
            var vatValue   = 0;
            var grossValue = 0;

            var vmi = 0;

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

            function columnCount() {
                netValue   = 0;
                vatValue   = 0;
                grossValue = 0;
                let quantity  = 0;
                let unitPrice = 0;
                let vatRate   = 0;
                for ( i = 1; i <= rows.length; i++ ) {
                    quantity = parseFloat(dotKillCall('#Quantity' + i));
                    unitPrice = parseFloat(dotKillCall('#UnitPrice' + i));
                    vatRate   = parseFloat(dotKillCall('#VatRate' + i));

                    let netValueD   = quantity * unitPrice;
                    let vatValueD   = (netValueD / 100) * vatRate;
                    let grossValueD = netValueD + vatValueD;

                    $('#NetValueD' + i).val(custom_number_format(netValueD, 4, ',', '.'));
                    $('#VatValueD' + i).val(custom_number_format(vatValueD, 4, ',', '.'));
                    $('#GrossValueD' + i).val(custom_number_format(grossValueD, 4, ',', '.'));

                    netValue = netValue + netValueD;
                    vatValue = vatValue + vatValueD;
                    grossValue = grossValue + grossValueD;
                }

                $('#NetValue').val(custom_number_format(netValue, 4, ',', '.'));
                $('#VatValue').val(custom_number_format(vatValue, 4, ',', '.'));
                $('#GrossValue').val(custom_number_format(grossValue, 4, ',', '.'));

            }

            // $("#myTable tbody tr").on('keyup input' , function(event){
            //
            //     unitPrice = table.cell(this, 3).data();
            //     console.log(unitPrice);
            //     vatRate   = table.cell(this, 10).data();
            //     quantity  = $(table.cell(this, 1).node()).find('input').val();
            //
            //     netValue = unitPrice * quantity;
            //
            //     table.cell(this, 4).data( netValue ).draw();
            //
            // });


            $('#saveBtn').click(function (e) {
                columnCount();
            });

            // rows.each(function (i) {
            //     $('#Quantity' + i).change(function() {
            //         columnCount();
            //     });
            // });

        });
    </script>
@endsection

