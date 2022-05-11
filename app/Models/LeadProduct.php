<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class LeadProduct
 * @package App\Models
 * @version January 19, 2022, 9:46 am UTC
 *
 * @property integer $Leed
 * @property integer $Product
 * @property integer $ProductCategoryExport
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class LeadProduct extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'leadproduct';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Leed',
        'Product',
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
        'Leed' => 'integer',
        'Product' => 'integer',
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
        'Leed' => 'required',
        'Product' => 'nullable',
        'ProductCategoryExport' => 'nullable',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
