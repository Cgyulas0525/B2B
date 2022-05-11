<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class LogDataValue
 * @package App\Models
 * @version January 19, 2022, 9:47 am UTC
 *
 * @property integer $LogDataDetail
 * @property integer $OldSmallint
 * @property integer $OldInteger
 * @property integer $OldBigint
 * @property number $OldNumeric
 * @property string|\Carbon\Carbon $OldDate
 * @property string $OldVarchar
 * @property string $OldBytes
 * @property string $OldText
 * @property integer $NewSmallint
 * @property integer $NewInteger
 * @property integer $NewBigint
 * @property number $NewNumeric
 * @property string|\Carbon\Carbon $NewDate
 * @property string $NewVarchar
 * @property string $NewBytes
 * @property string $NewText
 */
class LogDataValue extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'logdatavalue';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'LogDataDetail',
        'OldSmallint',
        'OldInteger',
        'OldBigint',
        'OldNumeric',
        'OldDate',
        'OldVarchar',
        'OldBytes',
        'OldText',
        'NewSmallint',
        'NewInteger',
        'NewBigint',
        'NewNumeric',
        'NewDate',
        'NewVarchar',
        'NewBytes',
        'NewText'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'LogDataDetail' => 'integer',
        'OldSmallint' => 'integer',
        'OldInteger' => 'integer',
        'OldBigint' => 'integer',
        'OldNumeric' => 'decimal:4',
        'OldDate' => 'datetime',
        'OldVarchar' => 'string',
        'OldBytes' => 'string',
        'OldText' => 'string',
        'NewSmallint' => 'integer',
        'NewInteger' => 'integer',
        'NewBigint' => 'integer',
        'NewNumeric' => 'decimal:4',
        'NewDate' => 'datetime',
        'NewVarchar' => 'string',
        'NewBytes' => 'string',
        'NewText' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'LogDataDetail' => 'required',
        'OldSmallint' => 'nullable',
        'OldInteger' => 'nullable|integer',
        'OldBigint' => 'nullable',
        'OldNumeric' => 'nullable|numeric',
        'OldDate' => 'nullable',
        'OldVarchar' => 'nullable|string|max:100',
        'OldBytes' => 'nullable|string|max:65535',
        'OldText' => 'nullable|string|max:65535',
        'NewSmallint' => 'nullable',
        'NewInteger' => 'nullable|integer',
        'NewBigint' => 'nullable',
        'NewNumeric' => 'nullable|numeric',
        'NewDate' => 'nullable',
        'NewVarchar' => 'nullable|string|max:100',
        'NewBytes' => 'nullable|string|max:65535',
        'NewText' => 'nullable|string|max:65535'
    ];


}
