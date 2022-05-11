<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerOrderDetailStatus
 * @package App\Models
 * @version January 19, 2022, 9:45 am UTC
 *
 * @property string $Name
 * @property integer $StrictAllocate
 * @property integer $Deleted
 * @property integer $EditMode
 * @property integer $ForeColor
 * @property integer $BackColor
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class CustomerOrderDetailStatus extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'customerorderdetailstatus';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'StrictAllocate',
        'Deleted',
        'EditMode',
        'ForeColor',
        'BackColor',
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
        'StrictAllocate' => 'integer',
        'Deleted' => 'integer',
        'EditMode' => 'integer',
        'ForeColor' => 'integer',
        'BackColor' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string|max:100',
        'StrictAllocate' => 'required',
        'Deleted' => 'required',
        'EditMode' => 'required|integer',
        'ForeColor' => 'nullable|integer',
        'BackColor' => 'nullable|integer',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
