<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Currency
 * @package App\Models
 * @version February 2, 2022, 8:27 am UTC
 *
 * @property string $Name
 * @property string $Sign
 * @property integer $RoundDigits
 * @property integer $DetailRoundDigits
 * @property integer $GrossRound
 * @property string $Denomination
 * @property integer $Deleted
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class Currency extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'currency';

//    const CREATED_AT = 'created_at';
//    const UPDATED_AT = 'updated_at';
//
//
//    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Sign',
        'RoundDigits',
        'DetailRoundDigits',
        'GrossRound',
        'Denomination',
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
        'Sign' => 'string',
        'RoundDigits' => 'integer',
        'DetailRoundDigits' => 'integer',
        'GrossRound' => 'integer',
        'Denomination' => 'string',
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
        'Name' => 'required|string|max:8',
        'Sign' => 'required|string|max:4',
        'RoundDigits' => 'required|integer',
        'DetailRoundDigits' => 'required|integer',
        'GrossRound' => 'required',
        'Denomination' => 'nullable|string|max:65535',
        'Deleted' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
