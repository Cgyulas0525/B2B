<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class QuantityUnit
 * @package App\Models
 * @version January 19, 2022, 9:53 am UTC
 *
 * @property string $Name
 * @property integer $CashRegIndex
 * @property integer $QuantityDigits
 * @property integer $Standard
 * @property integer $Deleted
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class QuantityUnit extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'quantityunit';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'CashRegIndex',
        'QuantityDigits',
        'Standard',
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
        'Name' => 'string',
        'CashRegIndex' => 'integer',
        'QuantityDigits' => 'integer',
        'Standard' => 'integer',
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
        'Name' => 'required|string|max:10',
        'CashRegIndex' => 'required|integer',
        'QuantityDigits' => 'required|integer',
        'Standard' => 'required',
        'Deleted' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
