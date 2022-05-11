<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class WarehouseBalance
 * @package App\Models
 * @version January 19, 2022, 9:54 am UTC
 *
 * @property integer $Product
 * @property integer $Warehouse
 * @property number $Balance
 * @property number $AllocatedBalance
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class WarehouseBalance extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'warehousebalance';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'Warehouse',
        'Balance',
        'AllocatedBalance',
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
        'Warehouse' => 'integer',
        'Balance' => 'decimal:4',
        'AllocatedBalance' => 'decimal:4',
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
        'Warehouse' => 'required',
        'Balance' => 'required|numeric',
        'AllocatedBalance' => 'nullable|numeric',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
