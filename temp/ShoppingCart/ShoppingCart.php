<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ShoppingCart
 * @package App\Models
 * @version March 5, 2022, 4:58 pm CET
 *
 * @property \App\Models\Employee $agent
 * @property \App\Models\Employee $contactemployee
 * @property \App\Models\Customercontact $customercontract
 * @property \App\Models\Currency $currency
 * @property \App\Models\Customercontact $customercontact
 * @property \App\Models\Customer $customer
 * @property \App\Models\Customeraddress $customeraddress
 * @property \App\Models\Division $division
 * @property \App\Models\Paymentmethod $paymentmethod
 * @property \App\Models\Transportmode $transportmode
 * @property \App\Models\Warehouse $warehouse
 * @property \Illuminate\Database\Eloquent\Collection $shoppingcartdetails
 * @property string $VoucherNumber
 * @property integer $Customer
 * @property integer $CustomerAddress
 * @property integer $CustomerContact
 * @property string|\Carbon\Carbon $VoucherDate
 * @property string|\Carbon\Carbon $DeliveryDate
 * @property integer $PaymentMethod
 * @property integer $Currency
 * @property number $CurrencyRate
 * @property integer $ContactEmployee
 * @property integer $CustomerContract
 * @property integer $TransportMode
 * @property number $DepositValue
 * @property number $DepositPercent
 * @property number $NetValue
 * @property number $GrossValue
 * @property number $VatValue
 * @property string $Comment
 * @property integer $Opened
 * @property integer $CustomerOrder
 */
class ShoppingCart extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'shoppingcart';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'VoucherNumber',
        'Customer',
        'CustomerAddress',
        'CustomerContact',
        'VoucherDate',
        'DeliveryDate',
        'PaymentMethod',
        'Currency',
        'CurrencyRate',
        'CustomerContract',
        'TransportMode',
        'DepositValue',
        'DepositPercent',
        'NetValue',
        'GrossValue',
        'VatValue',
        'Comment',
        'Opened',
        'CustomerOrder'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'VoucherNumber' => 'string',
        'Customer' => 'integer',
        'CustomerAddress' => 'integer',
        'CustomerContact' => 'integer',
        'VoucherDate' => 'datetime',
        'DeliveryDate' => 'datetime',
        'PaymentMethod' => 'integer',
        'Currency' => 'integer',
        'CurrencyRate' => 'decimal:4',
        'CustomerContract' => 'integer',
        'TransportMode' => 'integer',
        'DepositValue' => 'decimal:4',
        'DepositPercent' => 'decimal:4',
        'NetValue' => 'decimal:4',
        'GrossValue' => 'decimal:4',
        'VatValue' => 'decimal:4',
        'Comment' => 'string',
        'Opened' => 'integer',
        'CustomerOrder' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    protected $append = [
        'DetailNumber',
        'CustomerName',
        'CustomerAddressName',
        'CustomerContactName',
        'PaymentMethodName',
        'CurrencyName',
        'CustomerContractVoucherNumber',
        'TransportModeName',
        'CustomerOrderVoucherNumber'
    ];

    public function getDetailNumberAttribute() {
        return ShoppingCartDetail::where('ShoppingCart', $this->Id)->get()->count();
    }

    public function getCustomerNameAttribute() {
        $customer = Customer::where('Deleted', 0)->where('Id', $this->Customer)->first();
        return !empty($customer) ? $customer->Name : ' ';
    }

    public function getCustomerAddressNameAttribute() {
        $customerAddress = CustomerAddress::where('Deleted', 0)->where('Id', $this->CustomerAddress)->first();
        return !empty($customerAddress) ? $customerAddress->Name . " - " . $customerAddress->Country . " " . $customerAddress->Zip . ". " . $customerAddress->City . " " . $customerAddress->Street . " " . $customerAddress->HouseNumber : ' ';
    }

    public function getCustomerContactNameAttribute() {
        $customerContact = Users::where('customercontact_id', $this->CustomerContact)->first();
        return !empty($customerContact) ? $customerContact->name : ' ';
    }

    public function getPaymentMethodNameAttribute() {
        $paymentMethod = PaymentMethod::where('Deleted', 0)->where('Id', $this->PaymentMethod)->first();
        return !empty($paymentMethod) ? $paymentMethod->Name : ' ';
    }

    public function getCurrencyNameAttribute() {
        $currency = Currency::where('Deleted', 0)->where('Id', $this->Currency)->first();
        return !empty($currency) ? $currency->Name : ' ';
    }

    public function getCustomerContractVoucherNumberAttribute() {
        $cc = CustomerContract::where('Cancelled', 0)->where('Id', $this->CustomerContract)->first();
        return !empty($cc) ? $cc->VoucherNumber : ' ';
    }

    public function getTransportModeNameAttribute() {
        $tarnsportMode = TransportMode::where('Deleted', 0)->where('Id', $this->TransportMode)->first();
        return !empty($tarnsportMode) ? $tarnsportMode->Name : ' ';
    }

    public function getCustomerOrderVoucherNumberAttribute() {
        $co = CustomerOrder::where('Cancelled', 0)->where('Id', $this->CustomerOrder)->first();
        return !empty($co) ? $co->VoucherNumber : ' ';
    }
}
