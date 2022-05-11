<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductMaterial
 * @package App\Models
 * @version January 19, 2022, 9:52 am UTC
 *
 * @property integer $TargetProduct
 * @property integer $SourceProduct
 * @property number $SourceQuantity
 * @property integer $Accessory
 * @property integer $BuildForbid
 * @property integer $RowOrder
 * @property integer $PriceCategory
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductMaterial extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productmaterial';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'TargetProduct',
        'SourceProduct',
        'SourceQuantity',
        'Accessory',
        'BuildForbid',
        'RowOrder',
        'PriceCategory',
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
        'TargetProduct' => 'integer',
        'SourceProduct' => 'integer',
        'SourceQuantity' => 'decimal:4',
        'Accessory' => 'integer',
        'BuildForbid' => 'integer',
        'RowOrder' => 'integer',
        'PriceCategory' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'TargetProduct' => 'required',
        'SourceProduct' => 'required',
        'SourceQuantity' => 'required|numeric',
        'Accessory' => 'required',
        'BuildForbid' => 'required',
        'RowOrder' => 'required|integer',
        'PriceCategory' => 'nullable',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
