<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerOrderDetail
 * @package App\Models
 * @version January 19, 2022, 9:45 am UTC
 *
 * @property integer $CustomerOrder
 * @property integer $CancelledDetail
 * @property string|\Carbon\Carbon $DeliveryDate
 * @property string|\Carbon\Carbon $DeliveryFrom
 * @property string|\Carbon\Carbon $DeliveryTo
 * @property integer $Currency
 * @property number $CurrencyRate
 * @property integer $Investment
 * @property integer $Division
 * @property integer $Agent
 * @property integer $Campaign
 * @property integer $Product
 * @property string $ProductAlias
 * @property integer $MaintenanceProduct
 * @property string $Keywords
 * @property integer $Vat
 * @property integer $QuantityUnit
 * @property number $QURate
 * @property number $Quantity
 * @property number $FulfilledQuantity
 * @property number $CancelledQuantity
 * @property number $CompleteQuantity
 * @property integer $DetailStatus
 * @property integer $CustomerOfferDetail
 * @property integer $CustomerContractDetail
 * @property integer $AllocateWarehouse
 * @property integer $MustMunufacturing
 * @property number $ManufacQuantity
 * @property number $UnitPrice
 * @property number $DiscountPercent
 * @property number $DiscountUnitPrice
 * @property integer $GrossPrices
 * @property number $DepositValue
 * @property number $DepositPercent
 * @property number $NetValue
 * @property number $GrossValue
 * @property number $VatValue
 * @property string $Comment
 * @property integer $CopyCommentToInvoice
 * @property integer $RowOrder
 * @property string|\Carbon\Carbon $RowVersion
 * @property integer $Reverse
 * @property string $InternalComment
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
 * @property number $PublicHealthPTUPrice
 * @property string|\Carbon\Carbon $FabricDeadLine
 * @property integer $PriceCategory
 * @property string|\Carbon\Carbon $CurrRateDate
 */
