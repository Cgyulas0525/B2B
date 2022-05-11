<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductWebCategories
 * @package App\Models
 * @version January 19, 2022, 9:53 am UTC
 *
 * @property integer $Product
 * @property integer $ProductWebCategory
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductWebCategories extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productwebcategories';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'ProductWebCategory',
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
        'ProductWebCategory' => 'integer',
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
        'ProductWebCategory' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
