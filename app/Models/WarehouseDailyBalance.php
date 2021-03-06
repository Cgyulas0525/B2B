<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class WarehouseDailyBalance
 * @package App\Models
 * @version January 19, 2022, 9:55 am UTC
 *
 * @property integer $Product
 * @property integer $Warehouse
 * @property string|\Carbon\Carbon $Date
 * @property number $Balance
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class WarehouseDailyBalance extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'warehousedailybalance';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'Warehouse',
        'Date',
        'Balance',
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
        'Date' => 'datetime',
        'Balance' => 'decimal:4',
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
        'Date' => 'nullable',
        'Balance' => 'required|numeric',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
