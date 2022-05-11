<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version January 19, 2022, 9:47 am UTC
 *
 * @property string $Code
 * @property integer $CodeHidden
 * @property string $Barcode
 * @property string $Name
 * @property integer $Inactive
 * @property string|\Carbon\Carbon $CreateDateTime
 * @property integer $PrimeSupplier
 * @property integer $Manufacturer
 * @property integer $ProductCategoryExport
 * @property integer $Vat
 * @property integer $VatBuy
 * @property integer $SellBanned
 * @property integer $BuyBanned
 * @property integer $RunOut
 * @property integer $Service
 * @property integer $MediateService
 * @property integer $ZeroPriceAllowed
 * @property integer $Accumulator
 * @property integer $AccProduct
 * @property integer $VisibleInPriceList
 * @property integer $QuantityUnit
 * @property integer $QuantityDigits
 * @property integer $PriceDigits
 * @property string $PriceDigitsExt
 * @property integer $GrossPrices
 * @property integer $SupplierPriceAffected
 * @property integer $SupplierPriceTolerance
 * @property integer $SupplierInPriceOnly
 * @property integer $SupplierToSysCurrency
 * @property integer $SupplierToBaseQU
 * @property integer $WeightControll
 * @property integer $AttachmentRoll
 * @property string $CustomsTariffNumber
 * @property number $Weight
 * @property number $DimensionWidth
 * @property number $DimensionHeight
 * @property number $DimensionDepth
 * @property number $QuantityMin
 * @property number $QuantityMax
 * @property number $QuantityOpt
 * @property number $QtyPackage
 * @property number $QtyLevel
 * @property number $QtyPallet
 * @property integer $IstatKN
 * @property integer $IstatCountryOrigin
 * @property number $IncidentExpense
 * @property number $IncidentExpensePerc
 * @property integer $GuaranteeMonths
 * @property integer $GuaranteeMode
 * @property number $GuaranteeMinUnitPrice
 * @property integer $BestBeforeValue
 * @property integer $BestBeforeIsDay
 * @property string $PriceCategoryRule
 * @property integer $MustMunufacturing
 * @property integer $StrictManufacturing
 * @property integer $SerialMode
 * @property string $SerialSetting
 * @property integer $ShelfMode
 * @property integer $ClearAllocation
 * @property string $DefaultAlias
 * @property number $DepositPercent
 * @property string $Pictogram
 * @property string $Comment
 * @property string $WebName
 * @property string $WebDescription
 * @property string $WebUrl
 * @property string $Picture
 * @property string $StrExA
 * @property string $StrExB
 * @property string $StrExC
 * @property string $StrExD
 * @property string|\Carbon\Carbon $DateExA
 * @property string|\Carbon\Carbon $DateExB
 * @property number $NumExA
 * @property number $NumExB
 * @property number $NumExC
 * @property integer $BoolExA
 * @property integer $BoolExB
 * @property integer $LookupExA
 * @property integer $LookupExB
 * @property integer $LookupExC
 * @property integer $LookupExD
 * @property integer $Deleted
 * @property string|\Carbon\Carbon $RowVersion
 * @property number $MinProfitPercent
 * @property number $ManufacturingCost
 * @property integer $SerialAutoMaintenance
 * @property integer $AdrMaterial
 * @property integer $AdrPackage
 * @property number $WeightNet
 * @property string $MemoExA
 * @property string $MemoExB
 * @property string|\Carbon\Carbon $DateExC
 * @property string|\Carbon\Carbon $DateExD
 * @property number $NumExD
 * @property integer $BoolExC
 * @property integer $BoolExD
 * @property string $MemoExC
 * @property string $MemoExD
 * @property string $WebMetaDescription
 * @property string $WebKeywords
 * @property integer $WebDisplay
 * @property integer $LookupExE
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property number $FillingVolume
 * @property integer $PublicHealthPT
 * @property string $VoucherRules
 * @property integer $IsLarge
 * @property integer $UseWarrantyRule
 * @property integer $AdrCalcBasis
 * @property integer $EuVat
 * @property integer $EuVatBuy
 * @property integer $NonEuVat
 * @property integer $NonEuVatBuy
 * @property integer $BidAllowed
 * @property integer $IsPallet
 * @property integer $IsFragile
 */
