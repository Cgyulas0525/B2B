<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerBidGroup
 * @package App\Models
 * @version January 19, 2022, 9:44 am UTC
 *
 * @property integer $CustomerBid
 * @property string $Name
 * @property integer $ShowSummary
 * @property integer $HideDetails
 * @property number $GroupQuantity
 * @property integer $GroupQuantityUnit
 * @property string $Comment
 * @property integer $RowOrder
 * @property string|\Carbon\Carbon $RowVersion
 * @property integer $HideDetailPrices
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class CustomerBidGroup extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'customerbidgroup';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'CustomerBid',
        'Name',
        'ShowSummary',
        'HideDetails',
        'GroupQuantity',
        'GroupQuantityUnit',
        'Comment',
        'RowOrder',
        'RowVersion',
        'HideDetailPrices',
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
        'CustomerBid' => 'integer',
        'Name' => 'string',
        'ShowSummary' => 'integer',
        'HideDetails' => 'integer',
        'GroupQuantity' => 'decimal:4',
        'GroupQuantityUnit' => 'integer',
        'Comment' => 'string',
        'RowOrder' => 'integer',
        'RowVersion' => 'datetime',
        'HideDetailPrices' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CustomerBid' => 'required',
        'Name' => 'required|string|max:100',
        'ShowSummary' => 'required',
        'HideDetails' => 'required',
        'GroupQuantity' => 'nullable|numeric',
        'GroupQuantityUnit' => 'nullable',
        'Comment' => 'nullable|string|max:65535',
        'RowOrder' => 'required|integer',
        'RowVersion' => 'required',
        'HideDetailPrices' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
