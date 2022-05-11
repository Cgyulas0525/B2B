@section('css')
    @include('layouts.costumcss')
    @include('layouts.datatables_css')
@endsection

<div class="form-group col-sm-4 topmarginMinusz2em">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-4">
                {!! Form::label('VoucherNumber', 'Bizonylatszám:') !!}
            </div>
            <div class="mylabel col-sm-8">
                {!! Form::text('VoucherNumber', $shoppingCart->VoucherNumber, ['class' => 'form-control', 'readonly' => 'true']) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-8 topmarginMinusz2em">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-2">
                {!! Form::label('CustomerAddress', 'Telephely:') !!}
            </div>
            <div class="mylabel col-sm-10">
                {!! Form::select('CustomerAddress', ddwClass::customerAddressDDW(session('customer_id')), $shoppingCart->CustomerAddress,['class'=>'select2 form-control', 'required' => 'true', 'id' => 'CustomerAddress']) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-3 topmarginMinusz2em">
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
<div class="form-group col-sm-3 topmarginMinusz2em">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-4">
                {!! Form::label('TransportMode', 'Szállítási mód:') !!}
            </div>
            <div class="mylabel col-sm-8">
                {!! Form::select('TransportMode', ddwClass::transportmodeDDW(), $shoppingCart->TransportMode,['class'=>'select2 form-control', 'required' => 'true', 'id' => 'TransportMode']) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-3 topmarginMinusz2em">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-4">
                {!! Form::label('DepositValue', 'Előleg:') !!}
            </div>
            <div class="mylabel col-sm-8">
                {!! Form::number('DepositValue', $shoppingCart->DepositValue, ['class' => 'form-control text-right', 'id' => 'DepositValue', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.01"']) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-3 topmarginMinusz2em">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-4">
                {!! Form::label('DepositPercent', 'Előleg %:') !!}
            </div>
            <div class="mylabel col-sm-8">
                {!! Form::number('DepositPercent', $shoppingCart->DepositPercent, ['class' => 'form-control text-right', 'id' => 'DepositPercent', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.01"']) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-2 topmarginMinusz3em">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-4">
                {!! Form::label('NetValue', 'Nettó érték:') !!}
            </div>
            <div class="mylabel col-sm-8">
                {!! Form::number('NetValue', $shoppingCart->NetValue, ['class' => 'form-control text-right', 'id' => 'NetValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.01"']) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-2 topmarginMinusz3em">
    <div class="row">
        <div class="mylabel col-sm-4">
            {!! Form::label('VatValue', 'Áfa:') !!}
        </div>
        <div class="mylabel col-sm-8">
            {!! Form::number('VatValue', $shoppingCart->VatValue, ['class' => 'form-control text-right', 'id' => 'VatValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.01"']) !!}
        </div>
    </div>
</div>
<div class="form-group col-sm-2 topmarginMinusz3em">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-4">
                {!! Form::label('GrossValue', 'Bruttó érték:') !!}
            </div>
            <div class="mylabel col-sm-8">
                {!! Form::number('GrossValue', $shoppingCart->GrossValue, ['class' => 'form-control text-right', 'id' => 'GrossValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.01"']) !!}
            </div>
        </div>
    </div>
</div>

<!-- Comment Field -->
<div class="form-group col-sm-6 topmarginMinusz3em">
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

<div class="col-lg-12 col-md-12 col-xs-12 topmarginMinusz2em">
    <section class="content-header">
        <h4>Tételek</h4>
    </section>
    @include('flash::message')
    <div class="clearfix"></div>
    <div class="box box-primary topmarginMinusz1em">
        <div class="box-body"  >
            <table class="table table-hover table-bordered partners-table" style="width: 100%;"></table>
        </div>
    </div>
    <div class="text-center"></div>
</div>

@section('scripts')
    @include('layouts.datatables_js')

    <script type="text/javascript">
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('.partners-table').DataTable({
                serverSide: true,
                scrollY: 290,
                scrollX: true,
                paging: false,
                // order: [[1, 'asc']],
                ajax: "{{ route('shoppingCartDetailIndex', $shoppingCart->Id) }}",
                columns: [
                    {title: '<a class="btn btn-primary" title="Felvitel" href="{!! route('shoppingCartDetailCreate', $shoppingCart->Id) !!}"><i class="fa fa-plus-square"></i></a>',
                        data: 'action', sClass: "text-center", width: '200px', name: 'action', orderable: false, searchable: false},
                ],
                buttons: [],
            });

        });
    </script>
@endsection

