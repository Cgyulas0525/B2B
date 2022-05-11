<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class PaymentMethodLang
 * @package App\Models
 * @version January 19, 2022, 9:47 am UTC
 *
 * @property integer $Lang
 * @property integer $PaymentMethod
 * @property string $Name
 * @property string $VoucherComment
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class PaymentMethodLang extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'paymentmethodlang';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Lang',
        'PaymentMethod',
        'Name',
        'VoucherComment',
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
        'PaymentMethod' => 'integer',
        'Name' => 'string',
        'VoucherComment' => 'string',
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
        'PaymentMethod' => 'required',
        'Name' => 'required|string|max:100',
        'VoucherComment' => 'nullable|string|max:65535',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
