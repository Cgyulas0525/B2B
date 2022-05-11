<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductSubstitution
 * @package App\Models
 * @version January 19, 2022, 9:52 am UTC
 *
 * @property integer $OriginalProduct
 * @property integer $SubstitutedProduct
 * @property number $Quantity
 * @property integer $Duplex
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductSubstitution extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productsubstitution';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'OriginalProduct',
        'SubstitutedProduct',
        'Quantity',
        'Duplex',
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
        'OriginalProduct' => 'integer',
        'SubstitutedProduct' => 'integer',
        'Quantity' => 'decimal:4',
        'Duplex' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'OriginalProduct' => 'required',
        'SubstitutedProduct' => 'required',
        'Quantity' => 'required|numeric',
        'Duplex' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
