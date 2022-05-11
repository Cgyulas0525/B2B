<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerBidDetail
 * @package App\Models
 * @version January 19, 2022, 9:44 am UTC
 *
 * @property integer $CustomerBid
 * @property integer $CustomerBidGroup
 * @property integer $Product
 * @property string $ProductAlias
 * @property integer $Currency
 * @property number $CurrencyRate
 * @property integer $Investment
 * @property integer $Division
 * @property integer $Agent
 * @property integer $Campaign
 * @property integer $Vat
 * @property integer $QuantityUnit
 * @property number $QURate
 * @property number $Quantity
 * @property number $UnitPrice
 * @property number $DiscountPercent
 * @property number $DiscountUnitPrice
 * @property integer $GrossPrices
 * @property number $NetValue
 * @property number $GrossValue
 * @property number $VatValue
 * @property string $Comment
 * @property integer $ShowProdCode
 * @property integer $ShowProdAttr
 * @property integer $ShowProdImage
 * @property integer $ShowProdDescription
 * @property integer $AttachProdSpec
 * @property integer $ShowAccessBase
 * @property integer $ShowAccessItem
 * @property integer $ShowAccessSum
 * @property integer $RowOrder
 * @property string|\Carbon\Carbon $RowVersion
 * @property string $InternalComment
 * @property integer $DetailStatus
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
 * @property integer $FabricSchema
 * @property integer $PriceCategory
 * @property string|\Carbon\Carbon $CurrRateDate
 */
class CustomerBidDetail extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'customerbiddetail';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'CustomerBid',
        'CustomerBidGroup',
        'Product',
        'ProductAlias',
        'Currency',
        'CurrencyRate',
        'Investment',
        'Division',
        'Agent',
        'Campaign',
        'Vat',
        'QuantityUnit',
        'QURate',
        'Quantity',
        'UnitPrice',
        'DiscountPercent',
        'DiscountUnitPrice',
        'GrossPrices',
        'NetValue',
        'GrossValue',
        'VatValue',
        'Comment',
        'ShowProdCode',
        'ShowProdAttr',
        'ShowProdImage',
        'ShowProdDescription',
        'AttachProdSpec',
        'ShowAccessBase',
        'ShowAccessItem',
        'ShowAccessSum',
        'RowOrder',
        'RowVersion',
        'InternalComment',
        'DetailStatus',
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
        'FabricSchema',
        'PriceCategory',
        'CurrRateDate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'CustomerBid' => 'integer',
        'CustomerBidGroup' => 'integer',
        'Product' => 'integer',
        'ProductAlias' => 'string',
        'Currency' => 'integer',
        'CurrencyRate' => 'decimal:4',
        'Investment' => 'integer',
        'Division' => 'integer',
        'Agent' => 'integer',
        'Campaign' => 'integer',
        'Vat' => 'integer',
        'QuantityUnit' => 'integer',
        'QURate' => 'decimal:4',
        'Quantity' => 'decimal:4',
        'UnitPrice' => 'decimal:4',
        'DiscountPercent' => 'decimal:4',
        'DiscountUnitPrice' => 'decimal:4',
        'GrossPrices' => 'integer',
        'NetValue' => 'decimal:4',
        'GrossValue' => 'decimal:4',
        'VatValue' => 'decimal:4',
        'Comment' => 'string',
        'ShowProdCode' => 'integer',
        'ShowProdAttr' => 'integer',
        'ShowProdImage' => 'integer',
        'ShowProdDescription' => 'integer',
        'AttachProdSpec' => 'integer',
        'ShowAccessBase' => 'integer',
        'ShowAccessItem' => 'integer',
        'ShowAccessSum' => 'integer',
        'RowOrder' => 'integer',
        'RowVersion' => 'datetime',
        'InternalComment' => 'string',
        'DetailStatus' => 'integer',
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
        'FabricSchema' => 'integer',
        'PriceCategory' => 'integer',
        'CurrRateDate' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CustomerBid' => 'required',
        'CustomerBidGroup' => 'nullable',
        'Product' => 'nullable',
        'ProductAlias' => 'nullable|string|max:100',
        'Currency' => 'required',
        'CurrencyRate' => 'required|numeric',
        'Investment' => 'nullable',
        'Division' => 'nullable',
        'Agent' => 'nullable',
        'Campaign' => 'nullable',
        'Vat' => 'required',
        'QuantityUnit' => 'required',
        'QURate' => 'required|numeric',
        'Quantity' => 'required|numeric',
        'UnitPrice' => 'nullable|numeric',
        'DiscountPercent' => 'nullable|numeric',
        'DiscountUnitPrice' => 'nullable|numeric',
        'GrossPrices' => 'required',
        'NetValue' => 'nullable|numeric',
        'GrossValue' => 'nullable|numeric',
        'VatValue' => 'nullable|numeric',
        'Comment' => 'nullable|string|max:65535',
        'ShowProdCode' => 'required',
        'ShowProdAttr' => 'required',
        'ShowProdImage' => 'required',
        'ShowProdDescription' => 'required',
        'AttachProdSpec' => 'required',
        'ShowAccessBase' => 'required',
        'ShowAccessItem' => 'required',
        'ShowAccessSum' => 'required',
        'RowOrder' => 'required|integer',
        'RowVersion' => 'required',
        'InternalComment' => 'nullable|string|max:65535',
        'DetailStatus' => 'nullable',
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
        'FabricSchema' => 'nullable',
        'PriceCategory' => 'nullable',
        'CurrRateDate' => 'nullable'
    ];


}
