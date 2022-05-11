<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Leed
 * @package App\Models
 * @version January 19, 2022, 9:46 am UTC
 *
 * @property string $NameDisplay
 * @property integer $LeadState
 * @property string $LeadStateComment
 * @property string|\Carbon\Carbon $CreateDateTime
 * @property integer $Owner
 * @property integer $IsSupplier
 * @property integer $IsCompany
 * @property string $Name
 * @property integer $Theeing
 * @property string $CompanyName
 * @property integer $CustomerCategory
 * @property integer $SupplierCategory
 * @property integer $LeadCategory
 * @property integer $LeadSource
 * @property string $LeadSourceComment
 * @property integer $LeadTarget
 * @property string $LeadTargetComment
 * @property string $TargetDate
 * @property string $Responsibility
 * @property string $Division
 * @property integer $Agent
 * @property integer $AgentStrict
 * @property string $Activities
 * @property string $YearIncome
 * @property string $EmployeeCount
 * @property string $Country
 * @property string $Region
 * @property string $Zip
 * @property string $City
 * @property string $Street
 * @property string $HouseNumber
 * @property string $Phone
 * @property string $Fax
 * @property string $Sms
 * @property string $Email
 * @property string $Url
 * @property string $Skype
 * @property string $FacebookUrl
 * @property string $Msn
 * @property string $Picture
 * @property integer $RobinsonMode
 * @property integer $AssocCustomer
 * @property string $StrExA
 * @property string $StrExB
 * @property string $StrExC
 * @property string $StrExD
 * @property string|\Carbon\Carbon $DateExA
 * @property string|\Carbon\Carbon $DateExB
 * @property number $NumExA
 * @property number $NumExB
 * @property number $NumExC
 * @property integer $BoolExA
 * @property integer $BoolExB
 * @property integer $LookupExA
 * @property integer $LookupExB
 * @property integer $LookupExC
 * @property integer $LookupExD
 * @property integer $Closed
 * @property string $Comment
 * @property integer $Deleted
 * @property string|\Carbon\Carbon $RowVersion
 * @property integer $OwnerDivision
 * @property integer $PriceCategory
 * @property string $MemoExA
 * @property string $MemoExB
 * @property string|\Carbon\Carbon $DateExC
 * @property string|\Carbon\Carbon $DateExD
 * @property number $NumExD
 * @property integer $BoolExC
 * @property integer $BoolExD
 * @property string $MemoExC
 * @property string $MemoExD
 * @property string $MailCountry
 * @property string $MailRegion
 * @property string $MailName
 * @property integer $MailOriginalName
 * @property string $MailZip
 * @property string $MailCity
 * @property string $MailStreet
 * @property string $MailHouseNumber
 * @property string $TradeRegNumber
 * @property string $TaxNumber
 * @property string $EUTaxNumber
 * @property string $GroupTaxNumber
 * @property string $BankAccount
 * @property string $BankAccountIBAN
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 * @property string $Township
 * @property string $MailTownship
 * @property string $GLN
 */
