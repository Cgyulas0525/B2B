<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Customer
 * @package App\Models
 * @version January 19, 2022, 9:44 am UTC
 *
 * @property string $Code
 * @property integer $CustomerStatus
 * @property integer $SupplierStatus
 * @property string $Name
 * @property string $SearchName
 * @property string|\Carbon\Carbon $CreateDateTime
 * @property integer $CustomerCategory
 * @property integer $SupplierCategory
 * @property integer $DisplayCountry
 * @property string $InvoiceCountry
 * @property string $InvoiceRegion
 * @property string $InvoiceZip
 * @property string $InvoiceCity
 * @property string $InvoiceStreet
 * @property string $InvoiceHouseNumber
 * @property integer $MailBanned
 * @property string $MailCountry
 * @property string $MailRegion
 * @property string $MailName
 * @property integer $MailOriginalName
 * @property string $MailZip
 * @property string $MailCity
 * @property string $MailStreet
 * @property string $MailHouseNumber
 * @property integer $PaymentMethod
 * @property integer $PaymentMethodStrict
 * @property integer $PaymentMethodToleranceDay
 * @property integer $PriceCategory
 * @property integer $CustomerIstatTemplate
 * @property integer $SupplierIstatTemplate
 * @property integer $Currency
 * @property integer $TransportMode
 * @property string $TradeRegNumber
 * @property string $TaxNumber
 * @property string $EUTaxNumber
 * @property string $GroupTaxNUmber
 * @property integer $EUMembership
 * @property string $BankAccount
 * @property string $BankAccountIBAN
 * @property string $ContactName
 * @property string $Phone
 * @property string $Fax
 * @property string $Sms
 * @property string $Email
 * @property integer $RobinsonMode
 * @property integer $AllowEmailVouchers
 * @property integer $SpecVoucherEmails
 * @property string $WebUsername
 * @property string $WebPassword
 * @property string $DeliveryInfo
 * @property string $Comment
 * @property string $VoucherRules
 * @property number $DiscountPercent
 * @property string $DebitQuota
 * @property string $EInvoice
 * @property string $BuyCompanyCode
 * @property string $SellCompanyCode
 * @property integer $Agent
 * @property integer $AgentStrict
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
 * @property integer $DeliveryCDay
 * @property integer $DeliverySDay
 * @property integer $SelfSupplierInvoice
 * @property string $Url
 * @property string $MemoExA
 * @property string $MemoExB
 * @property string|\Carbon\Carbon $DateExC
 * @property string|\Carbon\Carbon $DateExD
 * @property number $NumExD
 * @property integer $BoolExC
 * @property integer $BoolExD
 * @property string $MemoExC
 * @property string $MemoExD
 * @property string $SupplierDebitQuota
 * @property integer $DebitQIgnoreOnce
 * @property string $BankName
 * @property string $BankSwiftCode
 * @property number $SupplierDiscountPercent
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property integer $IsCompany
 * @property string $InvoiceTownship
 * @property string $MailTownship
 * @property string $GLN
 * @property integer $PaymentMethodLimitSkip
 * @property integer $SupplierPaymentMethod
 * @property integer $SupplierPMStrict
 * @property integer $SupplierPMToleranceDay
 * @property string $NAVOnlineInvoiceUsername
 * @property string $NAVOnlineInvoicePassword
 * @property string $NAVOnlineInvoiceSignature
 * @property string $NAVOnlineInvoiceDecode
 * @property integer $NAVOnlineInvoiceInactive
 * @property integer $InvoiceCustomer
 * @property number $BuyLimit
 * @property integer $ParcelInfo
 */
class Customer extends Model
{
//    // use SoftDeletes;

    use HasFactory;

