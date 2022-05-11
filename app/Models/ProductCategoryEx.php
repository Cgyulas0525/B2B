<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductCategoryEx
 * @package App\Models
 * @version January 19, 2022, 9:52 am UTC
 *
 * @property integer $ExIndex
 * @property string $Name
 * @property integer $Parent
 * @property integer $LeftValue
 * @property integer $RightValue
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property integer $ForeColor
 * @property integer $BackColor
 */
class ProductCategoryEx extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productcategoryex';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'ExIndex',
        'Name',
        'Parent',
        'LeftValue',
        'RightValue',
        'RowCreate',
        'RowModify',
        'ForeColor',
        'BackColor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'ExIndex' => 'integer',
        'Name' => 'string',
        'Parent' => 'integer',
        'LeftValue' => 'integer',
        'RightValue' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'ForeColor' => 'integer',
        'BackColor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ExIndex' => 'required|integer',
        'Name' => 'required|string|max:100',
        'Parent' => 'nullable',
        'LeftValue' => 'required',
        'RightValue' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'ForeColor' => 'nullable|integer',
        'BackColor' => 'nullable|integer'
    ];


}