class Leed extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'leed';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'NameDisplay',
        'LeadState',
        'LeadStateComment',
        'CreateDateTime',
        'Owner',
        'IsSupplier',
        'IsCompany',
        'Name',
        'Theeing',
        'CompanyName',
        'CustomerCategory',
        'SupplierCategory',
        'LeadCategory',
        'LeadSource',
        'LeadSourceComment',
        'LeadTarget',
        'LeadTargetComment',
        'TargetDate',
        'Responsibility',
        'Division',
        'Agent',
        'AgentStrict',
        'Activities',
        'YearIncome',
        'EmployeeCount',
        'Country',
        'Region',
        'Zip',
        'City',
        'Street',
        'HouseNumber',
        'Phone',
        'Fax',
        'Sms',
        'Email',
        'Url',
        'Skype',
        'FacebookUrl',
        'Msn',
        'Picture',
        'RobinsonMode',
        'AssocCustomer',
        'StrExA',
        'StrExB',
        'StrExC',
        'StrExD',
        'DateExA',
        'DateExB',
        'NumExA',
        'NumExB',
        'NumExC',
        'BoolExA',
        'BoolExB',
        'LookupExA',
        'LookupExB',
        'LookupExC',
        'LookupExD',
        'Closed',
        'Comment',
        'Deleted',
        'RowVersion',
        'OwnerDivision',
        'PriceCategory',
        'MemoExA',
        'MemoExB',
        'DateExC',
        'DateExD',
        'NumExD',
        'BoolExC',
        'BoolExD',
        'MemoExC',
        'MemoExD',
        'MailCountry',
        'MailRegion',
        'MailName',
        'MailOriginalName',
        'MailZip',
        'MailCity',
        'MailStreet',
        'MailHouseNumber',
        'TradeRegNumber',
        'TaxNumber',
        'EUTaxNumber',
        'GroupTaxNumber',
        'BankAccount',
        'BankAccountIBAN',
        'RowCreate',
        'RowModify',
        'Township',
        'MailTownship',
        'GLN'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'NameDisplay' => 'string',
        'LeadState' => 'integer',
        'LeadStateComment' => 'string',
        'CreateDateTime' => 'datetime',
        'Owner' => 'integer',
        'IsSupplier' => 'integer',
        'IsCompany' => 'integer',
        'Name' => 'string',
        'Theeing' => 'integer',
        'CompanyName' => 'string',
        'CustomerCategory' => 'integer',
        'SupplierCategory' => 'integer',
        'LeadCategory' => 'integer',
        'LeadSource' => 'integer',
        'LeadSourceComment' => 'string',
        'LeadTarget' => 'integer',
        'LeadTargetComment' => 'string',
        'TargetDate' => 'string',
        'Responsibility' => 'string',
        'Division' => 'string',
        'Agent' => 'integer',
        'AgentStrict' => 'integer',
        'Activities' => 'string',
        'YearIncome' => 'string',
        'EmployeeCount' => 'string',
        'Country' => 'string',
        'Region' => 'string',
        'Zip' => 'string',
        'City' => 'string',
        'Street' => 'string',
        'HouseNumber' => 'string',
        'Phone' => 'string',
        'Fax' => 'string',
        'Sms' => 'string',
        'Email' => 'string',
        'Url' => 'string',
        'Skype' => 'string',
        'FacebookUrl' => 'string',
        'Msn' => 'string',
        'Picture' => 'string',
        'RobinsonMode' => 'integer',
        'AssocCustomer' => 'integer',
        'StrExA' => 'string',
        'StrExB' => 'string',
        'StrExC' => 'string',
        'StrExD' => 'string',
        'DateExA' => 'datetime',
        'DateExB' => 'datetime',
        'NumExA' => 'decimal:4',
        'NumExB' => 'decimal:4',
        'NumExC' => 'decimal:4',
        'BoolExA' => 'integer',
        'BoolExB' => 'integer',
        'LookupExA' => 'integer',
        'LookupExB' => 'integer',
        'LookupExC' => 'integer',
        'LookupExD' => 'integer',
        'Closed' => 'integer',
        'Comment' => 'string',
        'Deleted' => 'integer',
        'RowVersion' => 'datetime',
        'OwnerDivision' => 'integer',
        'PriceCategory' => 'integer',
        'MemoExA' => 'string',
        'MemoExB' => 'string',
        'DateExC' => 'datetime',
        'DateExD' => 'datetime',
        'NumExD' => 'decimal:4',
        'BoolExC' => 'integer',
        'BoolExD' => 'integer',
        'MemoExC' => 'string',
        'MemoExD' => 'string',
        'MailCountry' => 'string',
        'MailRegion' => 'string',
        'MailName' => 'string',
        'MailOriginalName' => 'integer',
        'MailZip' => 'string',
        'MailCity' => 'string',
        'MailStreet' => 'string',
        'MailHouseNumber' => 'string',
        'TradeRegNumber' => 'string',
        'TaxNumber' => 'string',
        'EUTaxNumber' => 'string',
        'GroupTaxNumber' => 'string',
        'BankAccount' => 'string',
        'BankAccountIBAN' => 'string',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime',
        'Township' => 'string',
        'MailTownship' => 'string',
        'GLN' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NameDisplay' => 'required|string|max:100',
        'LeadState' => 'nullable',
        'LeadStateComment' => 'nullable|string|max:65535',
        'CreateDateTime' => 'nullable',
        'Owner' => 'nullable',
        'IsSupplier' => 'required',
        'IsCompany' => 'required',
        'Name' => 'nullable|string|max:100',
        'Theeing' => 'required',
        'CompanyName' => 'nullable|string|max:100',
        'CustomerCategory' => 'nullable',
        'SupplierCategory' => 'nullable',
        'LeadCategory' => 'nullable',
        'LeadSource' => 'nullable',
        'LeadSourceComment' => 'nullable|string|max:65535',
        'LeadTarget' => 'nullable',
        'LeadTargetComment' => 'nullable|string|max:65535',
        'TargetDate' => 'nullable|string|max:100',
        'Responsibility' => 'nullable|string|max:100',
        'Division' => 'nullable|string|max:100',
        'Agent' => 'nullable',
        'AgentStrict' => 'required',
        'Activities' => 'nullable|string|max:100',
        'YearIncome' => 'nullable|string|max:100',
        'EmployeeCount' => 'nullable|string|max:100',
        'Country' => 'nullable|string|max:100',
        'Region' => 'nullable|string|max:100',
        'Zip' => 'nullable|string|max:10',
        'City' => 'nullable|string|max:100',
        'Street' => 'nullable|string|max:100',
        'HouseNumber' => 'nullable|string|max:20',
        'Phone' => 'nullable|string|max:20',
        'Fax' => 'nullable|string|max:20',
        'Sms' => 'nullable|string|max:20',
        'Email' => 'nullable|string|max:100',
        'Url' => 'nullable|string|max:100',
        'Skype' => 'nullable|string|max:100',
        'FacebookUrl' => 'nullable|string|max:100',
        'Msn' => 'nullable|string|max:100',
        'Picture' => 'nullable|string|max:65535',
        'RobinsonMode' => 'required',
        'AssocCustomer' => 'nullable',
        'StrExA' => 'nullable|string|max:100',
        'StrExB' => 'nullable|string|max:100',
        'StrExC' => 'nullable|string|max:100',
        'StrExD' => 'nullable|string|max:100',
        'DateExA' => 'nullable',
        'DateExB' => 'nullable',
        'NumExA' => 'nullable|numeric',
        'NumExB' => 'nullable|numeric',
        'NumExC' => 'nullable|numeric',
        'BoolExA' => 'required',
        'BoolExB' => 'required',
        'LookupExA' => 'nullable',
        'LookupExB' => 'nullable',
        'LookupExC' => 'nullable',
        'LookupExD' => 'nullable',
        'Closed' => 'required',
        'Comment' => 'nullable|string|max:65535',
        'Deleted' => 'required',
        'RowVersion' => 'nullable',
        'OwnerDivision' => 'nullable',
        'PriceCategory' => 'nullable',
        'MemoExA' => 'nullable|string|max:65535',
        'MemoExB' => 'nullable|string|max:65535',
        'DateExC' => 'nullable',
        'DateExD' => 'nullable',
        'NumExD' => 'nullable|numeric',
        'BoolExC' => 'required',
        'BoolExD' => 'required',
        'MemoExC' => 'nullable|string|max:65535',
        'MemoExD' => 'nullable|string|max:65535',
        'MailCountry' => 'nullable|string|max:100',
        'MailRegion' => 'nullable|string|max:100',
        'MailName' => 'nullable|string|max:100',
        'MailOriginalName' => 'required',
        'MailZip' => 'nullable|string|max:10',
        'MailCity' => 'nullable|string|max:100',
        'MailStreet' => 'nullable|string|max:100',
        'MailHouseNumber' => 'nullable|string|max:20',
        'TradeRegNumber' => 'nullable|string|max:20',
        'TaxNumber' => 'nullable|string|max:20',
        'EUTaxNumber' => 'nullable|string|max:20',
        'GroupTaxNumber' => 'nullable|string|max:20',
        'BankAccount' => 'nullable|string|max:100',
        'BankAccountIBAN' => 'nullable|string|max:100',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable',
        'Township' => 'nullable|string|max:100',
        'MailTownship' => 'nullable|string|max:100',
        'GLN' => 'nullable|string|max:40'
    ];

    public function CustomerBid() {
        return $this->hasMany('App\Models\CustomerBid', 'LeadId');
    }

}