    public $table = 'customer';

//    // const CREATED_AT = 'created_at';
//    // const UPDATED_AT = 'updated_at';
//
//
//    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Id',
        'Code',
        'CustomerStatus',
        'SupplierStatus',
        'Name',
        'SearchName',
        'CreateDateTime',
        'CustomerCategory',
        'SupplierCategory',
        'DisplayCountry',
        'InvoiceCountry',
        'InvoiceRegion',
        'InvoiceZip',
        'InvoiceCity',
        'InvoiceStreet',
        'InvoiceHouseNumber',
        'MailBanned',
        'MailCountry',
        'MailRegion',
        'MailName',
        'MailOriginalName',
        'MailZip',
        'MailCity',
        'MailStreet',
        'MailHouseNumber',
        'PaymentMethod',
        'PaymentMethodStrict',
        'PaymentMethodToleranceDay',
        'PriceCategory',
        'CustomerIstatTemplate',
        'SupplierIstatTemplate',
        'Currency',
        'TransportMode',
        'TradeRegNumber',
        'TaxNumber',
        'EUTaxNumber',
        'GroupTaxNUmber',
        'EUMembership',
        'BankAccount',
        'BankAccountIBAN',
        'ContactName',
        'Phone',
        'Fax',
        'Sms',
        'Email',
        'RobinsonMode',
        'AllowEmailVouchers',
        'SpecVoucherEmails',
        'WebUsername',
        'WebPassword',
        'DeliveryInfo',
        'Comment',
        'VoucherRules',
        'DiscountPercent',
        'DebitQuota',
        'EInvoice',
        'BuyCompanyCode',
        'SellCompanyCode',
        'Agent',
        'AgentStrict',
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
        'DeliveryCDay',
        'DeliverySDay',
        'SelfSupplierInvoice',
        'Url',
        'MemoExA',
        'MemoExB',
        'DateExC',
        'DateExD',
        'NumExD',
        'BoolExC',
        'BoolExD',
        'MemoExC',
        'MemoExD',
        'SupplierDebitQuota',
        'DebitQIgnoreOnce',
        'BankName',
        'BankSwiftCode',
        'SupplierDiscountPercent',
        'RowCreate',
        'RowModify',
        'IsCompany',
        'InvoiceTownship',
        'MailTownship',
        'GLN',
        'PaymentMethodLimitSkip',
        'SupplierPaymentMethod',
        'SupplierPMStrict',
        'SupplierPMToleranceDay',
        'NAVOnlineInvoiceUsername',
        'NAVOnlineInvoicePassword',
        'NAVOnlineInvoiceSignature',
        'NAVOnlineInvoiceDecode',
        'NAVOnlineInvoiceInactive',
        'InvoiceCustomer',
        'BuyLimit',
        'ParcelInfo',
        'DiscountPercentDateTime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Code' => 'string',
        'CustomerStatus' => 'integer',
        'SupplierStatus' => 'integer',
        'Name' => 'string',
        'SearchName' => 'string',
        'CreateDateTime' => 'datetime',
        'CustomerCategory' => 'integer',
        'SupplierCategory' => 'integer',
        'DisplayCountry' => 'integer',
        'InvoiceCountry' => 'string',
        'InvoiceRegion' => 'string',
        'InvoiceZip' => 'string',
        'InvoiceCity' => 'string',
        'InvoiceStreet' => 'string',
        'InvoiceHouseNumber' => 'string',
        'MailBanned' => 'integer',
        'MailCountry' => 'string',
        'MailRegion' => 'string',
        'MailName' => 'string',
        'MailOriginalName' => 'integer',
        'MailZip' => 'string',
        'MailCity' => 'string',
        'MailStreet' => 'string',
        'MailHouseNumber' => 'string',
        'PaymentMethod' => 'integer',
        'PaymentMethodStrict' => 'integer',
        'PaymentMethodToleranceDay' => 'integer',
        'PriceCategory' => 'integer',
        'CustomerIstatTemplate' => 'integer',
        'SupplierIstatTemplate' => 'integer',
        'Currency' => 'integer',
        'TransportMode' => 'integer',
        'TradeRegNumber' => 'string',
        'TaxNumber' => 'string',
        'EUTaxNumber' => 'string',
        'GroupTaxNUmber' => 'string',
        'EUMembership' => 'integer',
        'BankAccount' => 'string',
        'BankAccountIBAN' => 'string',
        'ContactName' => 'string',
        'Phone' => 'string',
        'Fax' => 'string',
        'Sms' => 'string',
        'Email' => 'string',
        'RobinsonMode' => 'integer',
        'AllowEmailVouchers' => 'integer',
        'SpecVoucherEmails' => 'integer',
        'WebUsername' => 'string',
        'WebPassword' => 'string',
        'DeliveryInfo' => 'string',
        'Comment' => 'string',
        'VoucherRules' => 'string',
        'DiscountPercent' => 'decimal:4',
        'DebitQuota' => 'string',
        'EInvoice' => 'string',
        'BuyCompanyCode' => 'string',
        'SellCompanyCode' => 'string',
        'Agent' => 'integer',
        'AgentStrict' => 'integer',
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
        'DeliveryCDay' => 'integer',
        'DeliverySDay' => 'integer',
        'SelfSupplierInvoice' => 'integer',
        'Url' => 'string',
        'MemoExA' => 'string',
        'MemoExB' => 'string',
        'DateExC' => 'datetime',
        'DateExD' => 'datetime',
        'NumExD' => 'decimal:4',
        'BoolExC' => 'integer',
        'BoolExD' => 'integer',
        'MemoExC' => 'string',
        'MemoExD' => 'string',
        'SupplierDebitQuota' => 'string',
        'DebitQIgnoreOnce' => 'integer',
        'BankName' => 'string',
        'BankSwiftCode' => 'string',
        'SupplierDiscountPercent' => 'decimal:4',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'IsCompany' => 'integer',
        'InvoiceTownship' => 'string',
        'MailTownship' => 'string',
        'GLN' => 'string',
        'PaymentMethodLimitSkip' => 'integer',
        'SupplierPaymentMethod' => 'integer',
        'SupplierPMStrict' => 'integer',
        'SupplierPMToleranceDay' => 'integer',
        'NAVOnlineInvoiceUsername' => 'string',
        'NAVOnlineInvoicePassword' => 'string',
        'NAVOnlineInvoiceSignature' => 'string',
        'NAVOnlineInvoiceDecode' => 'string',
        'NAVOnlineInvoiceInactive' => 'integer',
        'InvoiceCustomer' => 'integer',
        'BuyLimit' => 'decimal:4',
        'ParcelInfo' => 'integer',
        'DiscountPercentDateTime' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Code' => 'required|string|max:40',
        'CustomerStatus' => 'required',
        'SupplierStatus' => 'required',
        'Name' => 'required|string|max:100'
    ];

}