class Product extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'product';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Code',
        'CodeHidden',
        'Barcode',
        'Name',
        'Inactive',
        'CreateDateTime',
        'PrimeSupplier',
        'Manufacturer',
        'ProductCategory',
        'Vat',
        'VatBuy',
        'SellBanned',
        'BuyBanned',
        'RunOut',
        'Service',
        'MediateService',
        'ZeroPriceAllowed',
        'Accumulator',
        'AccProduct',
        'VisibleInPriceList',
        'QuantityUnit',
        'QuantityDigits',
        'PriceDigits',
        'PriceDigitsExt',
        'GrossPrices',
        'SupplierPriceAffected',
        'SupplierPriceTolerance',
        'SupplierInPriceOnly',
        'SupplierToSysCurrency',
        'SupplierToBaseQU',
        'WeightControll',
        'AttachmentRoll',
        'CustomsTariffNumber',
        'Weight',
        'DimensionWidth',
        'DimensionHeight',
        'DimensionDepth',
        'QuantityMin',
        'QuantityMax',
        'QuantityOpt',
        'QtyPackage',
        'QtyLevel',
        'QtyPallet',
        'IstatKN',
        'IstatCountryOrigin',
        'IncidentExpense',
        'IncidentExpensePerc',
        'GuaranteeMonths',
        'GuaranteeMode',
        'GuaranteeMinUnitPrice',
        'BestBeforeValue',
        'BestBeforeIsDay',
        'PriceCategoryRule',
        'MustMunufacturing',
        'StrictManufacturing',
        'SerialMode',
        'SerialSetting',
        'ShelfMode',
        'ClearAllocation',
        'DefaultAlias',
        'DepositPercent',
        'Pictogram',
        'Comment',
        'WebName',
        'WebDescription',
        'WebUrl',
        'Picture',
        'StrExA',
        'StrExB',
        'StrExC',
        'StrExD',
        'DateExA',
        'DateExB',
        'NumExA',
        'NumExB',
        'NumExC',
        'BoolExA',
        'BoolExB',
        'LookupExA',
        'LookupExB',
        'LookupExC',
        'LookupExD',
        'Deleted',
        'RowVersion',
        'MinProfitPercent',
        'ManufacturingCost',
        'SerialAutoMaintenance',
        'AdrMaterial',
        'AdrPackage',
        'WeightNet',
        'MemoExA',
        'MemoExB',
        'DateExC',
        'DateExD',
        'NumExD',
        'BoolExC',
        'BoolExD',
        'MemoExC',
        'MemoExD',
        'WebMetaDescription',
        'WebKeywords',
        'WebDisplay',
        'LookupExE',
        'RowCreate',
        'RowModify',
        'FillingVolume',
        'PublicHealthPT',
        'VoucherRules',
        'IsLarge',
        'UseWarrantyRule',
        'AdrCalcBasis',
        'EuVat',
        'EuVatBuy',
        'NonEuVat',
        'NonEuVatBuy',
        'BidAllowed',
        'IsPallet',
        'IsFragile',
        'PictureDateTime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Code' => 'string',
        'CodeHidden' => 'integer',
        'Barcode' => 'string',
        'Name' => 'string',
        'Inactive' => 'integer',
        'CreateDateTime' => 'datetime',
        'PrimeSupplier' => 'integer',
        'Manufacturer' => 'integer',
        'ProductCategory' => 'integer',
        'Vat' => 'integer',
        'VatBuy' => 'integer',
        'SellBanned' => 'integer',
        'BuyBanned' => 'integer',
        'RunOut' => 'integer',
        'Service' => 'integer',
        'MediateService' => 'integer',
        'ZeroPriceAllowed' => 'integer',
        'Accumulator' => 'integer',
        'AccProduct' => 'integer',
        'VisibleInPriceList' => 'integer',
        'QuantityUnit' => 'integer',
        'QuantityDigits' => 'integer',
        'PriceDigits' => 'integer',
        'PriceDigitsExt' => 'string',
        'GrossPrices' => 'integer',
        'SupplierPriceAffected' => 'integer',
        'SupplierPriceTolerance' => 'integer',
        'SupplierInPriceOnly' => 'integer',
        'SupplierToSysCurrency' => 'integer',
        'SupplierToBaseQU' => 'integer',
        'WeightControll' => 'integer',
        'AttachmentRoll' => 'integer',
        'CustomsTariffNumber' => 'string',
        'Weight' => 'decimal:4',
        'DimensionWidth' => 'decimal:4',
        'DimensionHeight' => 'decimal:4',
        'DimensionDepth' => 'decimal:4',
        'QuantityMin' => 'decimal:4',
        'QuantityMax' => 'decimal:4',
        'QuantityOpt' => 'decimal:4',
        'QtyPackage' => 'decimal:4',
        'QtyLevel' => 'decimal:4',
        'QtyPallet' => 'decimal:4',
        'IstatKN' => 'integer',
        'IstatCountryOrigin' => 'integer',
        'IncidentExpense' => 'decimal:4',
        'IncidentExpensePerc' => 'decimal:4',
        'GuaranteeMonths' => 'integer',
        'GuaranteeMode' => 'integer',
        'GuaranteeMinUnitPrice' => 'decimal:4',
        'BestBeforeValue' => 'integer',
        'BestBeforeIsDay' => 'integer',
        'PriceCategoryRule' => 'string',
        'MustMunufacturing' => 'integer',
        'StrictManufacturing' => 'integer',
        'SerialMode' => 'integer',
        'SerialSetting' => 'string',
        'ShelfMode' => 'integer',
        'ClearAllocation' => 'integer',
        'DefaultAlias' => 'string',
        'DepositPercent' => 'decimal:4',
        'Pictogram' => 'string',
        'Comment' => 'string',
        'WebName' => 'string',
        'WebDescription' => 'string',
        'WebUrl' => 'string',
        'Picture' => 'string',
        'StrExA' => 'string',
        'StrExB' => 'string',
        'StrExC' => 'string',
        'StrExD' => 'string',
        'DateExA' => 'datetime',
        'DateExB' => 'datetime',
        'NumExA' => 'decimal:4',
        'NumExB' => 'decimal:4',
        'NumExC' => 'decimal:4',
        'BoolExA' => 'integer',
        'BoolExB' => 'integer',
        'LookupExA' => 'integer',
        'LookupExB' => 'integer',
        'LookupExC' => 'integer',
        'LookupExD' => 'integer',
        'Deleted' => 'integer',
        'RowVersion' => 'datetime',
        'MinProfitPercent' => 'decimal:4',
        'ManufacturingCost' => 'decimal:4',
        'SerialAutoMaintenance' => 'integer',
        'AdrMaterial' => 'integer',
        'AdrPackage' => 'integer',
        'WeightNet' => 'decimal:4',
        'MemoExA' => 'string',
        'MemoExB' => 'string',
        'DateExC' => 'datetime',
        'DateExD' => 'datetime',
        'NumExD' => 'decimal:4',
        'BoolExC' => 'integer',
        'BoolExD' => 'integer',
        'MemoExC' => 'string',
        'MemoExD' => 'string',
        'WebMetaDescription' => 'string',
        'WebKeywords' => 'string',
        'WebDisplay' => 'integer',
        'LookupExE' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'FillingVolume' => 'decimal:4',
        'PublicHealthPT' => 'integer',
        'VoucherRules' => 'string',
        'IsLarge' => 'integer',
        'UseWarrantyRule' => 'integer',
        'AdrCalcBasis' => 'integer',
        'EuVat' => 'integer',
        'EuVatBuy' => 'integer',
        'NonEuVat' => 'integer',
        'NonEuVatBuy' => 'integer',
        'BidAllowed' => 'integer',
        'IsPallet' => 'integer',
        'IsFragile' => 'integer',
        'PictureDateTime' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Code' => 'required|string|max:40',
        'CodeHidden' => 'required',
        'Barcode' => 'nullable|string|max:100',
        'Name' => 'required|string|max:100',
        'Inactive' => 'required',
        'CreateDateTime' => 'nullable',
        'PrimeSupplier' => 'nullable',
        'Manufacturer' => 'nullable',
        'ProductCategoryExport' => 'nullable',
        'Vat' => 'nullable',
        'VatBuy' => 'nullable',
        'SellBanned' => 'required',
        'BuyBanned' => 'required',
        'RunOut' => 'required',
        'Service' => 'required',
        'MediateService' => 'required',
        'ZeroPriceAllowed' => 'required',
        'Accumulator' => 'required',
        'AccProduct' => 'nullable',
        'VisibleInPriceList' => 'required',
        'QuantityUnit' => 'nullable',
        'QuantityDigits' => 'required|integer',
        'PriceDigits' => 'required|integer',
        'PriceDigitsExt' => 'nullable|string|max:100',
        'GrossPrices' => 'required',
        'SupplierPriceAffected' => 'required',
        'SupplierPriceTolerance' => 'required|integer',
        'SupplierInPriceOnly' => 'required',
        'SupplierToSysCurrency' => 'nullable',
        'SupplierToBaseQU' => 'required',
        'WeightControll' => 'required',
        'AttachmentRoll' => 'required',
        'CustomsTariffNumber' => 'nullable|string|max:100',
        'Weight' => 'nullable|numeric',
        'DimensionWidth' => 'nullable|numeric',
        'DimensionHeight' => 'nullable|numeric',
        'DimensionDepth' => 'nullable|numeric',
        'QuantityMin' => 'nullable|numeric',
        'QuantityMax' => 'nullable|numeric',
        'QuantityOpt' => 'nullable|numeric',
        'QtyPackage' => 'nullable|numeric',
        'QtyLevel' => 'nullable|numeric',
        'QtyPallet' => 'nullable|numeric',
        'IstatKN' => 'nullable',
        'IstatCountryOrigin' => 'nullable',
        'IncidentExpense' => 'nullable|numeric',
        'IncidentExpensePerc' => 'nullable|numeric',
        'GuaranteeMonths' => 'nullable|integer',
        'GuaranteeMode' => 'nullable',
        'GuaranteeMinUnitPrice' => 'nullable|numeric',
        'BestBeforeValue' => 'nullable|integer',
        'BestBeforeIsDay' => 'required',
        'PriceCategoryRule' => 'nullable|string|max:65535',
        'MustMunufacturing' => 'required',
        'StrictManufacturing' => 'required',
        'SerialMode' => 'required|integer',
        'SerialSetting' => 'nullable|string|max:65535',
        'ShelfMode' => 'required|integer',
        'ClearAllocation' => 'required',
        'DefaultAlias' => 'nullable|string|max:100',
        'DepositPercent' => 'nullable|numeric',
        'Pictogram' => 'nullable|string|max:100',
        'Comment' => 'nullable|string|max:65535',
        'WebName' => 'nullable|string|max:100',
        'WebDescription' => 'nullable|string|max:65535',
        'WebUrl' => 'nullable|string|max:100',
        'Picture' => 'nullable|string|max:65535',
        'StrExA' => 'nullable|string|max:100',
        'StrExB' => 'nullable|string|max:100',
        'StrExC' => 'nullable|string|max:100',
        'StrExD' => 'nullable|string|max:100',
        'DateExA' => 'nullable',
        'DateExB' => 'nullable',
        'NumExA' => 'nullable|numeric',
        'NumExB' => 'nullable|numeric',
        'NumExC' => 'nullable|numeric',
        'BoolExA' => 'required',
        'BoolExB' => 'required',
        'LookupExA' => 'nullable',
        'LookupExB' => 'nullable',
        'LookupExC' => 'nullable',
        'LookupExD' => 'nullable',
        'Deleted' => 'required',
        'RowVersion' => 'nullable',
        'MinProfitPercent' => 'nullable|numeric',
        'ManufacturingCost' => 'nullable|numeric',
        'SerialAutoMaintenance' => 'required',
        'AdrMaterial' => 'nullable',
        'AdrPackage' => 'nullable',
        'WeightNet' => 'nullable|numeric',
        'MemoExA' => 'nullable|string|max:65535',
        'MemoExB' => 'nullable|string|max:65535',
        'DateExC' => 'nullable',
        'DateExD' => 'nullable',
        'NumExD' => 'nullable|numeric',
        'BoolExC' => 'required',
        'BoolExD' => 'required',
        'MemoExC' => 'nullable|string|max:65535',
        'MemoExD' => 'nullable|string|max:65535',
        'WebMetaDescription' => 'nullable|string|max:65535',
        'WebKeywords' => 'nullable|string|max:100',
        'WebDisplay' => 'required',
        'LookupExE' => 'nullable',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'FillingVolume' => 'nullable|numeric',
        'PublicHealthPT' => 'nullable',
        'VoucherRules' => 'nullable|string|max:65535',
        'IsLarge' => 'required',
        'UseWarrantyRule' => 'required',
        'AdrCalcBasis' => 'required|integer',
        'EuVat' => 'nullable',
        'EuVatBuy' => 'nullable',
        'NonEuVat' => 'nullable',
        'NonEuVatBuy' => 'nullable',
        'BidAllowed' => 'required',
        'IsPallet' => 'required',
        'IsFragile' => 'required'
    ];


}
