<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class VoucherSequence
 * @package App\Models
 * @version January 19, 2022, 9:54 am UTC
 *
 * @property integer $Site
 * @property integer $VoucherType
 * @property string $Code
 * @property string $Name
 * @property string $AlternateCaption
 * @property string $AlternateNumberCaption
 * @property string $Mask
 * @property integer $PaddingZero
 * @property integer $StartValue
 * @property integer $RestartEveryYear
 * @property integer $Copies
 * @property integer $AutoPrint
 * @property integer $Customer
 * @property integer $Currency
 * @property integer $CurrencyStrict
 * @property integer $Vat
 * @property integer $Warehouse
 * @property integer $WarehouseStrict
 * @property integer $TargetWarehouse
 * @property integer $TargetWhStrict
 * @property integer $PettyCash
 * @property integer $PrintPettyCash
 * @property integer $BankCheckout
 * @property integer $AutoSelectBank
 * @property integer $OutFifoUnitPrice
 * @property integer $InLastUnitPrice
 * @property integer $HidePrice
 * @property integer $ManualInvoice
 * @property integer $ReceiptPrintInvoice
 * @property integer $ShowNaturalVat
 * @property integer $ShowGrossRound
 * @property integer $ShowUsedDeposit
 * @property integer $ShowProductComment
 * @property integer $ShowProductAttributes
 * @property integer $ShowWeight
 * @property integer $ShowWeightNet
 * @property integer $ShowDimension
 * @property integer $ShowQuantity
 * @property integer $ShowCustomTariff
 * @property integer $ShowEnvCharge
 * @property integer $ShowBarcode
 * @property integer $ShowVNumberBarcode
 * @property integer $ShowSerial
 * @property integer $ShowCharge
 * @property integer $ShowShelf
 * @property integer $ShowEquipment
 * @property integer $ShowDiscountUnitPrice
 * @property integer $ShowProductQUQuantity
 * @property integer $ShowProductQUCommerce
 * @property integer $ShowCallCard
 * @property integer $ShowOrderStatus
 * @property integer $ShowWarehouse
 * @property integer $ShowCustomerBalance
 * @property integer $ShowDetailInvestment
 * @property integer $ShowDetailDivision
 * @property integer $HideCopies
 * @property integer $DisplayCashRegInfo
 * @property integer $AttachInvoiceExt
 * @property integer $AttachExportCert
 * @property integer $AttachConverseVat
 * @property integer $AttachAdr
 * @property integer $AttachGuarantee
 * @property integer $GuaranteeTemplate
 * @property integer $CopyVoucherComment
 * @property integer $CopyDetailComment
 * @property integer $CopyProductAlias
 * @property string $BidDetailReport
 * @property integer $ShowCustomerSign
 * @property integer $ShowSupplierSign
 * @property string $CustomerSignSubs
 * @property string $SupplierSignSubs
 * @property integer $SourceDisplayMode
 * @property integer $SourceDisplayOrder
 * @property integer $ReportLanguage
 * @property integer $VoucherCommentUnder
 * @property integer $StockExchangeDelayed
 * @property integer $SelfSupplierInvoice
 * @property integer $PrintUsedDeposit
 * @property string $SummaryComment
 * @property string $FooterComment
 * @property integer $IsReportSetting
 * @property string $ReportSetting
 * @property string $Logo
 * @property string $SpecialRules
 * @property integer $Deleted
 * @property integer $RemoveEmptyLines
 * @property string $AlternateAccessoryCaption
 * @property integer $ShowAccessory
 * @property integer $PriceCategory
 * @property integer $ShowProductCode
 * @property integer $NAVOnlineInvoiceActive
 * @property integer $PaymentMethod
 * @property integer $PaymentMethodStrict
 * @property integer $ShowIstatCountryOrigin
 * @property integer $EnvChargeDisplayMode
 * @property integer $ShowDiscountValue
 * @property integer $ShowProdImage
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property integer $PublicHealthPTFree
 * @property integer $ReceiptPrintDeliveryBill
 * @property integer $StockExDelayedStrict
 * @property integer $ReceiptPrintOnlyCash
 * @property string $Stamp
 * @property number $StampHeight
 * @property integer $CustomerStrict
 * @property number $ProdImageWidth
 * @property number $ProdImageHeight
 * @property integer $ShowBidStatus
 * @property integer $CODetailStatus
 * @property integer $ShowProductName
 * @property integer $CopyCustomField
 * @property integer $CopyDetailCustomField
 * @property integer $EmailVoucherTemplate
 * @property integer $FulfillmentTolerance
 * @property integer $DisplayCashRegQR
 */
