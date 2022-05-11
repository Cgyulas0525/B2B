<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class LogItemTableDetail
 * @package App\Models
 * @version February 14, 2022, 11:00 am UTC
 *
 * @property integer $logitemtable_id
 * @property string $changedfield
 * @property integer $oldinteger
 * @property integer $oldstring
 * @property integer $olddatetime
 * @property number $olddecimal
 * @property integer $newinteger
 * @property integer $newstring
 * @property integer $newdatetime
 * @property number $newdecimal
 */
class LogItemTableDetail extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'logitemtabledetail';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'logitemtable_id',
        'changedfield',
        'oldinteger',
        'oldstring',
        'olddatetime',
        'olddecimal',
        'newinteger',
        'newstring',
        'newdatetime',
        'newdecimal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'logitemtable_id' => 'integer',
        'changedfield' => 'string',
        'oldinteger' => 'integer',
        'oldstring' => 'string',
        'olddatetime' => 'datetime',
        'olddecimal' => 'decimal:4',
        'newinteger' => 'integer',
        'newstring' => 'string',
        'newdatetime' => 'datetime',
        'newdecimal' => 'decimal:4'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'logitemtable_id' => 'required|integer',
        'changedfield' => 'required|string|max:100'
    ];


}
