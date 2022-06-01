<div class="table-responsive">
    <table class="table" id="shoppingCartDetails-table">
        <thead>
            <tr>
                <th>Shoppingcart</th>
        <th>Currency</th>
        <th>Currencyrate</th>
        <th>Product</th>
        <th>Vat</th>
        <th>Quantityunit</th>
        <th>Reverse</th>
        <th>Quantity</th>
        <th>Customerofferdetail</th>
        <th>Customercontractdetail</th>
        <th>Unitprice</th>
        <th>Discountpercent</th>
        <th>Discountunitprice</th>
        <th>Grossprices</th>
        <th>Depositvalue</th>
        <th>Depositpercent</th>
        <th>Netvalue</th>
        <th>Grossvalue</th>
        <th>Vatvalue</th>
        <th>Comment</th>
        <th>Customerorderdetail</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shoppingCartDetails as $shoppingCartDetail)
            <tr>
                <td>{{ $shoppingCartDetail->ShoppingCart }}</td>
            <td>{{ $shoppingCartDetail->Currency }}</td>
            <td>{{ $shoppingCartDetail->CurrencyRate }}</td>
            <td>{{ $shoppingCartDetail->Product }}</td>
            <td>{{ $shoppingCartDetail->Vat }}</td>
            <td>{{ $shoppingCartDetail->QuantityUnit }}</td>
            <td>{{ $shoppingCartDetail->Reverse }}</td>
            <td>{{ $shoppingCartDetail->Quantity }}</td>
            <td>{{ $shoppingCartDetail->CustomerOfferDetail }}</td>
            <td>{{ $shoppingCartDetail->CustomerContractDetail }}</td>
            <td>{{ $shoppingCartDetail->UnitPrice }}</td>
            <td>{{ $shoppingCartDetail->DiscountPercent }}</td>
            <td>{{ $shoppingCartDetail->DiscountUnitPrice }}</td>
            <td>{{ $shoppingCartDetail->GrossPrices }}</td>
            <td>{{ $shoppingCartDetail->DepositValue }}</td>
            <td>{{ $shoppingCartDetail->DepositPercent }}</td>
            <td>{{ $shoppingCartDetail->NetValue }}</td>
            <td>{{ $shoppingCartDetail->GrossValue }}</td>
            <td>{{ $shoppingCartDetail->VatValue }}</td>
            <td>{{ $shoppingCartDetail->Comment }}</td>
            <td>{{ $shoppingCartDetail->CustomerOrderDetail }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['shoppingCartDetails.destroy', $shoppingCartDetail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shoppingCartDetails.show', [$shoppingCartDetail->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('shoppingCartDetails.edit', [$shoppingCartDetail->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
