<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerContractDetail
 * @package App\Models
 * @version February 22, 2022, 10:53 am CET
 *
 * @property integer $Id
 * @property integer $CustomerContract
 * @property integer $Product
 * @property number $ShareQuantity
 * @property number $Price
 * @property integer $Currency
 * @property integer $QuantityUnit
 * @property number $InvoiceQty
 * @property integer $Vat
 * @property string|\Carbon\Carbon $ValidFrom
 * @property string|\Carbon\Carbon $ValidTo
 * @property string $InvoiceOccurence
 * @property integer $SuppressPriceAffect
 * @property integer $OfferOverride
 * @property string $Comment
 * @property integer $CopyCommentToInvoice
 * @property string|\Carbon\Carbon $RowVersion
 * @property integer $Deleted
 * @property integer $RowOrder
 * @property integer $Investment
 */
class CustomerContractDetail extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'customercontractdetail';

//    const CREATED_AT = 'created_at';
//    const UPDATED_AT = 'updated_at';
//
//
//    protected $dates = ['deleted_at'];



    public $fillable = [
        'Id',
        'CustomerContract',
        'Product',
        'ShareQuantity',
        'Price',
        'Currency',
        'QuantityUnit',
        'InvoiceQty',
        'Vat',
        'ValidFrom',
        'ValidTo',
        'InvoiceOccurence',
        'SuppressPriceAffect',
        'OfferOverride',
        'Comment',
        'CopyCommentToInvoice',
        'RowVersion',
        'Deleted',
        'RowOrder',
        'Investment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'CustomerContract' => 'integer',
        'Product' => 'integer',
        'ShareQuantity' => 'decimal:4',
        'Price' => 'decimal:4',
        'Currency' => 'integer',
        'QuantityUnit' => 'integer',
        'InvoiceQty' => 'decimal:4',
        'Vat' => 'integer',
        'ValidFrom' => 'datetime',
        'ValidTo' => 'datetime',
        'InvoiceOccurence' => 'string',
        'SuppressPriceAffect' => 'integer',
        'OfferOverride' => 'integer',
        'Comment' => 'string',
        'CopyCommentToInvoice' => 'integer',
        'RowVersion' => 'datetime',
        'Deleted' => 'integer',
        'RowOrder' => 'integer',
        'Investment' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Id' => 'required',
        'CustomerContract' => 'required',
        'Product' => 'required',
        'ShareQuantity' => 'nullable|numeric',
        'Price' => 'required|numeric',
        'Currency' => 'required',
        'QuantityUnit' => 'nullable',
        'InvoiceQty' => 'required|numeric',
        'Vat' => 'required',
        'ValidFrom' => 'required',
        'ValidTo' => 'nullable',
        'InvoiceOccurence' => 'nullable|string',
        'SuppressPriceAffect' => 'required',
        'OfferOverride' => 'required',
        'Comment' => 'nullable|string',
        'CopyCommentToInvoice' => 'required',
        'RowVersion' => 'required',
        'Deleted' => 'required',
        'RowOrder' => 'required|integer',
        'Investment' => 'nullable'
    ];


}
