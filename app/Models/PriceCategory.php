<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class PriceCategory
 * @package App\Models
 * @version January 19, 2022, 9:47 am UTC
 *
 * @property string $Name
 * @property integer $IncomingPrice
 * @property integer $BasePrice
 * @property integer $RateRelativeToBasePrice
 * @property number $Rate
 * @property integer $NineRule
 * @property integer $DisableAutoCalc
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property integer $GrossPrices
 */
class PriceCategory extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'pricecategory';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'IncomingPrice',
        'BasePrice',
        'RateRelativeToBasePrice',
        'Rate',
        'NineRule',
        'DisableAutoCalc',
        'RowCreate',
        'RowModify',
        'GrossPrices'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Name' => 'string',
        'IncomingPrice' => 'integer',
        'BasePrice' => 'integer',
        'RateRelativeToBasePrice' => 'integer',
        'Rate' => 'decimal:4',
        'NineRule' => 'integer',
        'DisableAutoCalc' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'GrossPrices' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string|max:100',
        'IncomingPrice' => 'required',
        'BasePrice' => 'required',
        'RateRelativeToBasePrice' => 'required',
        'Rate' => 'nullable|numeric',
        'NineRule' => 'required',
        'DisableAutoCalc' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'GrossPrices' => 'required'
    ];

    public function customer() {
        return $this->hasMany('App\Models\Customer', 'PriceCategory');
    }


}
