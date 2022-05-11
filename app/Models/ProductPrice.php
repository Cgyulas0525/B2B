<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductPrice
 * @package App\Models
 * @version January 19, 2022, 9:52 am UTC
 *
 * @property integer $Product
 * @property integer $Currency
 * @property string|\Carbon\Carbon $ValidFrom
 * @property integer $PriceCategory
 * @property integer $QuantityUnit
 * @property number $Price
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductPrice extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productprice';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'Currency',
        'ValidFrom',
        'PriceCategory',
        'QuantityUnit',
        'Price',
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
        'Product' => 'integer',
        'Currency' => 'integer',
        'ValidFrom' => 'datetime',
        'PriceCategory' => 'integer',
        'QuantityUnit' => 'integer',
        'Price' => 'decimal:4',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product' => 'required',
        'Currency' => 'required',
        'ValidFrom' => 'required',
        'PriceCategory' => 'required',
        'QuantityUnit' => 'required',
        'Price' => 'required|numeric',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
