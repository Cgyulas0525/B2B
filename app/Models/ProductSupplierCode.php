<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductSupplierCode
 * @package App\Models
 * @version January 19, 2022, 9:53 am UTC
 *
 * @property integer $Product
 * @property integer $Supplier
 * @property string $Code
 * @property string $Name
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductSupplierCode extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productsuppliercode';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'Supplier',
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
        'Supplier' => 'integer',
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
        'Supplier' => 'required',
        'Code' => 'required|string|max:40',
        'Name' => 'nullable|string|max:100',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
