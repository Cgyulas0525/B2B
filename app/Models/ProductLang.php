<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductLang
 * @package App\Models
 * @version January 19, 2022, 9:52 am UTC
 *
 * @property integer $Lang
 * @property integer $Product
 * @property string $Name
 * @property string $Comment
 * @property string $WebName
 * @property string $WebDescription
 * @property string $WebUrl
 * @property string $WebMetaDescription
 * @property string $WebKeywords
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductLang extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productlang';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Lang',
        'Product',
        'Name',
        'Comment',
        'WebName',
        'WebDescription',
        'WebUrl',
        'WebMetaDescription',
        'WebKeywords',
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
        'Product' => 'integer',
        'Name' => 'string',
        'Comment' => 'string',
        'WebName' => 'string',
        'WebDescription' => 'string',
        'WebUrl' => 'string',
        'WebMetaDescription' => 'string',
        'WebKeywords' => 'string',
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
        'Product' => 'required',
        'Name' => 'required|string|max:100',
        'Comment' => 'nullable|string|max:65535',
        'WebName' => 'nullable|string|max:100',
        'WebDescription' => 'nullable|string|max:65535',
        'WebUrl' => 'nullable|string|max:100',
        'WebMetaDescription' => 'nullable|string|max:65535',
        'WebKeywords' => 'nullable|string|max:100',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
