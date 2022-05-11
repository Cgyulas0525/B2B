<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Warehouse
 * @package App\Models
 * @version January 19, 2022, 9:54 am UTC
 *
 * @property integer $Site
 * @property string $Name
 * @property integer $AllowNegativeBalance
 * @property integer $PermissionProtected
 * @property integer $Trust
 * @property integer $TrustCustomer
 * @property integer $TrustCustomerAddress
 * @property integer $OwnerEmployee
 * @property integer $OwnerInvestment
 * @property integer $SellBanned
 * @property integer $Foreignn
 * @property string $Zip
 * @property string $City
 * @property string $Street
 * @property string $HouseNumber
 * @property string $ContactName
 * @property string $Phone
 * @property string $Fax
 * @property string $Email
 * @property string $Comment
 * @property integer $Deleted
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property string $GLN
 * @property integer $IsConsigner
 */
class Warehouse extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'warehouse';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Site',
        'Name',
        'AllowNegativeBalance',
        'PermissionProtected',
        'Trust',
        'TrustCustomer',
        'TrustCustomerAddress',
        'OwnerEmployee',
        'OwnerInvestment',
        'SellBanned',
        'Foreignn',
        'Zip',
        'City',
        'Street',
        'HouseNumber',
        'ContactName',
        'Phone',
        'Fax',
        'Email',
        'Comment',
        'Deleted',
        'RowCreate',
        'RowModify',
        'GLN',
        'IsConsigner'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Site' => 'integer',
        'Name' => 'string',
        'AllowNegativeBalance' => 'integer',
        'PermissionProtected' => 'integer',
        'Trust' => 'integer',
        'TrustCustomer' => 'integer',
        'TrustCustomerAddress' => 'integer',
        'OwnerEmployee' => 'integer',
        'OwnerInvestment' => 'integer',
        'SellBanned' => 'integer',
        'Foreignn' => 'integer',
        'Zip' => 'string',
        'City' => 'string',
        'Street' => 'string',
        'HouseNumber' => 'string',
        'ContactName' => 'string',
        'Phone' => 'string',
        'Fax' => 'string',
        'Email' => 'string',
        'Comment' => 'string',
        'Deleted' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'GLN' => 'string',
        'IsConsigner' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Site' => 'required',
        'Name' => 'required|string|max:100',
        'AllowNegativeBalance' => 'required',
        'PermissionProtected' => 'required',
        'Trust' => 'required',
        'TrustCustomer' => 'nullable',
        'TrustCustomerAddress' => 'nullable',
        'OwnerEmployee' => 'nullable',
        'OwnerInvestment' => 'nullable',
        'SellBanned' => 'required',
        'Foreignn' => 'required',
        'Zip' => 'nullable|string|max:10',
        'City' => 'nullable|string|max:100',
        'Street' => 'nullable|string|max:100',
        'HouseNumber' => 'nullable|string|max:20',
        'ContactName' => 'nullable|string|max:100',
        'Phone' => 'nullable|string|max:20',
        'Fax' => 'nullable|string|max:20',
        'Email' => 'nullable|string|max:100',
        'Comment' => 'nullable|string|max:65535',
        'Deleted' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'GLN' => 'nullable|string|max:40',
        'IsConsigner' => 'required'
    ];

    public function CustomerBid() {
        return $this->hasMany('App\Models\CustomerBid', 'Warehouse');
    }

}
