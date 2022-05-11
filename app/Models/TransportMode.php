<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TransportMode
 * @package App\Models
 * @version January 19, 2022, 9:54 am UTC
 *
 * @property string $Name
 * @property number $DiscountPercent
 * @property string $VoucherComment
 * @property integer $Deleted
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class TransportMode extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'transportmode';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'DiscountPercent',
        'VoucherComment',
        'Deleted',
        'RowCreate',
        'RowModify',
        'Code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Name' => 'string',
        'DiscountPercent' => 'decimal:4',
        'VoucherComment' => 'string',
        'Deleted' => 'integer',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'Code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string|max:100',
        'DiscountPercent' => 'required|numeric',
        'VoucherComment' => 'nullable|string|max:100',
        'Deleted' => 'required',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];

    public function customer() {
        return $this->hasMany('App\Models\Customer', 'TransportMode');
    }

    public function CustomerAddress() {
        return $this->hasMany('App\Models\CustomerAddress', 'TransportMode');
    }

    public function CustomerBid() {
        return $this->hasMany('App\Models\CustomerBid', 'TransportMode');
    }


}
