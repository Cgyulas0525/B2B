<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use ddwClass;

/**
 * Class LogItemTable
 * @package App\Models
 * @version February 14, 2022, 11:00 am UTC
 *
 * @property integer $logitem_id
 * @property string $tablename
 * @property integer $recordid
 * @property integer $targetrecordid
 */
class LogItemTable extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'logitemtable';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'logitem_id',
        'tablename',
        'recordid',
        'targetrecordid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'logitem_id' => 'integer',
        'tablename' => 'string',
        'recordid' => 'integer',
        'targetrecordid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'logitem_id' => 'required|integer',
        'tablename' => 'required|string|max:100',
        'recordid' => 'nullable|integer',
        'targetrecordid' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    protected $append = ['customerName', 'userName', 'eventName', 'eventDateTime', 'detailCount'];

    public function getCustomerNameAttribute()
    {
        $customer_id = LogItem::find($this->logitem_id)->customer_id;
        if ( $customer_id != -9999 ) {
            return Customer::find($customer_id)->Name;
        } else {
            return session('customer_name');
        }
    }

    public function getUserNameAttribute()
    {
        return Users::find(LogItem::find($this->logitem_id)->user_id)->name;
    }

    public function getEventNameAttribute()
    {
        return ddwClass::logEvent(LogItem::find($this->logitem_id)->eventtype);
    }

    public function getEventDateTimeAttribute()
    {
        return LogItem::find($this->logitem_id)->eventdatetime;
    }

    public function getDetailCountAttribute()
    {
        return LogItemTableDetail::where('logitemtable_id', $this->id)->get()->count();
    }


}
