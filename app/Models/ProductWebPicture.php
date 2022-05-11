<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductWebPicture
 * @package App\Models
 * @version January 19, 2022, 9:53 am UTC
 *
 * @property integer $Product
 * @property integer $Prime
 * @property string $Caption
 * @property string $TitleText
 * @property string $AltText
 * @property integer $Watermark
 * @property string $Data
 * @property integer $RowOrder
 * @property string $MetaInfo
 * @property string|\Carbon\Carbon $RowCreate
 * @property string|\Carbon\Carbon $RowModify
 */
class ProductWebPicture extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'productwebpicture';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'Prime',
        'Caption',
        'TitleText',
        'AltText',
        'Watermark',
        'Data',
        'RowOrder',
        'MetaInfo',
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
        'Product' => 'integer',
        'Prime' => 'integer',
        'Caption' => 'string',
        'TitleText' => 'string',
        'AltText' => 'string',
        'Watermark' => 'integer',
        'Data' => 'string',
        'RowOrder' => 'integer',
        'MetaInfo' => 'string',
        'RowCreate' => 'datetime',
        'RowModify' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product' => 'required',
        'Prime' => 'required',
        'Caption' => 'required|string|max:100',
        'TitleText' => 'nullable|string|max:100',
        'AltText' => 'nullable|string|max:100',
        'Watermark' => 'required',
        'Data' => 'nullable|string|max:65535',
        'RowOrder' => 'required|integer',
        'MetaInfo' => 'nullable|string|max:100',
        'RowCreate' => 'nullable',
        'RowModify' => 'nullable'
    ];


}
