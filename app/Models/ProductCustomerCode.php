<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductCustomerCode
 * @package App\Models
 * @version January 19, 2022, 9:52 am UTC
 *
 * @property integer $Product
 * @property integer $Customer
 * @property string $Code
 * @property string $Name
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductCustomerCode extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productcustomercode';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'Customer',
        'Code',
        'Name',
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
        'Customer' => 'integer',
        'Code' => 'string',
        'Name' => 'string',
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
        'Customer' => 'required',
        'Code' => 'required|string|max:40',
        'Name' => 'nullable|string|max:100',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
