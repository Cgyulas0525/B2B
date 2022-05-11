<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerTouch
 * @package App\Models
 * @version January 19, 2022, 9:45 am UTC
 *
 * @property integer $IsAlert
 * @property integer $Source
 * @property integer $Customer
 * @property integer $CustomerContact
 * @property integer $CustomerTouchMode
 * @property integer $Lead
 * @property integer $Opportunity
 * @property integer $Incoming
 * @property integer $CreateEmployee
 * @property string|\Carbon\Carbon $TouchDateTime
 * @property integer $Duration
 * @property integer $Employee
 * @property integer $CustomerTouchCategory
 * @property string $Subject
 * @property integer $Priority
 * @property integer $VoucherType
 * @property integer $MessageLog
 * @property integer $CustomerBid
 * @property integer $CustomerOrder
 * @property integer $InternalOrder
 * @property integer $StockOut
 * @property integer $SupplierBid
 * @property integer $SupplierOrder
 * @property integer $StockIn
 * @property integer $StockExchange
 * @property integer $Maintenance
 * @property integer $Investment
 * @property string $Comment
 * @property integer $Deleted
 * @property integer $DemandNote
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property string|\Carbon\Carbon $NotifyDateTime
 */
class CustomerTouch extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'customertouch';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'IsAlert',
        'Source',
        'Customer',
        'CustomerContact',
        'CustomerTouchMode',
        'Lead',
        'Opportunity',
        'Incoming',
        'CreateEmployee',
        'TouchDateTime',
        'Duration',
        'Employee',
        'CustomerTouchCategory',
        'Subject',
        'Priority',
        'VoucherType',
        'MessageLog',
        'CustomerBid',
        'CustomerOrder',
        'InternalOrder',
        'StockOut',
        'SupplierBid',
        'SupplierOrder',
        'StockIn',
        'StockExchange',
        'Maintenance',
        'Investment',
        'Comment',
        'Deleted',
        'DemandNote',
        'RowCreate',
        'RowModify',
        'NotifyDateTime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'IsAlert' => 'integer',
        'Source' => 'integer',
        'Customer' => 'integer',
        'CustomerContact' => 'integer',
        'CustomerTouchMode' => 'integer',
        'Lead' => 'integer',
        'Opportunity' => 'integer',
        'Incoming' => 'integer',
        'CreateEmployee' => 'integer',
        'TouchDateTime' => 'datetime',
        'Duration' => 'integer',
        'Employee' => 'integer',
        'CustomerTouchCategory' => 'integer',
        'Subject' => 'string',
        'Priority' => 'integer',
        'VoucherType' => 'integer',
        'MessageLog' => 'integer',
        'CustomerBid' => 'integer',
        'CustomerOrder' => 'integer',
        'InternalOrder' => 'integer',
        'StockOut' => 'integer',
        'SupplierBid' => 'integer',
        'SupplierOrder' => 'integer',
        'StockIn' => 'integer',
        'StockExchange' => 'integer',
        'Maintenance' => 'integer',
        'Investment' => 'integer',
        'Comment' => 'string',
        'Deleted' => 'integer',
        'DemandNote' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'NotifyDateTime' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'IsAlert' => 'required',
        'Source' => 'nullable',
        'Customer' => 'nullable',
        'CustomerContact' => 'nullable',
        'CustomerTouchMode' => 'required',
        'Lead' => 'nullable',
        'Opportunity' => 'nullable',
        'Incoming' => 'required',
        'CreateEmployee' => 'nullable',
        'TouchDateTime' => 'nullable',
        'Duration' => 'nullable|integer',
        'Employee' => 'nullable',
        'CustomerTouchCategory' => 'nullable',
        'Subject' => 'nullable|string|max:100',
        'Priority' => 'required|integer',
        'VoucherType' => 'nullable|integer',
        'MessageLog' => 'nullable',
        'CustomerBid' => 'nullable',
        'CustomerOrder' => 'nullable',
        'InternalOrder' => 'nullable',
        'StockOut' => 'nullable',
        'SupplierBid' => 'nullable',
        'SupplierOrder' => 'nullable',
        'StockIn' => 'nullable',
        'StockExchange' => 'nullable',
        'Maintenance' => 'nullable',
        'Investment' => 'nullable',
        'Comment' => 'nullable|string|max:65535',
        'Deleted' => 'required',
        'DemandNote' => 'nullable',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'NotifyDateTime' => 'nullable'
    ];


}
