@section('css')
    @include('layouts.costumcss')
@endsection

<div class="form-group col-sm-4">
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
<div class="form-group col-sm-8">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-2">
                {!! Form::label('CustomerAddress', 'Telephely:') !!}
            </div>
            <div class="mylabel col-sm-10">
                {!! Form::text('CustomerAddress', $shoppingCart->CustomerAddressName,['class'=>'form-control', 'readonly' => 'true', 'id' => 'CustomerAddress']) !!}
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
                {!! Form::text('PaymentMethod', $shoppingCart->PaymentMethodName, ['class'=>'form-control', 'readonly' => 'true', 'id' => 'PaymentMethod']) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-3">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-4">
                {!! Form::label('TransportMode', 'Szállítási mód:') !!}
            </div>
            <div class="mylabel col-sm-8">
                {!! Form::text('TransportMode', $shoppingCart->TransportModeName, ['class'=>'form-control', 'readonly' => 'true', 'id' => 'TransportMode']) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-3">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-4">
                {!! Form::label('DepositValue', 'Előleg:') !!}
            </div>
            <div class="mylabel col-sm-8">
                {!! Form::number('DepositValue', $shoppingCart->DepositValue, ['class' => 'form-control text-right', 'id' => 'DepositValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.01"']) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-3">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-4">
                {!! Form::label('DepositPercent', 'Előleg %:') !!}
            </div>
            <div class="mylabel col-sm-8">
                {!! Form::number('DepositPercent', $shoppingCart->DepositPercent, ['class' => 'form-control text-right', 'id' => 'DepositPercent', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.01"']) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-2">
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
<div class="form-group col-sm-2">
    <div class="row">
        <div class="mylabel col-sm-4">
            {!! Form::label('VatValue', 'Áfa:') !!}
        </div>
        <div class="mylabel col-sm-8">
            {!! Form::number('VatValue', $shoppingCart->VatValue, ['class' => 'form-control text-right', 'id' => 'VatValue', 'readonly' => 'true', 'pattern="[0-9]+([\.,][0-9]+)?" step="0.01"']) !!}
        </div>
    </div>
</div>
<div class="form-group col-sm-2">
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
<div class="form-group col-sm-6">
    {!! Form::label('Comment', 'Megjegyzés:') !!}
    {!! Form::textarea('Comment', $shoppingCart->Comment, ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'Megjegyzés', 'readonly' => 'true', 'id' => 'Comment']) !!}
</div>

@section('scripts')

    @include('functions.sweetalert_js')
    @include('functions.ajax_js')

    <script type="text/javascript">
        $(function () {

            ajaxSetup();

            $('#saveBtn').on('click', function (event) {
                event.preventDefault();

                const url = $(this).attr('href');
                swal.fire({
                    title: "Biztos törli a tételt?",
                    text: "Ez a bejegyzés véglegesen törlődik!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Törlés",
                    cancelButtonText: "Kilép"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "GET",
                            url:"{{url('cartDestroy', [$shoppingCart->Id])}}",
                            success: function (response) {
                                window.location.href = url;
                                if ( response.name != null ) {
                                    sw("Ennek a felhasználónak már van hozzáférése a rendszerhez!");
                                }
                            },
                            error: function (response) {
                                console.log('Error:', response);
                                alert('nem ok');
                            }
                        });
                    }
                });
            });

        });

    </script>

@endsection


