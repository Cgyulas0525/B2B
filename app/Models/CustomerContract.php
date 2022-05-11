<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerContract
 * @package App\Models
 * @version February 22, 2022, 10:53 am CET
 *
 * @property integer $Id
 * @property integer $VoucherSequence
 * @property string $VoucherNumber
 * @property string $PrimeVoucherNumber
 * @property integer $Customer
 * @property integer $AddressDepends
 * @property integer $CustomerAddress
 * @property string $Subject
 * @property string|\Carbon\Carbon $ValidFrom
 * @property string|\Carbon\Carbon $ValidTo
 * @property string $InvoiceOccurence
 * @property string|\Carbon\Carbon $AlertGenerated
 * @property integer $PaymentMethod
 * @property integer $SuppressPriceAffect
 * @property integer $OfferOverride
 * @property integer $ManualAdapt
 * @property string $Comment
 * @property integer $CopyCommentToInvoice
 * @property integer $Cancelled
 * @property string|\Carbon\Carbon $RowVersion
 * @property integer $InvoiceModeSeason
 * @property integer $Investment
 */
class CustomerContract extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'customercontract';

//    const CREATED_AT = 'created_at';
//    const UPDATED_AT = 'updated_at';
//
//
//    protected $dates = ['deleted_at'];



    public $fillable = [
        'Id',
        'VoucherSequence',
        'VoucherNumber',
        'PrimeVoucherNumber',
        'Customer',
        'AddressDepends',
        'CustomerAddress',
        'Subject',
        'ValidFrom',
        'ValidTo',
        'InvoiceOccurence',
        'AlertGenerated',
        'PaymentMethod',
        'SuppressPriceAffect',
        'OfferOverride',
        'ManualAdapt',
        'Comment',
        'CopyCommentToInvoice',
        'Cancelled',
        'RowVersion',
        'InvoiceModeSeason',
        'Investment'
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
        'PrimeVoucherNumber' => 'string',
        'Customer' => 'integer',
        'AddressDepends' => 'integer',
        'CustomerAddress' => 'integer',
        'Subject' => 'string',
        'ValidFrom' => 'datetime',
        'ValidTo' => 'datetime',
        'InvoiceOccurence' => 'string',
        'AlertGenerated' => 'datetime',
        'PaymentMethod' => 'integer',
        'SuppressPriceAffect' => 'integer',
        'OfferOverride' => 'integer',
        'ManualAdapt' => 'integer',
        'Comment' => 'string',
        'CopyCommentToInvoice' => 'integer',
        'Cancelled' => 'integer',
        'RowVersion' => 'datetime',
        'InvoiceModeSeason' => 'integer',
        'Investment' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Id' => 'required',
        'VoucherSequence' => 'required',
        'VoucherNumber' => 'required|string|max:100',
        'PrimeVoucherNumber' => 'nullable|string|max:100',
        'Customer' => 'required',
        'AddressDepends' => 'required',
        'CustomerAddress' => 'nullable',
        'Subject' => 'nullable|string|max:100',
        'ValidFrom' => 'required',
        'ValidTo' => 'nullable',
        'InvoiceOccurence' => 'nullable|string',
        'AlertGenerated' => 'nullable',
        'PaymentMethod' => 'nullable',
        'SuppressPriceAffect' => 'required',
        'OfferOverride' => 'required',
        'ManualAdapt' => 'required',
        'Comment' => 'nullable|string',
        'CopyCommentToInvoice' => 'required',
        'Cancelled' => 'required',
        'RowVersion' => 'required',
        'InvoiceModeSeason' => 'required',
        'Investment' => 'nullable'
    ];


}
