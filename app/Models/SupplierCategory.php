<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SupplierCategory
 * @package App\Models
 * @version January 19, 2022, 9:54 am UTC
 *
 * @property string $Name
 * @property integer $Parent
 * @property integer $LeftValue
 * @property integer $RightValue
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class SupplierCategory extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'suppliercategory';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Parent',
        'LeftValue',
        'RightValue',
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
        'Parent' => 'integer',
        'LeftValue' => 'integer',
        'RightValue' => 'integer',
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
        'Parent' => 'nullable',
        'LeftValue' => 'required',
        'RightValue' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];

    public function customer() {
        return $this->hasMany('App\Models\Customer', 'SupplierCategory');
    }

}
