<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ShoppingCartDetail
 * @package App\Models
 * @version March 9, 2022, 2:14 pm CET
 *
 * @property integer $ShoppingCart
 * @property integer $Currency
 * @property number $CurrencyRate
 * @property integer $Product
 * @property integer $Vat
 * @property integer $QuantityUnit
 * @property integer $Reverse
 * @property number $Quantity
 * @property integer $CustomerOfferDetail
 * @property integer $CustomerContractDetail
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
 * @property integer $CustomerOrderDetail
 */
class ShoppingCartDetail extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'shoppingcartdetail';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ShoppingCart',
        'Currency',
        'CurrencyRate',
        'Product',
        'Vat',
        'QuantityUnit',
        'Reverse',
        'Quantity',
        'CustomerOfferDetail',
        'CustomerContractDetail',
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
        'CustomerOrderDetail'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'ShoppingCart' => 'integer',
        'Currency' => 'integer',
        'CurrencyRate' => 'decimal:4',
        'Product' => 'integer',
        'Vat' => 'integer',
        'QuantityUnit' => 'integer',
        'Reverse' => 'integer',
        'Quantity' => 'decimal:4',
        'CustomerOfferDetail' => 'integer',
        'CustomerContractDetail' => 'integer',
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
        'CustomerOrderDetail' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ShoppingCart' => 'required',
        'Currency' => 'required',
        'CurrencyRate' => 'required|numeric',
        'Product' => 'nullable',
        'Vat' => 'nullable',
        'QuantityUnit' => 'nullable',
        'Reverse' => 'required',
        'Quantity' => 'required|numeric',
        'CustomerOfferDetail' => 'nullable',
        'CustomerContractDetail' => 'nullable',
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
        'CustomerOrderDetail' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
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
