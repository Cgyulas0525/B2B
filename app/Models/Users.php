<?php

namespace App\Models;

use App\Models\Employee;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use DB;
use App\Models\LogItem;

/**
 * Class Users
 * @package App\Models
 * @version February 2, 2022, 8:41 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property integer $employee_id
 * @property integer customercontact_id
 * @property integer $rendszergazda
 * @property string $megjegyzes
 * @property string $remember_token
 * @property string $image_url
 * @property integer $CustomerAddress
 * @property integer $TransportMode
 */
class Users extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'employee_id',
        'customercontact_id',
        'rendszergazda',
        'megjegyzes',
        'remember_token',
        'image_url',
        'CustomerAddress',
        'TransportMode'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'employee_id' => 'integer',
        'customercontact_id' => 'integer',
        'rendszergazda' => 'integer',
        'megjegyzes' => 'string',
        'remember_token' => 'string',
        'image_url' => 'string',
        'CustomerAddress' => 'integer',
        'TransportMode' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required',
        'employee_id' => 'nullable|integer',
        'customercontact_id' => 'nullable|integer',
        'rendszergazda' => 'nullable|integer',
        'megjegyzes' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'remember_token' => 'nullable|string|max:100',
        'image_url' => 'nullable|string|max:191',
        'CustomerAddress' => 'nullable|integer',
        'TransportMode' => 'nullable|integer'
    ];

    protected $append = [
        'customerName',
        'customerId',
        'employeePicture',
        'rgnev',
        'B2BLoginCount',
        'CustomerAddressId',
        'CustomerAddressName',
        'TransportModeName'
    ];

    public function getCustomerNameAttribute() {
        if (!empty($this->employee_id)) {
            return env('APP_CUSTOMER');
        }
        if (!empty($this->customercontact_id)) {
            $nev = DB::table('customer as t1')
                ->join('customercontact as t2', 't2.customer', '=', 't1.Id')
                ->where('t2.Id', $this->customercontact_id)
                ->select('t1.Name')
                ->first();
            return !empty($nev->Name) ? $nev->Name : ' ';
        }
        return ' ';
    }

    public function getCustomerIdAttribute() {
        if (!empty($this->customercontact_id)) {
            $id = DB::table('customer as t1')
                ->join('customercontact as t2', 't2.customer', '=', 't1.Id')
                ->where('t2.Id', $this->customercontact_id)
                ->where('t2.Deleted', 0)
                ->where('t1.Deleted', 0)
                ->first()->Customer;
            return !empty($id) ? $id : -9999;
        }
        return -9999;
    }

    public function getEmployeePictureAttribute() {
        if (!empty($this->employee_id)) {
            $id = $this->employee_id;
            $employee = Employee::where('Id', function ($query) use($id) {
                return $query->from('users')->select('employee_id')->where('id', $id)->first();
            })->first();
            return !empty($employee->Picture) ? $employee->Picture : NULL;
        }
        return NULL;
    }

    public function getRGNevAttribute() {
        if ($this->rendszergazda === 0) {
            return 'B2B felhasználó';
        } elseif ($this->rendszergazda === 1) {
            return 'belső felhasználó';
        } elseif ($this->rendszergazda === 2) {
            return 'rendszergazda';
        }

    }

    public function getB2BLoginCountAttribute() {
        return LogItem::where('user_id', $this->id)
            ->whereBetween('eventdatetime', [date('Y-m-d H:i:s', strtotime('today - 3 month')),
                date('Y-m-d H:i:s', strtotime('today + 1 day'))])
            ->get()->count();
    }

    public function getCustomerAddressNameAttribute() {
        if (!empty($this->CustomerAddress)) {
            $customerAddress = CustomerAddress::where('Id', $this->CustomerAddress)->first();
            return $customerAddress->Name . " " . $customerAddress->Country . " " . $customerAddress->Zip . " " . $customerAddress->City . " " . $customerAddress->Street . " " . $customerAddress->HouseNumber;
        }
        return ' ';
    }

    public function getCustomerAddressIdAttribute() {
        if (!empty($this->CustomerAddress)) {
            $customerAddress = CustomerAddress::where('Id', $this->CustomerAddress)->first();
            return $customerAddress->Id;
        }
        return ' ';
    }

    public function getTransportModeNameAttribute() {
        return !empty($this->TransportMode) ? TransportMode::where('Id', $this->TransportMode)->first()->Name : ' ';
    }

}
