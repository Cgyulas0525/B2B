<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductCatExMulti
 * @package App\Models
 * @version January 19, 2022, 9:51 am UTC
 *
 * @property integer $ExIndex
 * @property string $Name
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductCatExMulti extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productcatexmulti';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'ExIndex',
        'Name',
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
        'ExIndex' => 'integer',
        'Name' => 'string',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ExIndex' => 'required|integer',
        'Name' => 'required|string|max:100',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
