<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerCategory
 * @package App\Models
 * @version January 19, 2022, 9:44 am UTC
 *
 * @property string $Name
 * @property integer $Parent
 * @property integer $LeftValue
 * @property integer $RightValue
 * @property number $DiscountPercent
 * @property integer $PaymentMethod
 * @property integer $PaymentMethodStrict
 * @property integer $PriceCategory
 * @property integer $Currency
 * @property integer $TransportMode
 * @property string $VoucherRules
 * @property string $DebitQuota
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property integer $IsCompany
 */
class CustomerCategory extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'customercategory';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Parent',
        'LeftValue',
        'RightValue',
        'DiscountPercent',
        'PaymentMethod',
        'PaymentMethodStrict',
        'PriceCategory',
        'Currency',
        'TransportMode',
        'VoucherRules',
        'DebitQuota',
        'RowCreate',
        'RowModify',
        'IsCompany'
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
        'DiscountPercent' => 'decimal:4',
        'PaymentMethod' => 'integer',
        'PaymentMethodStrict' => 'integer',
        'PriceCategory' => 'integer',
        'Currency' => 'integer',
        'TransportMode' => 'integer',
        'VoucherRules' => 'string',
        'DebitQuota' => 'string',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'IsCompany' => 'integer'
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
        'DiscountPercent' => 'nullable|numeric',
        'PaymentMethod' => 'nullable',
        'PaymentMethodStrict' => 'required',
        'PriceCategory' => 'nullable',
        'Currency' => 'nullable',
        'TransportMode' => 'nullable',
        'VoucherRules' => 'nullable|string|max:65535',
        'DebitQuota' => 'nullable|string|max:65535',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'IsCompany' => 'nullable'
    ];

    public function customer() {
        return $this->hasMany('App\Models\Customer', 'CustomerCategory');
    }



}
