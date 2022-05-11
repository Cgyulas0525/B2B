<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductBarcode
 * @package App\Models
 * @version January 19, 2022, 9:51 am UTC
 *
 * @property integer $Product
 * @property string $Barcode
 * @property integer $QuantityUnit
 * @property number $Quantity
 * @property integer $MultipleOnly
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductBarcode extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productbarcode';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'Barcode',
        'QuantityUnit',
        'Quantity',
        'MultipleOnly',
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
        'Barcode' => 'string',
        'QuantityUnit' => 'integer',
        'Quantity' => 'decimal:4',
        'MultipleOnly' => 'integer',
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
        'Barcode' => 'required|string|max:100',
        'QuantityUnit' => 'nullable',
        'Quantity' => 'required|numeric',
        'MultipleOnly' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