class CustomerOrderDetail extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'customerorderdetail';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'CustomerOrder',
        'CancelledDetail',
        'DeliveryDate',
        'DeliveryFrom',
        'DeliveryTo',
        'Currency',
        'CurrencyRate',
        'Investment',
        'Division',
        'Agent',
        'Campaign',
        'Product',
        'ProductAlias',
        'MaintenanceProduct',
        'Keywords',
        'Vat',
        'QuantityUnit',
        'QURate',
        'Quantity',
        'FulfilledQuantity',
        'CancelledQuantity',
        'CompleteQuantity',
        'DetailStatus',
        'CustomerOfferDetail',
        'CustomerContractDetail',
        'AllocateWarehouse',
        'MustMunufacturing',
        'ManufacQuantity',
        'UnitPrice',
        'DiscountPercent',
        'DiscountUnitPrice',
        'GrossPrices',
        'DepositValue',
        'DepositPercent',
        'NetValue',
        'GrossValue',
        'VatValue',
        'Comment',
        'CopyCommentToInvoice',
        'RowOrder',
        'RowVersion',
        'Reverse',
        'InternalComment',
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
        'PublicHealthPTUPrice',
        'FabricDeadLine',
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
        'CustomerOrder' => 'integer',
        'CancelledDetail' => 'integer',
        'DeliveryDate' => 'datetime',
        'DeliveryFrom' => 'datetime',
        'DeliveryTo' => 'datetime',
        'Currency' => 'integer',
        'CurrencyRate' => 'decimal:4',
        'Investment' => 'integer',
        'Division' => 'integer',
        'Agent' => 'integer',
        'Campaign' => 'integer',
        'Product' => 'integer',
        'ProductAlias' => 'string',
        'MaintenanceProduct' => 'integer',
        'Keywords' => 'string',
        'Vat' => 'integer',
        'QuantityUnit' => 'integer',
        'QURate' => 'decimal:4',
        'Quantity' => 'decimal:4',
        'FulfilledQuantity' => 'decimal:4',
        'CancelledQuantity' => 'decimal:4',
        'CompleteQuantity' => 'decimal:4',
        'DetailStatus' => 'integer',
        'CustomerOfferDetail' => 'integer',
        'CustomerContractDetail' => 'integer',
        'AllocateWarehouse' => 'integer',
        'MustMunufacturing' => 'integer',
        'ManufacQuantity' => 'decimal:4',
        'UnitPrice' => 'decimal:4',
        'DiscountPercent' => 'decimal:4',
        'DiscountUnitPrice' => 'decimal:4',
        'GrossPrices' => 'integer',
        'DepositValue' => 'decimal:4',
        'DepositPercent' => 'decimal:4',
        'NetValue' => 'decimal:4',
        'GrossValue' => 'decimal:4',
        'VatValue' => 'decimal:4',
        'Comment' => 'string',
        'CopyCommentToInvoice' => 'integer',
        'RowOrder' => 'integer',
        'RowVersion' => 'datetime',
        'Reverse' => 'integer',
        'InternalComment' => 'string',
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
        'PublicHealthPTUPrice' => 'decimal:4',
        'FabricDeadLine' => 'datetime',
        'PriceCategory' => 'integer',
        'CurrRateDate' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CustomerOrder' => 'required',
        'CancelledDetail' => 'nullable',
        'DeliveryDate' => 'nullable',
        'DeliveryFrom' => 'nullable',
        'DeliveryTo' => 'nullable',
        'Currency' => 'required',
        'CurrencyRate' => 'required|numeric',
        'Investment' => 'nullable',
        'Division' => 'nullable',
        'Agent' => 'nullable',
        'Campaign' => 'nullable',
        'Product' => 'nullable',
        'ProductAlias' => 'nullable|string|max:100',
        'MaintenanceProduct' => 'nullable',
        'Keywords' => 'nullable|string|max:100',
        'Vat' => 'nullable',
        'QuantityUnit' => 'nullable',
        'QURate' => 'required|numeric',
        'Quantity' => 'required|numeric',
        'FulfilledQuantity' => 'required|numeric',
        'CancelledQuantity' => 'required|numeric',
        'CompleteQuantity' => 'required|numeric',
        'DetailStatus' => 'nullable',
        'CustomerOfferDetail' => 'nullable',
        'CustomerContractDetail' => 'nullable',
        'AllocateWarehouse' => 'required',
        'MustMunufacturing' => 'required',
        'ManufacQuantity' => 'required|numeric',
        'UnitPrice' => 'nullable|numeric',
        'DiscountPercent' => 'nullable|numeric',
        'DiscountUnitPrice' => 'nullable|numeric',
        'GrossPrices' => 'required',
        'DepositValue' => 'nullable|numeric',
        'DepositPercent' => 'nullable|numeric',
        'NetValue' => 'nullable|numeric',
        'GrossValue' => 'nullable|numeric',
        'VatValue' => 'nullable|numeric',
        'Comment' => 'nullable|string|max:65535',
        'CopyCommentToInvoice' => 'required',
        'RowOrder' => 'required|integer',
        'RowVersion' => 'required',
        'Reverse' => 'required',
        'InternalComment' => 'nullable|string|max:65535',
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
        'PublicHealthPTUPrice' => 'nullable|numeric',
        'FabricDeadLine' => 'nullable',
        'PriceCategory' => 'nullable',
        'CurrRateDate' => 'nullable'
    ];

    protected $append = [
        'ProductName',
        'QuantityUnitName',
        'CurrencyName',
        'VatName',
        'VatRate'
    ];

    public function getProductNameAttribute() {
        $product = Product::where('Id', $this->Product)->first();
        return !empty($this->Product) ? !empty($product) ? $product->Name : ' ' : ' ';
    }

    public function getQuantityUnitNameAttribute() {
        $quantityUnit = QuantityUnit::where('Id', $this->QuantityUnit)->first();
        return !empty($this->QuantityUnit) ? !empty($quantityUnit) ? $quantityUnit->Name : ' ' : ' ';
    }

    public function getCurrencyNameAttribute() {
        $currency = Currency::where('Id', $this->Currency)->first();
        return !empty($this->Currency) ? !empty($currency) ? $currency->Name : ' ' : ' ';
    }

    public function getVatNameAttribute() {
        $vat = Vat::where('Id', $this->Vat)->first();
        return !empty($this->Vat) ? !empty($vat) ? $vat->Name : ' ' : ' ';
    }

    public function getVatRateAttribute() {
        $vat = Vat::where('Id', $this->Vat)->first();
        return !empty($this->Vat) ? !empty($vat) ? $vat->Rate : 0 : 0;
    }

}
