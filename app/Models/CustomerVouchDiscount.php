<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerVouchDiscount
 * @package App\Models
 * @version January 29, 2022, 9:04 am UTC
 *
 * @property integer $VoucherType
 * @property integer $Customer
 * @property integer $CustomerCategory
 * @property string|\Carbon\Carbon $ValidFrom
 * @property string|\Carbon\Carbon $ValidTo
 * @property number $NetValue
 * @property number $Discount
 */
class CustomerVouchDiscount extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'customervouchdiscount';

//    const CREATED_AT = 'created_at';
//    const UPDATED_AT = 'updated_at';
//
//
//    protected $dates = ['deleted_at'];



    public $fillable = [
        'VoucherType',
        'Customer',
        'CustomerCategory',
        'ValidFrom',
        'ValidTo',
        'NetValue',
        'Discount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'VoucherType' => 'integer',
        'Customer' => 'integer',
        'CustomerCategory' => 'integer',
        'ValidFrom' => 'datetime',
        'ValidTo' => 'datetime',
        'NetValue' => 'decimal:4',
        'Discount' => 'decimal:4'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'VoucherType' => 'nullable|integer',
        'Customer' => 'nullable',
        'CustomerCategory' => 'nullable',
        'ValidFrom' => 'nullable',
        'ValidTo' => 'nullable',
        'NetValue' => 'required|numeric',
        'Discount' => 'required|numeric'
    ];


}
