<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerBid
 * @package App\Models
 * @version January 19, 2022, 9:44 am UTC
 *
 * @property integer $VoucherSequence
 * @property string $VoucherNumber
 * @property integer $Customer
 * @property integer $CustomerAddress
 * @property integer $CustomerContact
 * @property integer $LeadId
 * @property string|\Carbon\Carbon $VoucherDate
 * @property string|\Carbon\Carbon $ExpirationDate
 * @property integer $AllowGrouping
 * @property integer $HideSummary
 * @property string $Subject
 * @property integer $Currency
 * @property number $CurrencyRate
 * @property integer $CurrencyRateVisible
 * @property integer $Investment
 * @property integer $Division
 * @property integer $Agent
 * @property integer $ContactEmployee
 * @property integer $Campaign
 * @property integer $CustomerContract
 * @property integer $Maintenance
 * @property integer $Warehouse
 * @property integer $TransportMode
 * @property integer $Status
 * @property number $NetValue
 * @property number $GrossValue
 * @property number $VatValue
 * @property integer $DisplayVat
 * @property string $HeaderComment
 * @property string $FooterComment
 * @property string|\Carbon\Carbon $RowVersion
 * @property integer $PaymentMethod
 * @property string $RejectReason
 * @property string $PrimeVoucherNumber
 * @property string $InternalComment
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
 * @property integer $ChainTransaction
 * @property string|\Carbon\Carbon $CurrRateDate
 */
class CustomerBid extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'customerbid';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'VoucherSequence',
        'VoucherNumber',
        'Customer',
        'CustomerAddress',
        'CustomerContact',
        'LeadId',
        'VoucherDate',
        'ExpirationDate',
        'AllowGrouping',
        'HideSummary',
        'Subject',
        'Currency',
        'CurrencyRate',
        'CurrencyRateVisible',
        'Investment',
        'Division',
        'Agent',
        'ContactEmployee',
        'Campaign',
        'CustomerContract',
        'Maintenance',
        'Warehouse',
        'TransportMode',
        'Status',
        'NetValue',
        'GrossValue',
        'VatValue',
        'DisplayVat',
        'HeaderComment',
        'FooterComment',
        'RowVersion',
        'PaymentMethod',
        'RejectReason',
        'PrimeVoucherNumber',
        'InternalComment',
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
        'ChainTransaction',
        'CurrRateDate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'VoucherSequence' => 'integer',
        'VoucherNumber' => 'string',
        'Customer' => 'integer',
        'CustomerAddress' => 'integer',
        'CustomerContact' => 'integer',
        'LeadId' => 'integer',
        'VoucherDate' => 'datetime',
        'ExpirationDate' => 'datetime',
        'AllowGrouping' => 'integer',
        'HideSummary' => 'integer',
        'Subject' => 'string',
        'Currency' => 'integer',
        'CurrencyRate' => 'decimal:4',
        'CurrencyRateVisible' => 'integer',
        'Investment' => 'integer',
        'Division' => 'integer',
        'Agent' => 'integer',
        'ContactEmployee' => 'integer',
        'Campaign' => 'integer',
        'CustomerContract' => 'integer',
        'Maintenance' => 'integer',
        'Warehouse' => 'integer',
        'TransportMode' => 'integer',
        'Status' => 'integer',
        'NetValue' => 'decimal:4',
        'GrossValue' => 'decimal:4',
        'VatValue' => 'decimal:4',
        'DisplayVat' => 'integer',
        'HeaderComment' => 'string',
        'FooterComment' => 'string',
        'RowVersion' => 'datetime',
        'PaymentMethod' => 'integer',
        'RejectReason' => 'string',
        'PrimeVoucherNumber' => 'string',
        'InternalComment' => 'string',
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
        'ChainTransaction' => 'integer',
        'CurrRateDate' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'VoucherSequence' => 'required',
        'VoucherNumber' => 'required|string|max:100',
        'Customer' => 'nullable',
        'CustomerAddress' => 'nullable',
        'CustomerContact' => 'nullable',
        'LeadId' => 'nullable',
        'VoucherDate' => 'required',
        'ExpirationDate' => 'nullable',
        'AllowGrouping' => 'required',
        'HideSummary' => 'required',
        'Subject' => 'nullable|string|max:100',
        'Currency' => 'required',
        'CurrencyRate' => 'required|numeric',
        'CurrencyRateVisible' => 'required',
        'Investment' => 'nullable',
        'Division' => 'nullable',
        'Agent' => 'nullable',
        'ContactEmployee' => 'nullable',
        'Campaign' => 'nullable',
        'CustomerContract' => 'nullable',
        'Maintenance' => 'nullable',
        'Warehouse' => 'nullable',
        'TransportMode' => 'nullable',
        'Status' => 'nullable',
        'NetValue' => 'nullable|numeric',
        'GrossValue' => 'nullable|numeric',
        'VatValue' => 'nullable|numeric',
        'DisplayVat' => 'required',
        'HeaderComment' => 'nullable|string|max:65535',
        'FooterComment' => 'nullable|string|max:65535',
        'RowVersion' => 'required',
        'PaymentMethod' => 'nullable',
        'RejectReason' => 'nullable|string|max:100',
        'PrimeVoucherNumber' => 'nullable|string|max:100',
        'InternalComment' => 'nullable|string|max:65535',
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
        'ChainTransaction' => 'required',
        'CurrRateDate' => 'nullable'
    ];

    public function CustomerAdat() {
        return $this->belongsTo('App\Models\Customer', 'Customer');
    }

    public function CustomerAddressAdat() {
        return $this->belongsTo('App\Models\CustomerAddress', 'CustomerAddress');
    }

    public function CustomerContactAdat() {
        return $this->belongsTo('App\Models\CustomerContact', 'CustomerContact');
    }

    public function LeedAdat() {
        return $this->belongsTo('App\Models\Leed', 'LeadId');
    }

    public function CurrencyAdat() {
        return $this->belongsTo('App\Models\Currency', 'Currency');
    }

    public function WarehouseAdat() {
        return $this->belongsTo('App\Models\Warehouse', 'Warehouse');
    }

    public function TransportModeAdat() {
        return $this->belongsTo('App\Models\TransportMode', 'TransportMode');
    }

    public function PaymentMethodAdat() {
        return $this->belongsTo('App\Models\PaymentMethod', 'PaymentMethod');
    }

}

