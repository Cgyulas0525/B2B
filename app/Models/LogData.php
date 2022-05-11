<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class LogData
 * @package App\Models
 * @version January 19, 2022, 9:46 am UTC
 *
 * @property integer $Employee
 * @property integer $EventType
 * @property string|\Carbon\Carbon $EventDateTime
 * @property string $RemoteAddress
 * @property string $ChangedTable
 * @property integer $ChangedId
 * @property integer $Forced
 */
class LogData extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'logdata';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Employee',
        'EventType',
        'EventDateTime',
        'RemoteAddress',
        'ChangedTable',
        'ChangedId',
        'Forced'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Employee' => 'integer',
        'EventType' => 'integer',
        'EventDateTime' => 'datetime',
        'RemoteAddress' => 'string',
        'ChangedTable' => 'string',
        'ChangedId' => 'integer',
        'Forced' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Employee' => 'nullable',
        'EventType' => 'required|integer',
        'EventDateTime' => 'required',
        'RemoteAddress' => 'nullable|string|max:100',
        'ChangedTable' => 'required|string|max:100',
        'ChangedId' => 'required',
        'Forced' => 'required'
    ];


}
