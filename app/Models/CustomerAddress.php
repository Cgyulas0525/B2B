<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerAddress
 * @package App\Models
 * @version January 19, 2022, 9:44 am UTC
 *
 * @property integer $Customer
 * @property integer $Preferred
 * @property string $Code
 * @property string $Name
 * @property integer $DisplayCountry
 * @property string $Country
 * @property string $Region
 * @property string $Zip
 * @property string $City
 * @property string $Street
 * @property string $HouseNumber
 * @property string $ContactName
 * @property string $Phone
 * @property string $Fax
 * @property string $Email
 * @property integer $IsCompany
 * @property string $CompanyTaxNumber
 * @property string $DeliveryInfo
 * @property string $Comment
 * @property string $VoucherComment
 * @property integer $Deleted
 * @property string|\Carbon\Carbon $RowVersion
 * @property integer $PaymentMethod
 * @property integer $TransportMode
 * @property integer $DeliveryCDay
 * @property integer $Agent
 * @property integer $AgentStrict
 * @property string $Sms
 * @property string $CompanyEUTaxNumber
 * @property string $CompanyGroupTaxNumber
 * @property string $CompanyTradeRegNumber
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property string $Township
 * @property string $GLN
 * @property integer $IsPerson
 */
class CustomerAddress extends Model
{
//    // use SoftDeletes;

    use HasFactory;

    public $table = 'customeraddress';

//    // const CREATED_AT = 'created_at';
//    // const UPDATED_AT = 'updated_at';
//
//
//    // protected $dates = ['deleted_at'];

    public $fillable = [
        'Customer',
        'Preferred',
        'Code',
        'Name',
        'DisplayCountry',
        'Country',
        'Region',
        'Zip',
        'City',
        'Street',
        'HouseNumber',
        'ContactName',
        'Phone',
        'Fax',
        'Email',
        'IsCompany',
        'CompanyTaxNumber',
        'DeliveryInfo',
        'Comment',
        'VoucherComment',
        'Deleted',
        'RowVersion',
        'PaymentMethod',
        'TransportMode',
        'DeliveryCDay',
        'Agent',
        'AgentStrict',
        'Sms',
        'CompanyEUTaxNumber',
        'CompanyGroupTaxNumber',
        'CompanyTradeRegNumber',
        'RowCreate',
        'RowModify',
        'Township',
        'GLN',
        'IsPerson',
        'ParcelInfo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Customer' => 'integer',
        'Preferred' => 'integer',
        'Code' => 'string',
        'Name' => 'string',
        'DisplayCountry' => 'integer',
        'Country' => 'string',
        'Region' => 'string',
        'Zip' => 'string',
        'City' => 'string',
        'Street' => 'string',
        'HouseNumber' => 'string',
        'ContactName' => 'string',
        'Phone' => 'string',
        'Fax' => 'string',
        'Email' => 'string',
        'IsCompany' => 'integer',
        'CompanyTaxNumber' => 'string',
        'DeliveryInfo' => 'string',
        'Comment' => 'string',
        'VoucherComment' => 'string',
        'Deleted' => 'integer',
        'RowVersion' => 'datetime',
        'PaymentMethod' => 'integer',
        'TransportMode' => 'integer',
        'DeliveryCDay' => 'integer',
        'Agent' => 'integer',
        'AgentStrict' => 'integer',
        'Sms' => 'string',
        'CompanyEUTaxNumber' => 'string',
        'CompanyGroupTaxNumber' => 'string',
        'CompanyTradeRegNumber' => 'string',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'Township' => 'string',
        'GLN' => 'string',
        'IsPerson' => 'integer',
        'ParcelInfo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Customer' => 'required',
        'Preferred' => 'required',
        'Code' => 'nullable|string|max:40',
        'Name' => 'required|string|max:100',
        'DisplayCountry' => 'required',
        'Country' => 'nullable|string|max:100',
        'Region' => 'nullable|string|max:100',
        'Zip' => 'nullable|string|max:10',
        'City' => 'nullable|string|max:100',
        'Street' => 'nullable|string|max:100',
        'HouseNumber' => 'nullable|string|max:20',
        'ContactName' => 'nullable|string|max:100',
        'Phone' => 'nullable|string|max:20',
        'Fax' => 'nullable|string|max:20',
        'Email' => 'nullable|string|max:100',
        'IsCompany' => 'required',
        'CompanyTaxNumber' => 'nullable|string|max:20',
        'DeliveryInfo' => 'nullable|string|max:65535',
        'Comment' => 'nullable|string|max:65535',
        'VoucherComment' => 'nullable|string|max:65535',
        'Deleted' => 'required',
        'RowVersion' => 'required',
        'PaymentMethod' => 'nullable',
        'TransportMode' => 'nullable',
        'DeliveryCDay' => 'nullable|integer',
        'Agent' => 'nullable',
        'AgentStrict' => 'required',
        'Sms' => 'nullable|string|max:20',
        'CompanyEUTaxNumber' => 'nullable|string|max:20',
        'CompanyGroupTaxNumber' => 'nullable|string|max:20',
        'CompanyTradeRegNumber' => 'nullable|string|max:20',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'Township' => 'nullable|string|max:100',
        'GLN' => 'nullable|string|max:40',
        'IsPerson' => 'required'
    ];

    public function CustomerAdat() {
        return $this->belongsTo('App\Models\Customer', 'Customer');
    }

    public function PaymentMethodAdat() {
        return $this->belongsTo('App\Models\PaymentMethod', 'PaymentMethod');
    }

    public function TransportModeAdat() {
        return $this->belongsTo('App\Models\TransportMode', 'TransportMode');
    }

    public function AgentAdat() {
        return $this->belongsTo('App\Models\Employee', 'Agent');
    }

    public function CustomerBid() {
        return $this->hasMany('App\Models\CustomerBid', 'CustomerAddress');
    }

}
