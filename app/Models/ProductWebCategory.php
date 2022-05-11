<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductWebCategory
 * @package App\Models
 * @version January 19, 2022, 9:53 am UTC
 *
 * @property integer $Inactive
 * @property string $Name
 * @property integer $Parent
 * @property string $Picture
 * @property string $WebName
 * @property string $WebDescription
 * @property string $WebKeywords
 * @property string $WebUrl
 * @property string $WebMetaDescription
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductWebCategory extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productwebcategory';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Inactive',
        'Name',
        'Parent',
        'Picture',
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
        'Inactive' => 'integer',
        'Name' => 'string',
        'Parent' => 'integer',
        'Picture' => 'string',
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
        'Inactive' => 'required',
        'Name' => 'required|string|max:100',
        'Parent' => 'nullable',
        'Picture' => 'nullable|string',
        'WebName' => 'nullable|string|max:100',
        'WebDescription' => 'nullable|string',
        'WebKeywords' => 'nullable|string|max:100',
        'WebUrl' => 'nullable|string|max:100',
        'WebMetaDescription' => 'nullable|string',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
