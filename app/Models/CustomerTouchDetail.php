<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerTouchDetail
 * @package App\Models
 * @version January 19, 2022, 9:45 am UTC
 *
 * @property integer $CustomerTouch
 * @property integer $Product
 * @property number $Quantity
 * @property number $UnitPrice
 * @property integer $ProductCategoryExport
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class CustomerTouchDetail extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'customertouchdetail';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'CustomerTouch',
        'Product',
        'Quantity',
        'UnitPrice',
        'ProductCategory',
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
        'CustomerTouch' => 'integer',
        'Product' => 'integer',
        'Quantity' => 'decimal:4',
        'UnitPrice' => 'decimal:4',
        'ProductCategory' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CustomerTouch' => 'required',
        'Product' => 'nullable',
        'Quantity' => 'nullable|numeric',
        'UnitPrice' => 'nullable|numeric',
        'ProductCategoryExport' => 'nullable',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
