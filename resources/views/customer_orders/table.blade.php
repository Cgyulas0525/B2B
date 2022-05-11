<div class="table-responsive">
    <table class="table" id="customerOrders-table">
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
        <th>Closereason</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customerOrders as $customerOrder)
            <tr>
                <td>{{ $customerOrder->VoucherType }}</td>
            <td>{{ $customerOrder->VoucherSequence }}</td>
            <td>{{ $customerOrder->VoucherNumber }}</td>
            <td>{{ $customerOrder->PrimeVoucherNumber }}</td>
            <td>{{ $customerOrder->CancelledVoucher }}</td>
            <td>{{ $customerOrder->MaintenanceProduct }}</td>
            <td>{{ $customerOrder->Customer }}</td>
            <td>{{ $customerOrder->CustomerAddress }}</td>
            <td>{{ $customerOrder->CustomerContact }}</td>
            <td>{{ $customerOrder->VoucherDate }}</td>
            <td>{{ $customerOrder->DeliveryDate }}</td>
            <td>{{ $customerOrder->DeliveryFrom }}</td>
            <td>{{ $customerOrder->DeliveryTo }}</td>
            <td>{{ $customerOrder->PaymentMethod }}</td>
            <td>{{ $customerOrder->Currency }}</td>
            <td>{{ $customerOrder->CurrencyRate }}</td>
            <td>{{ $customerOrder->Investment }}</td>
            <td>{{ $customerOrder->Division }}</td>
            <td>{{ $customerOrder->Agent }}</td>
            <td>{{ $customerOrder->ContactEmployee }}</td>
            <td>{{ $customerOrder->Campaign }}</td>
            <td>{{ $customerOrder->CustomerContract }}</td>
            <td>{{ $customerOrder->Warehouse }}</td>
            <td>{{ $customerOrder->TransportMode }}</td>
            <td>{{ $customerOrder->DepositValue }}</td>
            <td>{{ $customerOrder->DepositPercent }}</td>
            <td>{{ $customerOrder->NetValue }}</td>
            <td>{{ $customerOrder->GrossValue }}</td>
            <td>{{ $customerOrder->VatValue }}</td>
            <td>{{ $customerOrder->AmountAsk }}</td>
            <td>{{ $customerOrder->Maintenance }}</td>
            <td>{{ $customerOrder->SplitForbid }}</td>
            <td>{{ $customerOrder->PrimePostage }}</td>
            <td>{{ $customerOrder->OrderHidePrice }}</td>
            <td>{{ $customerOrder->Closed }}</td>
            <td>{{ $customerOrder->ClosedManually }}</td>
            <td>{{ $customerOrder->Comment }}</td>
            <td>{{ $customerOrder->Cancelled }}</td>
            <td>{{ $customerOrder->RowVersion }}</td>
            <td>{{ $customerOrder->MaintOrderSrcCustOrder }}</td>
            <td>{{ $customerOrder->ExpirationDate }}</td>
            <td>{{ $customerOrder->InternalComment }}</td>
            <td>{{ $customerOrder->FinalizedDate }}</td>
            <td>{{ $customerOrder->ParcelShop }}</td>
            <td>{{ $customerOrder->StrExA }}</td>
            <td>{{ $customerOrder->StrExB }}</td>
            <td>{{ $customerOrder->StrExC }}</td>
            <td>{{ $customerOrder->StrExD }}</td>
            <td>{{ $customerOrder->DateExA }}</td>
            <td>{{ $customerOrder->DateExB }}</td>
            <td>{{ $customerOrder->DateExC }}</td>
            <td>{{ $customerOrder->DateExD }}</td>
            <td>{{ $customerOrder->NumExA }}</td>
            <td>{{ $customerOrder->NumExB }}</td>
            <td>{{ $customerOrder->NumExC }}</td>
            <td>{{ $customerOrder->NumExD }}</td>
            <td>{{ $customerOrder->BoolExA }}</td>
            <td>{{ $customerOrder->BoolExB }}</td>
            <td>{{ $customerOrder->BoolExC }}</td>
            <td>{{ $customerOrder->BoolExD }}</td>
            <td>{{ $customerOrder->LookupExA }}</td>
            <td>{{ $customerOrder->LookupExB }}</td>
            <td>{{ $customerOrder->LookupExC }}</td>
            <td>{{ $customerOrder->LookupExD }}</td>
            <td>{{ $customerOrder->MemoExA }}</td>
            <td>{{ $customerOrder->MemoExB }}</td>
            <td>{{ $customerOrder->MemoExC }}</td>
            <td>{{ $customerOrder->MemoExD }}</td>
            <td>{{ $customerOrder->RowCreate }}</td>
            <td>{{ $customerOrder->RowModify }}</td>
            <td>{{ $customerOrder->NotifyPhone }}</td>
            <td>{{ $customerOrder->NotifySms }}</td>
            <td>{{ $customerOrder->NotifyEmail }}</td>
            <td>{{ $customerOrder->PublicHealthPTFree }}</td>
            <td>{{ $customerOrder->FabricDeadLine }}</td>
            <td>{{ $customerOrder->CheckoutBankAccount }}</td>
            <td>{{ $customerOrder->OriginalVoucher }}</td>
            <td>{{ $customerOrder->DepositGross }}</td>
            <td>{{ $customerOrder->ExchangePackage }}</td>
            <td>{{ $customerOrder->ChainTransaction }}</td>
            <td>{{ $customerOrder->ValidityDate }}</td>
            <td>{{ $customerOrder->CurrRateDate }}</td>
            <td>{{ $customerOrder->CloseReason }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['customerOrders.destroy', $customerOrder->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customerOrders.show', [$customerOrder->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('customerOrders.edit', [$customerOrder->id]) }}" class='btn btn-default btn-xs'>
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