class VoucherSequence extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'vouchersequence';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Site',
        'VoucherType',
        'Code',
        'Name',
        'AlternateCaption',
        'AlternateNumberCaption',
        'Mask',
        'PaddingZero',
        'StartValue',
        'RestartEveryYear',
        'Copies',
        'AutoPrint',
        'Customer',
        'Currency',
        'CurrencyStrict',
        'Vat',
        'Warehouse',
        'WarehouseStrict',
        'TargetWarehouse',
        'TargetWhStrict',
        'PettyCash',
        'PrintPettyCash',
        'BankCheckout',
        'AutoSelectBank',
        'OutFifoUnitPrice',
        'InLastUnitPrice',
        'HidePrice',
        'ManualInvoice',
        'ReceiptPrintInvoice',
        'ShowNaturalVat',
        'ShowGrossRound',
        'ShowUsedDeposit',
        'ShowProductComment',
        'ShowProductAttributes',
        'ShowWeight',
        'ShowWeightNet',
        'ShowDimension',
        'ShowQuantity',
        'ShowCustomTariff',
        'ShowEnvCharge',
        'ShowBarcode',
        'ShowVNumberBarcode',
        'ShowSerial',
        'ShowCharge',
        'ShowShelf',
        'ShowEquipment',
        'ShowDiscountUnitPrice',
        'ShowProductQUQuantity',
        'ShowProductQUCommerce',
        'ShowCallCard',
        'ShowOrderStatus',
        'ShowWarehouse',
        'ShowCustomerBalance',
        'ShowDetailInvestment',
        'ShowDetailDivision',
        'HideCopies',
        'DisplayCashRegInfo',
        'AttachInvoiceExt',
        'AttachExportCert',
        'AttachConverseVat',
        'AttachAdr',
        'AttachGuarantee',
        'GuaranteeTemplate',
        'CopyVoucherComment',
        'CopyDetailComment',
        'CopyProductAlias',
        'BidDetailReport',
        'ShowCustomerSign',
        'ShowSupplierSign',
        'CustomerSignSubs',
        'SupplierSignSubs',
        'SourceDisplayMode',
        'SourceDisplayOrder',
        'ReportLanguage',
        'VoucherCommentUnder',
        'StockExchangeDelayed',
        'SelfSupplierInvoice',
        'PrintUsedDeposit',
        'SummaryComment',
        'FooterComment',
        'IsReportSetting',
        'ReportSetting',
        'Logo',
        'SpecialRules',
        'Deleted',
        'RemoveEmptyLines',
        'AlternateAccessoryCaption',
        'ShowAccessory',
        'PriceCategory',
        'ShowProductCode',
        'NAVOnlineInvoiceActive',
        'PaymentMethod',
        'PaymentMethodStrict',
        'ShowIstatCountryOrigin',
        'EnvChargeDisplayMode',
        'ShowDiscountValue',
        'ShowProdImage',
        'RowCreate',
        'RowModify',
        'PublicHealthPTFree',
        'ReceiptPrintDeliveryBill',
        'StockExDelayedStrict',
        'ReceiptPrintOnlyCash',
        'Stamp',
        'StampHeight',
        'CustomerStrict',
        'ProdImageWidth',
        'ProdImageHeight',
        'ShowBidStatus',
        'CODetailStatus',
        'ShowProductName',
        'CopyCustomField',
        'CopyDetailCustomField',
        'EmailVoucherTemplate',
        'FulfillmentTolerance',
        'DisplayCashRegQR'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Site' => 'integer',
        'VoucherType' => 'integer',
        'Code' => 'string',
        'Name' => 'string',
        'AlternateCaption' => 'string',
        'AlternateNumberCaption' => 'string',
        'Mask' => 'string',
        'PaddingZero' => 'integer',
        'StartValue' => 'integer',
        'RestartEveryYear' => 'integer',
        'Copies' => 'integer',
        'AutoPrint' => 'integer',
        'Customer' => 'integer',
        'Currency' => 'integer',
        'CurrencyStrict' => 'integer',
        'Vat' => 'integer',
        'Warehouse' => 'integer',
        'WarehouseStrict' => 'integer',
        'TargetWarehouse' => 'integer',
        'TargetWhStrict' => 'integer',
        'PettyCash' => 'integer',
        'PrintPettyCash' => 'integer',
        'BankCheckout' => 'integer',
        'AutoSelectBank' => 'integer',
        'OutFifoUnitPrice' => 'integer',
        'InLastUnitPrice' => 'integer',
        'HidePrice' => 'integer',
        'ManualInvoice' => 'integer',
        'ReceiptPrintInvoice' => 'integer',
        'ShowNaturalVat' => 'integer',
        'ShowGrossRound' => 'integer',
        'ShowUsedDeposit' => 'integer',
        'ShowProductComment' => 'integer',
        'ShowProductAttributes' => 'integer',
        'ShowWeight' => 'integer',
        'ShowWeightNet' => 'integer',
        'ShowDimension' => 'integer',
        'ShowQuantity' => 'integer',
        'ShowCustomTariff' => 'integer',
        'ShowEnvCharge' => 'integer',
        'ShowBarcode' => 'integer',
        'ShowVNumberBarcode' => 'integer',
        'ShowSerial' => 'integer',
        'ShowCharge' => 'integer',
        'ShowShelf' => 'integer',
        'ShowEquipment' => 'integer',
        'ShowDiscountUnitPrice' => 'integer',
        'ShowProductQUQuantity' => 'integer',
        'ShowProductQUCommerce' => 'integer',
        'ShowCallCard' => 'integer',
        'ShowOrderStatus' => 'integer',
        'ShowWarehouse' => 'integer',
        'ShowCustomerBalance' => 'integer',
        'ShowDetailInvestment' => 'integer',
        'ShowDetailDivision' => 'integer',
        'HideCopies' => 'integer',
        'DisplayCashRegInfo' => 'integer',
        'AttachInvoiceExt' => 'integer',
        'AttachExportCert' => 'integer',
        'AttachConverseVat' => 'integer',
        'AttachAdr' => 'integer',
        'AttachGuarantee' => 'integer',
        'GuaranteeTemplate' => 'integer',
        'CopyVoucherComment' => 'integer',
        'CopyDetailComment' => 'integer',
        'CopyProductAlias' => 'integer',
        'BidDetailReport' => 'string',
        'ShowCustomerSign' => 'integer',
        'ShowSupplierSign' => 'integer',
        'CustomerSignSubs' => 'string',
        'SupplierSignSubs' => 'string',
        'SourceDisplayMode' => 'integer',
        'SourceDisplayOrder' => 'integer',
        'ReportLanguage' => 'integer',
        'VoucherCommentUnder' => 'integer',
        'StockExchangeDelayed' => 'integer',
        'SelfSupplierInvoice' => 'integer',
        'PrintUsedDeposit' => 'integer',
        'SummaryComment' => 'string',
        'FooterComment' => 'string',
        'IsReportSetting' => 'integer',
        'ReportSetting' => 'string',
        'Logo' => 'string',
        'SpecialRules' => 'string',
        'Deleted' => 'integer',
        'RemoveEmptyLines' => 'integer',
        'AlternateAccessoryCaption' => 'string',
        'ShowAccessory' => 'integer',
        'PriceCategory' => 'integer',
        'ShowProductCode' => 'integer',
        'NAVOnlineInvoiceActive' => 'integer',
        'PaymentMethod' => 'integer',
        'PaymentMethodStrict' => 'integer',
        'ShowIstatCountryOrigin' => 'integer',
        'EnvChargeDisplayMode' => 'integer',
        'ShowDiscountValue' => 'integer',
        'ShowProdImage' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'PublicHealthPTFree' => 'integer',
        'ReceiptPrintDeliveryBill' => 'integer',
        'StockExDelayedStrict' => 'integer',
        'ReceiptPrintOnlyCash' => 'integer',
        'Stamp' => 'string',
        'StampHeight' => 'decimal:4',
        'CustomerStrict' => 'integer',
        'ProdImageWidth' => 'decimal:4',
        'ProdImageHeight' => 'decimal:4',
        'ShowBidStatus' => 'integer',
        'CODetailStatus' => 'integer',
        'ShowProductName' => 'integer',
        'CopyCustomField' => 'integer',
        'CopyDetailCustomField' => 'integer',
        'EmailVoucherTemplate' => 'integer',
        'FulfillmentTolerance' => 'integer',
        'DisplayCashRegQR' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Site' => 'required',
        'VoucherType' => 'required|integer',
        'Code' => 'nullable|string|max:40',
        'Name' => 'required|string|max:100',
        'AlternateCaption' => 'nullable|string|max:100',
        'AlternateNumberCaption' => 'nullable|string|max:100',
        'Mask' => 'required|string|max:100',
        'PaddingZero' => 'required|integer',
        'StartValue' => 'required|integer',
        'RestartEveryYear' => 'required',
        'Copies' => 'required|integer',
        'AutoPrint' => 'nullable',
        'Customer' => 'nullable',
        'Currency' => 'nullable',
        'CurrencyStrict' => 'required',
        'Vat' => 'nullable',
        'Warehouse' => 'nullable',
        'WarehouseStrict' => 'required',
        'TargetWarehouse' => 'nullable',
        'TargetWhStrict' => 'required',
        'PettyCash' => 'nullable',
        'PrintPettyCash' => 'required',
        'BankCheckout' => 'nullable',
        'AutoSelectBank' => 'required',
        'OutFifoUnitPrice' => 'required',
        'InLastUnitPrice' => 'required',
        'HidePrice' => 'required',
        'ManualInvoice' => 'required',
        'ReceiptPrintInvoice' => 'required',
        'ShowNaturalVat' => 'required',
        'ShowGrossRound' => 'required',
        'ShowUsedDeposit' => 'required',
        'ShowProductComment' => 'required',
        'ShowProductAttributes' => 'required',
        'ShowWeight' => 'required',
        'ShowWeightNet' => 'required',
        'ShowDimension' => 'required',
        'ShowQuantity' => 'required',
        'ShowCustomTariff' => 'required',
        'ShowEnvCharge' => 'required|integer',
        'ShowBarcode' => 'nullable',
        'ShowVNumberBarcode' => 'required',
        'ShowSerial' => 'nullable',
        'ShowCharge' => 'required',
        'ShowShelf' => 'required',
        'ShowEquipment' => 'required',
        'ShowDiscountUnitPrice' => 'required',
        'ShowProductQUQuantity' => 'required',
        'ShowProductQUCommerce' => 'required',
        'ShowCallCard' => 'required',
        'ShowOrderStatus' => 'required',
        'ShowWarehouse' => 'required',
        'ShowCustomerBalance' => 'required',
        'ShowDetailInvestment' => 'required|integer',
        'ShowDetailDivision' => 'required',
        'HideCopies' => 'required',
        'DisplayCashRegInfo' => 'required',
        'AttachInvoiceExt' => 'required',
        'AttachExportCert' => 'required',
        'AttachConverseVat' => 'required',
        'AttachAdr' => 'required',
        'AttachGuarantee' => 'required',
        'GuaranteeTemplate' => 'nullable',
        'CopyVoucherComment' => 'required',
        'CopyDetailComment' => 'required',
        'CopyProductAlias' => 'required',
        'BidDetailReport' => 'nullable|string|max:100',
        'ShowCustomerSign' => 'required',
        'ShowSupplierSign' => 'required',
        'CustomerSignSubs' => 'nullable|string|max:65535',
        'SupplierSignSubs' => 'nullable|string|max:65535',
        'SourceDisplayMode' => 'required|integer',
        'SourceDisplayOrder' => 'required',
        'ReportLanguage' => 'required|integer',
        'VoucherCommentUnder' => 'required',
        'StockExchangeDelayed' => 'required',
        'SelfSupplierInvoice' => 'required',
        'PrintUsedDeposit' => 'required',
        'SummaryComment' => 'nullable|string|max:65535',
        'FooterComment' => 'nullable|string|max:65535',
        'IsReportSetting' => 'required',
        'ReportSetting' => 'nullable|string|max:65535',
        'Logo' => 'nullable|string|max:65535',
        'SpecialRules' => 'nullable|string|max:65535',
        'Deleted' => 'required',
        'RemoveEmptyLines' => 'required',
        'AlternateAccessoryCaption' => 'nullable|string|max:100',
        'ShowAccessory' => 'required',
        'PriceCategory' => 'nullable',
        'ShowProductCode' => 'required|integer',
        'NAVOnlineInvoiceActive' => 'required',
        'PaymentMethod' => 'nullable',
        'PaymentMethodStrict' => 'required',
        'ShowIstatCountryOrigin' => 'required',
        'EnvChargeDisplayMode' => 'required|integer',
        'ShowDiscountValue' => 'nullable',
        'ShowProdImage' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'PublicHealthPTFree' => 'required',
        'ReceiptPrintDeliveryBill' => 'required',
        'StockExDelayedStrict' => 'required',
        'ReceiptPrintOnlyCash' => 'required',
        'Stamp' => 'nullable|string|max:65535',
        'StampHeight' => 'nullable|numeric',
        'CustomerStrict' => 'required',
        'ProdImageWidth' => 'nullable|numeric',
        'ProdImageHeight' => 'nullable|numeric',
        'ShowBidStatus' => 'required',
        'CODetailStatus' => 'nullable',
        'ShowProductName' => 'required|integer',
        'CopyCustomField' => 'required',
        'CopyDetailCustomField' => 'required',
        'EmailVoucherTemplate' => 'nullable',
        'FulfillmentTolerance' => 'nullable',
        'DisplayCashRegQR' => 'required'
    ];


}
