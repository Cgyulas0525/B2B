<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Vat
 * @package App\Models
 * @version January 19, 2022, 9:54 am UTC
 *
 * @property integer $DirectionBuy
 * @property string $Name
 * @property number $Rate
 * @property number $ExpenseRate
 * @property integer $Converse
 * @property string $ConverseText
 * @property integer $Eu
 * @property integer $CashRegIndex
 * @property integer $Deleted
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property string $Description
 * @property integer $ShowDetailName
 */
class Vat extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'vat';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'DirectionBuy',
        'Name',
        'Rate',
        'ExpenseRate',
        'Converse',
        'ConverseText',
        'Eu',
        'CashRegIndex',
        'Deleted',
        'RowCreate',
        'RowModify',
        'Description',
        'ShowDetailName'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'DirectionBuy' => 'integer',
        'Name' => 'string',
        'Rate' => 'decimal:4',
        'ExpenseRate' => 'decimal:4',
        'Converse' => 'integer',
        'ConverseText' => 'string',
        'Eu' => 'integer',
        'CashRegIndex' => 'integer',
        'Deleted' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'Description' => 'string',
        'ShowDetailName' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'DirectionBuy' => 'required',
        'Name' => 'required|string|max:100',
        'Rate' => 'required|numeric',
        'ExpenseRate' => 'nullable|numeric',
        'Converse' => 'required',
        'ConverseText' => 'nullable|string|max:100',
        'Eu' => 'required',
        'CashRegIndex' => 'required|integer',
        'Deleted' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'Description' => 'nullable|string|max:100',
        'ShowDetailName' => 'required'
    ];


}
