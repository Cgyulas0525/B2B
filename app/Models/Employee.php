<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Employee
 * @package App\Models
 * @version January 19, 2022, 10:00 am UTC
 *
 * @property integer $Site
 * @property integer $IsAdmin
 * @property integer $IsEmployee
 * @property integer $IsPermission
 * @property integer $IsAgent
 * @property string $Code
 * @property string $Titular
 * @property string $Name
 * @property string $BirthName
 * @property string $BirthPlace
 * @property string|\Carbon\Carbon $BirthDate
 * @property integer $GenderMale
 * @property string $Nationality
 * @property string $MotherName
 * @property string $TaxId
 * @property string $InsuranceId
 * @property string $IdentifiyNumber
 * @property string $PassportNumber
 * @property string $BankName
 * @property string $BankAccount
 * @property string $Phone
 * @property string $Sms
 * @property string $Email
 * @property string $PhonePrivate
 * @property string $SmsPrivate
 * @property string $EmailPrivate
 * @property string $Picture
 * @property integer $DefaultDivision
 * @property integer $Leader
 * @property integer $LoginDisabled
 * @property string $Username
 * @property string $Password
 * @property string $PINCode
 * @property string $SidSddl
 * @property string $SidSddlMachine
 * @property string $TwoFactorAuthSms
 * @property string $TwoFactorAuthEmail
 * @property string $EmailSignature
 * @property string $UILanguage
 * @property string $CallCardInfo
 * @property string $Setting
 * @property string $FabricExpense
 * @property string $Comment
 * @property integer $Deleted
 */
class Employee extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'employee';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Site',
        'IsAdmin',
        'IsEmployee',
        'IsPermission',
        'IsAgent',
        'Code',
        'Titular',
        'Name',
        'BirthName',
        'BirthPlace',
        'BirthDate',
        'GenderMale',
        'Nationality',
        'MotherName',
        'TaxId',
        'InsuranceId',
        'IdentifiyNumber',
        'PassportNumber',
        'BankName',
        'BankAccount',
        'Phone',
        'Sms',
        'Email',
        'PhonePrivate',
        'SmsPrivate',
        'EmailPrivate',
        'Picture',
        'DefaultDivision',
        'Leader',
        'LoginDisabled',
        'Username',
        'Password',
        'PINCode',
        'SidSddl',
        'SidSddlMachine',
        'TwoFactorAuthSms',
        'TwoFactorAuthEmail',
        'EmailSignature',
        'UILanguage',
        'CallCardInfo',
        'Setting',
        'FabricExpense',
        'Comment',
        'Deleted'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Site' => 'integer',
        'IsAdmin' => 'integer',
        'IsEmployee' => 'integer',
        'IsPermission' => 'integer',
        'IsAgent' => 'integer',
        'Code' => 'string',
        'Titular' => 'string',
        'Name' => 'string',
        'BirthName' => 'string',
        'BirthPlace' => 'string',
        'BirthDate' => 'datetime',
        'GenderMale' => 'integer',
        'Nationality' => 'string',
        'MotherName' => 'string',
        'TaxId' => 'string',
        'InsuranceId' => 'string',
        'IdentifiyNumber' => 'string',
        'PassportNumber' => 'string',
        'BankName' => 'string',
        'BankAccount' => 'string',
        'Phone' => 'string',
        'Sms' => 'string',
        'Email' => 'string',
        'PhonePrivate' => 'string',
        'SmsPrivate' => 'string',
        'EmailPrivate' => 'string',
        'Picture' => 'string',
        'DefaultDivision' => 'integer',
        'Leader' => 'integer',
        'LoginDisabled' => 'integer',
        'Username' => 'string',
        'Password' => 'string',
        'PINCode' => 'string',
        'SidSddl' => 'string',
        'SidSddlMachine' => 'string',
        'TwoFactorAuthSms' => 'string',
        'TwoFactorAuthEmail' => 'string',
        'EmailSignature' => 'string',
        'UILanguage' => 'string',
        'CallCardInfo' => 'string',
        'Setting' => 'string',
        'FabricExpense' => 'string',
        'Comment' => 'string',
        'Deleted' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Site' => 'nullable',
        'IsAdmin' => 'required',
        'IsEmployee' => 'required',
        'IsPermission' => 'required',
        'IsAgent' => 'required',
        'Code' => 'nullable|string|max:40',
        'Titular' => 'nullable|string|max:10',
        'Name' => 'required|string|max:80',
        'BirthName' => 'nullable|string|max:100',
        'BirthPlace' => 'nullable|string|max:100',
        'BirthDate' => 'nullable',
        'GenderMale' => 'required',
        'Nationality' => 'nullable|string|max:100',
        'MotherName' => 'nullable|string|max:100',
        'TaxId' => 'nullable|string|max:20',
        'InsuranceId' => 'nullable|string|max:20',
        'IdentifiyNumber' => 'nullable|string|max:20',
        'PassportNumber' => 'nullable|string|max:20',
        'BankName' => 'nullable|string|max:100',
        'BankAccount' => 'nullable|string|max:100',
        'Phone' => 'nullable|string|max:100',
        'Sms' => 'nullable|string|max:20',
        'Email' => 'nullable|string|max:100',
        'PhonePrivate' => 'nullable|string|max:100',
        'SmsPrivate' => 'nullable|string|max:20',
        'EmailPrivate' => 'nullable|string|max:100',
        'Picture' => 'nullable|string',
        'DefaultDivision' => 'nullable',
        'Leader' => 'nullable',
        'LoginDisabled' => 'required',
        'Username' => 'nullable|string|max:32',
        'Password' => 'nullable|string|max:32',
        'PINCode' => 'nullable|string|max:10',
        'SidSddl' => 'nullable|string|max:128',
        'SidSddlMachine' => 'nullable|string|max:128',
        'TwoFactorAuthSms' => 'nullable|string|max:20',
        'TwoFactorAuthEmail' => 'nullable|string|max:100',
        'EmailSignature' => 'nullable|string',
        'UILanguage' => 'nullable|string|max:10',
        'CallCardInfo' => 'nullable|string',
        'Setting' => 'nullable|string',
        'FabricExpense' => 'nullable|string|max:100',
        'Comment' => 'nullable|string',
        'Deleted' => 'required'
    ];

    public function CustomerAddress() {
        return $this->hasMany('App\Models\CustomerAddress', 'Agent');
    }

    public function Customer() {
        return $this->hasMany('App\Models\Customer', 'Agent');
    }

    public function CustomerBid() {
        return $this->hasMany('App\Models\CustomerBid', 'Agent');
    }

    public function CustomerBidContactEmployee() {
        return $this->hasMany('App\Models\CustomerBid', 'ContactEmployee');
    }

}
