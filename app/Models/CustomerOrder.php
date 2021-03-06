<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerOrder
 * @package App\Models
 * @version February 1, 2022, 3:05 pm UTC
 *
 * @property integer $VoucherType
 * @property integer $VoucherSequence
 * @property string $VoucherNumber
 * @property string $PrimeVoucherNumber
 * @property integer $CancelledVoucher
 * @property integer $MaintenanceProduct
 * @property integer $Customer
 * @property integer $CustomerAddress
 * @property integer $CustomerContact
 * @property string|\Carbon\Carbon $VoucherDate
 * @property string|\Carbon\Carbon $DeliveryDate
 * @property string|\Carbon\Carbon $DeliveryFrom
 * @property string|\Carbon\Carbon $DeliveryTo
 * @property integer $PaymentMethod
 * @property integer $Currency
 * @property number $CurrencyRate
 * @property integer $Investment
 * @property integer $Division
 * @property integer $Agent
 * @property integer $ContactEmployee
 * @property integer $Campaign
 * @property integer $CustomerContract
 * @property integer $Warehouse
 * @property integer $TransportMode
 * @property number $DepositValue
 * @property number $DepositPercent
 * @property number $NetValue
 * @property number $GrossValue
 * @property number $VatValue
 * @property integer $AmountAsk
 * @property integer $Maintenance
 * @property integer $SplitForbid
 * @property number $PrimePostage
 * @property integer $OrderHidePrice
 * @property integer $Closed
 * @property integer $ClosedManually
 * @property string $Comment
 * @property integer $Cancelled
 * @property string|\Carbon\Carbon $RowVersion
 * @property integer $MaintOrderSrcCustOrder
 * @property string|\Carbon\Carbon $ExpirationDate
 * @property string $InternalComment
 * @property string|\Carbon\Carbon $FinalizedDate
 * @property integer $ParcelShop
 * @property string $StrExA
 * @property string $StrExB
 * @property string $StrExC
 * @property string $StrExD
 * @property string|\Carbon\Carbon $DateExA
 * @property string|\Carbon\Carbon $DateExB
 * @property string|\Carbon\Carbon $DateExC
 * @property string|\Carbon\Carbon $DateExD
 * @property number $NumExA
 * @property number $NumExB
 * @property number $NumExC
 * @property number $NumExD
 * @property integer $BoolExA
 * @property integer $BoolExB
 * @property integer $BoolExC
 * @property integer $BoolExD
 * @property integer $LookupExA
 * @property integer $LookupExB
 * @property integer $LookupExC
 * @property integer $LookupExD
 * @property string $MemoExA
 * @property string $MemoExB
 * @property string $MemoExC
 * @property string $MemoExD
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property integer $NotifyPhone
 * @property integer $NotifySms
 * @property integer $NotifyEmail
 * @property integer $PublicHealthPTFree
 * @property string|\Carbon\Carbon $FabricDeadLine
 * @property integer $CheckoutBankAccount
 * @property integer $OriginalVoucher
 * @property integer $DepositGross
 * @property integer $ExchangePackage
 * @property integer $ChainTransaction
 * @property string|\Carbon\Carbon $ValidityDate
 * @property string|\Carbon\Carbon $CurrRateDate
 * @property string $CancelReason
 * @property integer $CustomerOrderStatus
 * @property string $BankTRID
 * @property string $CloseReason
 */
class CustomerOrder extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'customerorder';

