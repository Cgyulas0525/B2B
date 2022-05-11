<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tag
 * @package App\Models
 * @version January 19, 2022, 9:54 am UTC
 *
 * @property string $Name
 * @property integer $Customer
 * @property integer $Product
 * @property integer $CustomerBid
 * @property integer $CustomerOrder
 * @property integer $InternalOrder
 * @property integer $StockOut
 * @property integer $SupplierBid
 * @property integer $SupplierOrder
 * @property integer $StockIn
 * @property integer $StockExchange
 * @property integer $Manufacturing
 * @property integer $LeadId
 * @property integer $Opportunity
 * @property integer $Campaign
 * @property integer $Vehicle
 * @property integer $Route
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property integer $Fabric
 * @property integer $CustomerTouch
 */
class Tag extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'tag';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Customer',
        'Product',
        'CustomerBid',
        'CustomerOrder',
        'InternalOrder',
        'StockOut',
        'SupplierBid',
        'SupplierOrder',
        'StockIn',
        'StockExchange',
        'Manufacturing',
        'LeadId',
        'Opportunity',
        'Campaign',
        'Vehicle',
        'Route',
        'RowCreate',
        'RowModify',
        'Fabric',
        'CustomerTouch'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Name' => 'string',
        'Customer' => 'integer',
        'Product' => 'integer',
        'CustomerBid' => 'integer',
        'CustomerOrder' => 'integer',
        'InternalOrder' => 'integer',
        'StockOut' => 'integer',
        'SupplierBid' => 'integer',
        'SupplierOrder' => 'integer',
        'StockIn' => 'integer',
        'StockExchange' => 'integer',
        'Manufacturing' => 'integer',
        'LeadId' => 'integer',
        'Opportunity' => 'integer',
        'Campaign' => 'integer',
        'Vehicle' => 'integer',
        'Route' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'Fabric' => 'integer',
        'CustomerTouch' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string|max:100',
        'Customer' => 'nullable',
        'Product' => 'nullable',
        'CustomerBid' => 'nullable',
        'CustomerOrder' => 'nullable',
        'InternalOrder' => 'nullable',
        'StockOut' => 'nullable',
        'SupplierBid' => 'nullable',
        'SupplierOrder' => 'nullable',
        'StockIn' => 'nullable',
        'StockExchange' => 'nullable',
        'Manufacturing' => 'nullable',
        'LeadId' => 'nullable',
        'Opportunity' => 'nullable',
        'Campaign' => 'nullable',
        'Vehicle' => 'nullable',
        'Route' => 'nullable',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'Fabric' => 'nullable',
        'CustomerTouch' => 'nullable'
    ];


}
