<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductQtyUnit
 * @package App\Models
 * @version January 19, 2022, 9:52 am UTC
 *
 * @property integer $Product
 * @property integer $QuantityUnit
 * @property number $Multiplier
 * @property integer $QuantityDigits
 * @property integer $VoucherDisplay
 * @property integer $Commerce
 * @property integer $SellDefault
 * @property integer $BuyDefault
 * @property integer $SellBanned
 * @property integer $BuyBanned
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductQtyUnit extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productqtyunit';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'QuantityUnit',
        'Multiplier',
        'QuantityDigits',
        'VoucherDisplay',
        'Commerce',
        'SellDefault',
        'BuyDefault',
        'SellBanned',
        'BuyBanned',
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
        'QuantityUnit' => 'integer',
        'Multiplier' => 'decimal:4',
        'QuantityDigits' => 'integer',
        'VoucherDisplay' => 'integer',
        'Commerce' => 'integer',
        'SellDefault' => 'integer',
        'BuyDefault' => 'integer',
        'SellBanned' => 'integer',
        'BuyBanned' => 'integer',
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
        'QuantityUnit' => 'required',
        'Multiplier' => 'required|numeric',
        'QuantityDigits' => 'required|integer',
        'VoucherDisplay' => 'required',
        'Commerce' => 'required',
        'SellDefault' => 'required',
        'BuyDefault' => 'required',
        'SellBanned' => 'required',
        'BuyBanned' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
