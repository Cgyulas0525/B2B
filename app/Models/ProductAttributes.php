<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductAttributes
 * @package App\Models
 * @version January 19, 2022, 9:51 am UTC
 *
 * @property integer $Product
 * @property integer $ProductAttribute
 * @property string $ValueString
 * @property number $ValueDecimal
 * @property string|\Carbon\Carbon $ValueDate
 * @property integer $ValueBool
 * @property integer $ValueLookup
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductAttributes extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productattributes';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'ProductAttribute',
        'ValueString',
        'ValueDecimal',
        'ValueDate',
        'ValueBool',
        'ValueLookup',
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
        'ProductAttribute' => 'integer',
        'ValueString' => 'string',
        'ValueDecimal' => 'decimal:4',
        'ValueDate' => 'datetime',
        'ValueBool' => 'integer',
        'ValueLookup' => 'integer',
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
        'ProductAttribute' => 'required',
        'ValueString' => 'required|string|max:100',
        'ValueDecimal' => 'required|numeric',
        'ValueDate' => 'nullable',
        'ValueBool' => 'required',
        'ValueLookup' => 'nullable',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
