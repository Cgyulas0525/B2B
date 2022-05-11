<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductCategoryExport
 * @package App\Models
 * @version March 14, 2022, 9:51 am CET
 *
 * @property string $Name
 * @property integer $Parent
 * @property integer $LeftValue
 * @property integer $RightValue
 * @property number $ProfitPercent
 * @property integer $PriceDigits
 * @property string $PriceDigitsExt
 * @property integer $Vat
 * @property integer $VatBuy
 * @property integer $Service
 * @property integer $QuantityUnit
 * @property integer $QuantityDigits
 * @property string $CustomsTariffNumber
 * @property integer $GuaranteeMonths
 * @property integer $GuaranteeMode
 * @property number $GuaranteeMinUnitPrice
 * @property string $GuaranteeDescription
 * @property string $BarcodeMask
 * @property number $MinProfitPercent
 * @property string $PriceCategoryRule
 * @property string $VoucherRules
 * @property integer $UseWarrantyRule
 * @property integer $EuVat
 * @property integer $EuVatBuy
 * @property integer $NonEuVat
 * @property integer $NonEuVatBuy
 */
class ProductCategory extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'productcategory';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Parent',
        'LeftValue',
        'RightValue',
        'ProfitPercent',
        'PriceDigits',
        'PriceDigitsExt',
        'Vat',
        'VatBuy',
        'Service',
        'QuantityUnit',
        'QuantityDigits',
        'CustomsTariffNumber',
        'GuaranteeMonths',
        'GuaranteeMode',
        'GuaranteeMinUnitPrice',
        'GuaranteeDescription',
        'BarcodeMask',
        'MinProfitPercent',
        'PriceCategoryRule',
        'VoucherRules',
        'UseWarrantyRule',
        'EuVat',
        'EuVatBuy',
        'NonEuVat',
        'NonEuVatBuy'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Name' => 'string',
        'Parent' => 'integer',
        'LeftValue' => 'integer',
        'RightValue' => 'integer',
        'ProfitPercent' => 'decimal:4',
        'PriceDigits' => 'integer',
        'PriceDigitsExt' => 'string',
        'Vat' => 'integer',
        'VatBuy' => 'integer',
        'Service' => 'integer',
        'QuantityUnit' => 'integer',
        'QuantityDigits' => 'integer',
        'CustomsTariffNumber' => 'string',
        'GuaranteeMonths' => 'integer',
        'GuaranteeMode' => 'integer',
        'GuaranteeMinUnitPrice' => 'decimal:4',
        'GuaranteeDescription' => 'string',
        'BarcodeMask' => 'string',
        'MinProfitPercent' => 'decimal:4',
        'PriceCategoryRule' => 'string',
        'VoucherRules' => 'string',
        'UseWarrantyRule' => 'integer',
        'EuVat' => 'integer',
        'EuVatBuy' => 'integer',
        'NonEuVat' => 'integer',
        'NonEuVatBuy' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string|max:100',
        'Parent' => 'nullable',
        'LeftValue' => 'required',
        'RightValue' => 'required',
        'ProfitPercent' => 'nullable|numeric',
        'PriceDigits' => 'nullable|integer',
        'PriceDigitsExt' => 'nullable|string|max:100',
        'Vat' => 'nullable',
        'VatBuy' => 'nullable',
        'Service' => 'nullable',
        'QuantityUnit' => 'nullable',
        'QuantityDigits' => 'nullable|integer',
        'CustomsTariffNumber' => 'nullable|string|max:100',
        'GuaranteeMonths' => 'nullable|integer',
        'GuaranteeMode' => 'nullable',
        'GuaranteeMinUnitPrice' => 'nullable|numeric',
        'GuaranteeDescription' => 'nullable|string|max:65535',
        'BarcodeMask' => 'nullable|string|max:100',
        'MinProfitPercent' => 'nullable|numeric',
        'PriceCategoryRule' => 'nullable|string|max:65535',
        'VoucherRules' => 'nullable|string|max:65535',
        'UseWarrantyRule' => 'nullable',
        'EuVat' => 'nullable',
        'EuVatBuy' => 'nullable',
        'NonEuVat' => 'nullable',
        'NonEuVatBuy' => 'nullable'
    ];

    public function childs() {
        return $this->hasMany('App\Models\Category', 'Parent', 'Id');
    }


}
