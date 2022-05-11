<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class PaymentMethod
 * @package App\Models
 * @version January 19, 2022, 9:47 am UTC
 *
 * @property string $Name
 * @property integer $Cash
 * @property integer $UseAlways
 * @property integer $Immediately
 * @property integer $PettyCashCreation
 * @property integer $ToleranceDay
 * @property integer $FulfillmentTolerance
 * @property number $DiscountPercent
 * @property string $VoucherComment
 * @property integer $Deleted
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class PaymentMethod extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'paymentmethod';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Cash',
        'UseAlways',
        'Immediately',
        'PettyCashCreation',
        'ToleranceDay',
        'FulfillmentTolerance',
        'DiscountPercent',
        'VoucherComment',
        'Deleted',
        'RowCreate',
        'RowModify'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Name' => 'string',
        'Cash' => 'integer',
        'UseAlways' => 'integer',
        'Immediately' => 'integer',
        'PettyCashCreation' => 'integer',
        'ToleranceDay' => 'integer',
        'FulfillmentTolerance' => 'integer',
        'DiscountPercent' => 'decimal:4',
        'VoucherComment' => 'string',
        'Deleted' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string|max:100',
        'Cash' => 'required',
        'UseAlways' => 'required',
        'Immediately' => 'required',
        'PettyCashCreation' => 'required',
        'ToleranceDay' => 'nullable|integer',
        'FulfillmentTolerance' => 'required',
        'DiscountPercent' => 'required|numeric',
        'VoucherComment' => 'nullable|string|max:65535',
        'Deleted' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];

    public function customer() {
        return $this->hasMany('App\Models\Customer', 'PaymentMethod');
    }

    public function CustomerAddress() {
        return $this->hasMany('App\Models\CustomerAddress', 'PaymentMethod');
    }

    public function customerSupplierPaymentMethod() {
        return $this->hasMany('App\Models\Customer', 'SupplierPaymentMethod');
    }

    public function CustomerBid() {
        return $this->hasMany('App\Models\CustomerBid', 'PaymentMethod');
    }

}
