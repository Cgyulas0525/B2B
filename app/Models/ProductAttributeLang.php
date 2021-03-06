<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductAttributeLang
 * @package App\Models
 * @version January 19, 2022, 9:51 am UTC
 *
 * @property integer $Lang
 * @property integer $ProductAttribute
 * @property string $Name
 * @property string $Postfix
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductAttributeLang extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productattributelang';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Lang',
        'ProductAttribute',
        'Name',
        'Postfix',
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
        'Lang' => 'integer',
        'ProductAttribute' => 'integer',
        'Name' => 'string',
        'Postfix' => 'string',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Lang' => 'required|integer',
        'ProductAttribute' => 'required',
        'Name' => 'nullable|string|max:100',
        'Postfix' => 'nullable|string|max:8',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