//    const CREATED_AT = 'created_at';
//    const UPDATED_AT = 'updated_at';
//
//
//    protected $dates = ['deleted_at'];



    public $fillable = [
        'VoucherType',
        'VoucherSequence',
        'VoucherNumber',
        'PrimeVoucherNumber',
        'CancelledVoucher',
        'MaintenanceProduct',
        'Customer',
        'CustomerAddress',
        'CustomerContact',
        'VoucherDate',
        'DeliveryDate',
        'DeliveryFrom',
        'DeliveryTo',
        'PaymentMethod',
        'Currency',
        'CurrencyRate',
        'Investment',
        'Division',
        'Agent',
        'ContactEmployee',
        'Campaign',
        'CustomerContract',
        'Warehouse',
        'TransportMode',
        'DepositValue',
        'DepositPercent',
        'NetValue',
        'GrossValue',
        'VatValue',
        'AmountAsk',
        'Maintenance',
        'SplitForbid',
        'PrimePostage',
        'OrderHidePrice',
        'Closed',
        'ClosedManually',
        'Comment',
        'Cancelled',
        'RowVersion',
        'MaintOrderSrcCustOrder',
        'ExpirationDate',
        'InternalComment',
        'FinalizedDate',
        'ParcelShop',
        'StrExA',
        'StrExB',
        'StrExC',
        'StrExD',
        'DateExA',
        'DateExB',
        'DateExC',
        'DateExD',
        'NumExA',
        'NumExB',
        'NumExC',
        'NumExD',
        'BoolExA',
        'BoolExB',
        'BoolExC',
        'BoolExD',
        'LookupExA',
        'LookupExB',
        'LookupExC',
        'LookupExD',
        'MemoExA',
        'MemoExB',
        'MemoExC',
        'MemoExD',
        'RowCreate',
        'RowModify',
        'NotifyPhone',
        'NotifySms',
        'NotifyEmail',
        'PublicHealthPTFree',
        'FabricDeadLine',
        'CheckoutBankAccount',
        'OriginalVoucher',
        'DepositGross',
        'ExchangePackage',
        'ChainTransaction',
        'ValidityDate',
        'CurrRateDate',
        'CancelReason',
        'CustomerOrderStatus',
        'BankTRID',
        'CloseReason'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'VoucherType' => 'integer',
        'VoucherSequence' => 'integer',
        'VoucherNumber' => 'string',
        'PrimeVoucherNumber' => 'string',
        'CancelledVoucher' => 'integer',
        'MaintenanceProduct' => 'integer',
        'Customer' => 'integer',
        'CustomerAddress' => 'integer',
        'CustomerContact' => 'integer',
        'VoucherDate' => 'datetime',
        'DeliveryDate' => 'datetime',
        'DeliveryFrom' => 'datetime',
        'DeliveryTo' => 'datetime',
        'PaymentMethod' => 'integer',
        'Currency' => 'integer',
        'CurrencyRate' => 'decimal:4',
        'Investment' => 'integer',
        'Division' => 'integer',
        'Agent' => 'integer',
        'ContactEmployee' => 'integer',
        'Campaign' => 'integer',
        'CustomerContract' => 'integer',
        'Warehouse' => 'integer',
        'TransportMode' => 'integer',
        'DepositValue' => 'decimal:4',
        'DepositPercent' => 'decimal:4',
        'NetValue' => 'decimal:4',
        'GrossValue' => 'decimal:4',
        'VatValue' => 'decimal:4',
        'AmountAsk' => 'integer',
        'Maintenance' => 'integer',
        'SplitForbid' => 'integer',
        'PrimePostage' => 'decimal:4',
        'OrderHidePrice' => 'integer',
        'Closed' => 'integer',
        'ClosedManually' => 'integer',
        'Comment' => 'string',
        'Cancelled' => 'integer',
        'RowVersion' => 'datetime',
        'MaintOrderSrcCustOrder' => 'integer',
        'ExpirationDate' => 'datetime',
        'InternalComment' => 'string',
        'FinalizedDate' => 'datetime',
        'ParcelShop' => 'integer',
        'StrExA' => 'string',
        'StrExB' => 'string',
        'StrExC' => 'string',
        'StrExD' => 'string',
        'DateExA' => 'datetime',
        'DateExB' => 'datetime',
        'DateExC' => 'datetime',
        'DateExD' => 'datetime',
        'NumExA' => 'decimal:4',
        'NumExB' => 'decimal:4',
        'NumExC' => 'decimal:4',
        'NumExD' => 'decimal:4',
        'BoolExA' => 'integer',
        'BoolExB' => 'integer',
        'BoolExC' => 'integer',
        'BoolExD' => 'integer',
        'LookupExA' => 'integer',
        'LookupExB' => 'integer',
        'LookupExC' => 'integer',
        'LookupExD' => 'integer',
        'MemoExA' => 'string',
        'MemoExB' => 'string',
        'MemoExC' => 'string',
        'MemoExD' => 'string',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'NotifyPhone' => 'integer',
        'NotifySms' => 'integer',
        'NotifyEmail' => 'integer',
        'PublicHealthPTFree' => 'integer',
        'FabricDeadLine' => 'datetime',
        'CheckoutBankAccount' => 'integer',
        'OriginalVoucher' => 'integer',
        'DepositGross' => 'integer',
        'ExchangePackage' => 'integer',
        'ChainTransaction' => 'integer',
        'ValidityDate' => 'datetime',
        'CurrRateDate' => 'datetime',
        'CancelReason' => 'string',
        'CustomerOrderStatus' => 'integer',
        'BankTRID' => 'string',
        'CloseReason' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'VoucherType' => 'required|integer',
        'VoucherSequence' => 'required',
        'VoucherNumber' => 'required|string|max:100',
        'PrimeVoucherNumber' => 'nullable|string|max:100',
        'CancelledVoucher' => 'nullable',
        'MaintenanceProduct' => 'nullable',
        'Customer' => 'required',
        'CustomerAddress' => 'nullable',
        'CustomerContact' => 'nullable',
        'VoucherDate' => 'required',
        'DeliveryDate' => 'nullable',
        'DeliveryFrom' => 'nullable',
        'DeliveryTo' => 'nullable',
        'PaymentMethod' => 'nullable',
        'Currency' => 'required',
        'CurrencyRate' => 'required|numeric',
        'Investment' => 'nullable',
        'Division' => 'nullable',
        'Agent' => 'nullable',
        'ContactEmployee' => 'nullable',
        'Campaign' => 'nullable',
        'CustomerContract' => 'nullable',
        'Warehouse' => 'nullable',
        'TransportMode' => 'nullable',
        'DepositValue' => 'nullable|numeric',
        'DepositPercent' => 'nullable|numeric',
        'NetValue' => 'nullable|numeric',
        'GrossValue' => 'nullable|numeric',
        'VatValue' => 'nullable|numeric',
        'AmountAsk' => 'nullable',
        'Maintenance' => 'nullable',
        'SplitForbid' => 'required',
        'PrimePostage' => 'nullable|numeric',
        'OrderHidePrice' => 'required',
        'Closed' => 'required',
        'ClosedManually' => 'required',
        'Comment' => 'nullable|string|max:65535',
        'Cancelled' => 'required',
        'RowVersion' => 'required',
        'MaintOrderSrcCustOrder' => 'nullable',
        'ExpirationDate' => 'nullable',
        'InternalComment' => 'nullable|string|max:65535',
        'FinalizedDate' => 'nullable',
        'ParcelShop' => 'nullable',
        'StrExA' => 'nullable|string|max:100',
        'StrExB' => 'nullable|string|max:100',
        'StrExC' => 'nullable|string|max:100',
        'StrExD' => 'nullable|string|max:100',
        'DateExA' => 'nullable',
        'DateExB' => 'nullable',
        'DateExC' => 'nullable',
        'DateExD' => 'nullable',
        'NumExA' => 'nullable|numeric',
        'NumExB' => 'nullable|numeric',
        'NumExC' => 'nullable|numeric',
        'NumExD' => 'nullable|numeric',
        'BoolExA' => 'required',
        'BoolExB' => 'required',
        'BoolExC' => 'required',
        'BoolExD' => 'required',
        'LookupExA' => 'nullable',
        'LookupExB' => 'nullable',
        'LookupExC' => 'nullable',
        'LookupExD' => 'nullable',
        'MemoExA' => 'nullable|string|max:65535',
        'MemoExB' => 'nullable|string|max:65535',
        'MemoExC' => 'nullable|string|max:65535',
        'MemoExD' => 'nullable|string|max:65535',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'NotifyPhone' => 'required',
        'NotifySms' => 'required',
        'NotifyEmail' => 'required',
        'PublicHealthPTFree' => 'required',
        'FabricDeadLine' => 'nullable',
        'CheckoutBankAccount' => 'nullable',
        'OriginalVoucher' => 'nullable',
        'DepositGross' => 'required',
        'ExchangePackage' => 'required',
        'ChainTransaction' => 'required',
        'ValidityDate' => 'nullable',
        'CurrRateDate' => 'nullable',
        'CancelReason' => 'nullable',
        'CustomerOrderStatus' => 'nullable',
        'BankTRID' => 'nullable',
        'CloseReason' => 'nullable|string|max:100'
    ];

    protected $append = ['tetelszam', 'currencyName', 'paymentMethodName'];

    public function getTetelSzamAttribute()
    {
        return CustomerOrderDetail::where('CustomerOrder', $this->Id)->get()->count();
    }

//    public function getOsszErtekAttribute()
//    {
//        $ertek = CustomerOrderDetail::selectRaw('sum(Quantity * UnitPrice) as ertek')
//            ->where('CustomerOrder', $this->Id)
//            ->get();
//        return !empty($ertek[0]->ertek) ? $ertek[0]->ertek : 0;
//    }

    protected function getCurrencyNameAttribute()
    {
        return !empty($this->Currency) ? Currency::find($this->Currency)->Name : '';
    }

    protected function getPaymentMethodNameAttribute()
    {
        return !empty($this->PaymentMethod) ? PaymentMethod::find($this->PaymentMethod)->Name : '';
    }
}
