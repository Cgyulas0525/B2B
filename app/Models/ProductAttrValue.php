<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductAttrValue
 * @package App\Models
 * @version January 19, 2022, 9:51 am UTC
 *
 * @property integer $ProductAttribute
 * @property string $Name
 * @property integer $RowOrder
 * @property integer $Deleted
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductAttrValue extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productattrvalue';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'ProductAttribute',
        'Name',
        'RowOrder',
        'Deleted',
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
        'ProductAttribute' => 'integer',
        'Name' => 'string',
        'RowOrder' => 'integer',
        'Deleted' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ProductAttribute' => 'required',
        'Name' => 'required|string|max:100',
        'RowOrder' => 'required|integer',
        'Deleted' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
