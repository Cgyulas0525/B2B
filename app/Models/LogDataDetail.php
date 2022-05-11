<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class LogDataDetail
 * @package App\Models
 * @version January 19, 2022, 9:46 am UTC
 *
 * @property integer $LogData
 * @property string $ChangedField
 */
class LogDataDetail extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'logdatadetail';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'LogData',
        'ChangedField'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'LogData' => 'integer',
        'ChangedField' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'LogData' => 'required',
        'ChangedField' => 'required|string|max:100'
    ];


}
