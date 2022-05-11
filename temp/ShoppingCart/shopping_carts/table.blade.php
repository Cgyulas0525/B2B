<div class="table-responsive">
    <table class="table" id="shoppingCarts-table">
        <thead>
            <tr>
                <th>Vouchertype</th>
        <th>Vouchersequence</th>
        <th>Vouchernumber</th>
        <th>Primevouchernumber</th>
        <th>Cancelledvoucher</th>
        <th>Maintenanceproduct</th>
        <th>Customer</th>
        <th>Customeraddress</th>
        <th>Customercontact</th>
        <th>Voucherdate</th>
        <th>Deliverydate</th>
        <th>Deliveryfrom</th>
        <th>Deliveryto</th>
        <th>Paymentmethod</th>
        <th>Currency</th>
        <th>Currencyrate</th>
        <th>Investment</th>
        <th>Division</th>
        <th>Agent</th>
        <th>Contactemployee</th>
        <th>Campaign</th>
        <th>Customercontract</th>
        <th>Warehouse</th>
        <th>Transportmode</th>
        <th>Depositvalue</th>
        <th>Depositpercent</th>
        <th>Netvalue</th>
        <th>Grossvalue</th>
        <th>Vatvalue</th>
        <th>Amountask</th>
        <th>Maintenance</th>
        <th>Splitforbid</th>
        <th>Primepostage</th>
        <th>Orderhideprice</th>
        <th>Closed</th>
        <th>Closedmanually</th>
        <th>Comment</th>
        <th>Cancelled</th>
        <th>Rowversion</th>
        <th>Maintordersrccustorder</th>
        <th>Expirationdate</th>
        <th>Internalcomment</th>
        <th>Finalizeddate</th>
        <th>Parcelshop</th>
        <th>Strexa</th>
        <th>Strexb</th>
        <th>Strexc</th>
        <th>Strexd</th>
        <th>Dateexa</th>
        <th>Dateexb</th>
        <th>Dateexc</th>
        <th>Dateexd</th>
        <th>Numexa</th>
        <th>Numexb</th>
        <th>Numexc</th>
        <th>Numexd</th>
        <th>Boolexa</th>
        <th>Boolexb</th>
        <th>Boolexc</th>
        <th>Boolexd</th>
        <th>Lookupexa</th>
        <th>Lookupexb</th>
        <th>Lookupexc</th>
        <th>Lookupexd</th>
        <th>Memoexa</th>
        <th>Memoexb</th>
        <th>Memoexc</th>
        <th>Memoexd</th>
        <th>Rowcreate</th>
        <th>Rowmodify</th>
        <th>Notifyphone</th>
        <th>Notifysms</th>
        <th>Notifyemail</th>
        <th>Publichealthptfree</th>
        <th>Fabricdeadline</th>
        <th>Checkoutbankaccount</th>
        <th>Originalvoucher</th>
        <th>Depositgross</th>
        <th>Exchangepackage</th>
        <th>Chaintransaction</th>
        <th>Validitydate</th>
        <th>Currratedate</th>
        <th>Opened</th>
        <th>Customerorder</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shoppingCarts as $shoppingCart)
            <tr>
                <td>{{ $shoppingCart->VoucherType }}</td>
            <td>{{ $shoppingCart->VoucherSequence }}</td>
            <td>{{ $shoppingCart->VoucherNumber }}</td>
            <td>{{ $shoppingCart->PrimeVoucherNumber }}</td>
            <td>{{ $shoppingCart->CancelledVoucher }}</td>
            <td>{{ $shoppingCart->MaintenanceProduct }}</td>
            <td>{{ $shoppingCart->Customer }}</td>
            <td>{{ $shoppingCart->CustomerAddress }}</td>
            <td>{{ $shoppingCart->CustomerContact }}</td>
            <td>{{ $shoppingCart->VoucherDate }}</td>
            <td>{{ $shoppingCart->DeliveryDate }}</td>
            <td>{{ $shoppingCart->DeliveryFrom }}</td>
            <td>{{ $shoppingCart->DeliveryTo }}</td>
            <td>{{ $shoppingCart->PaymentMethod }}</td>
            <td>{{ $shoppingCart->Currency }}</td>
            <td>{{ $shoppingCart->CurrencyRate }}</td>
            <td>{{ $shoppingCart->Investment }}</td>
            <td>{{ $shoppingCart->Division }}</td>
            <td>{{ $shoppingCart->Agent }}</td>
            <td>{{ $shoppingCart->ContactEmployee }}</td>
            <td>{{ $shoppingCart->Campaign }}</td>
            <td>{{ $shoppingCart->CustomerContract }}</td>
            <td>{{ $shoppingCart->Warehouse }}</td>
            <td>{{ $shoppingCart->TransportMode }}</td>
            <td>{{ $shoppingCart->DepositValue }}</td>
            <td>{{ $shoppingCart->DepositPercent }}</td>
            <td>{{ $shoppingCart->NetValue }}</td>
            <td>{{ $shoppingCart->GrossValue }}</td>
            <td>{{ $shoppingCart->VatValue }}</td>
            <td>{{ $shoppingCart->AmountAsk }}</td>
            <td>{{ $shoppingCart->Maintenance }}</td>
            <td>{{ $shoppingCart->SplitForbid }}</td>
            <td>{{ $shoppingCart->PrimePostage }}</td>
            <td>{{ $shoppingCart->OrderHidePrice }}</td>
            <td>{{ $shoppingCart->Closed }}</td>
            <td>{{ $shoppingCart->ClosedManually }}</td>
            <td>{{ $shoppingCart->Comment }}</td>
            <td>{{ $shoppingCart->Cancelled }}</td>
            <td>{{ $shoppingCart->RowVersion }}</td>
            <td>{{ $shoppingCart->MaintOrderSrcCustOrder }}</td>
            <td>{{ $shoppingCart->ExpirationDate }}</td>
            <td>{{ $shoppingCart->InternalComment }}</td>
            <td>{{ $shoppingCart->FinalizedDate }}</td>
            <td>{{ $shoppingCart->ParcelShop }}</td>
            <td>{{ $shoppingCart->StrExA }}</td>
            <td>{{ $shoppingCart->StrExB }}</td>
            <td>{{ $shoppingCart->StrExC }}</td>
            <td>{{ $shoppingCart->StrExD }}</td>
            <td>{{ $shoppingCart->DateExA }}</td>
            <td>{{ $shoppingCart->DateExB }}</td>
            <td>{{ $shoppingCart->DateExC }}</td>
            <td>{{ $shoppingCart->DateExD }}</td>
            <td>{{ $shoppingCart->NumExA }}</td>
            <td>{{ $shoppingCart->NumExB }}</td>
            <td>{{ $shoppingCart->NumExC }}</td>
            <td>{{ $shoppingCart->NumExD }}</td>
            <td>{{ $shoppingCart->BoolExA }}</td>
            <td>{{ $shoppingCart->BoolExB }}</td>
            <td>{{ $shoppingCart->BoolExC }}</td>
            <td>{{ $shoppingCart->BoolExD }}</td>
            <td>{{ $shoppingCart->LookupExA }}</td>
            <td>{{ $shoppingCart->LookupExB }}</td>
            <td>{{ $shoppingCart->LookupExC }}</td>
            <td>{{ $shoppingCart->LookupExD }}</td>
            <td>{{ $shoppingCart->MemoExA }}</td>
            <td>{{ $shoppingCart->MemoExB }}</td>
            <td>{{ $shoppingCart->MemoExC }}</td>
            <td>{{ $shoppingCart->MemoExD }}</td>
            <td>{{ $shoppingCart->RowCreate }}</td>
            <td>{{ $shoppingCart->RowModify }}</td>
            <td>{{ $shoppingCart->NotifyPhone }}</td>
            <td>{{ $shoppingCart->NotifySms }}</td>
            <td>{{ $shoppingCart->NotifyEmail }}</td>
            <td>{{ $shoppingCart->PublicHealthPTFree }}</td>
            <td>{{ $shoppingCart->FabricDeadLine }}</td>
            <td>{{ $shoppingCart->CheckoutBankAccount }}</td>
            <td>{{ $shoppingCart->OriginalVoucher }}</td>
            <td>{{ $shoppingCart->DepositGross }}</td>
            <td>{{ $shoppingCart->ExchangePackage }}</td>
            <td>{{ $shoppingCart->ChainTransaction }}</td>
            <td>{{ $shoppingCart->ValidityDate }}</td>
            <td>{{ $shoppingCart->CurrRateDate }}</td>
            <td>{{ $shoppingCart->Opened }}</td>
            <td>{{ $shoppingCart->CustomerOrder }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['shoppingCarts.destroy', $shoppingCart->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shoppingCarts.show', [$shoppingCart->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('shoppingCarts.edit', [$shoppingCart->id]) }}" class='btn btn-default btn-xs'>
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
