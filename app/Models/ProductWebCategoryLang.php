<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductWebCategoryLang
 * @package App\Models
 * @version January 19, 2022, 9:53 am UTC
 *
 * @property integer $Lang
 * @property integer $ProductWebCategory
 * @property string $Name
 * @property string $WebName
 * @property string $WebDescription
 * @property string $WebKeywords
 * @property string $WebUrl
 * @property string $WebMetaDescription
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductWebCategoryLang extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productwebcategorylang';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Lang',
        'ProductWebCategory',
        'Name',
        'WebName',
        'WebDescription',
        'WebKeywords',
        'WebUrl',
        'WebMetaDescription',
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
        'Lang' => 'integer',
        'ProductWebCategory' => 'integer',
        'Name' => 'string',
        'WebName' => 'string',
        'WebDescription' => 'string',
        'WebKeywords' => 'string',
        'WebUrl' => 'string',
        'WebMetaDescription' => 'string',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Lang' => 'required|integer',
        'ProductWebCategory' => 'required',
        'Name' => 'nullable|string|max:100',
        'WebName' => 'nullable|string|max:100',
        'WebDescription' => 'nullable|string|max:65535',
        'WebKeywords' => 'nullable|string|max:100',
        'WebUrl' => 'nullable|string|max:100',
        'WebMetaDescription' => 'nullable|string|max:65535',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
