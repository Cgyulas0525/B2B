<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Customer;
use App\Models\CustomerOffer;

/**
 * Class CustomerOfferCustomer
 * @package App\Models
 * @version February 8, 2022, 3:07 pm UTC
 *
 * @property integer $CustomerOffer
 * @property integer $Customer
 * @property integer $CustomerCategory
 * @property integer $Forbid
 */
class CustomerOfferCustomer extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'customeroffercustomer';

//    const CREATED_AT = 'created_at';
//    const UPDATED_AT = 'updated_at';
//
//
//    protected $dates = ['deleted_at'];



    public $fillable = [
        'CustomerOffer',
        'Customer',
        'CustomerCategory',
        'Forbid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'CustomerOffer' => 'integer',
        'Customer' => 'integer',
        'CustomerCategory' => 'integer',
        'Forbid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CustomerOffer' => 'required',
        'Customer' => 'nullable',
        'CustomerCategory' => 'nullable',
        'Forbid' => 'required'
    ];

    protected $append = ['customerOfferVoucherNumber', 'customerOfferName',
        'customerOfferValidFrom', 'customerOfferValidTo', 'customerName'];

    public function getCustomerOfferVoucherNumberAttribute()
    {
        return CustomerOffer::where('Id', $this->CustomerOffer)->first()->VoucherNumber;
    }

    public function getCustomerOfferNameAttribute()
    {
        return CustomerOffer::where('Id', $this->CustomerOffer)->first()->Name;
    }

    public function getCustomerOfferValidFromAttribute()
    {
        return CustomerOffer::where('Id', $this->CustomerOffer)->first()->ValidFrom;
    }

    public function getCustomerOfferValidToAttribute()
    {
        return CustomerOffer::where('Id', $this->CustomerOffer)->first()->ValidTo;
    }

    public function getCustomerNameAttribute()
    {
        return Customer::where('Id', $this->Customer)->first()->Name;
    }

}
