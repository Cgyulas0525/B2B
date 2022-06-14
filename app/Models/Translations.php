<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Translations
 * @package App\Models
 * @version June 14, 2022, 8:50 am CEST
 *
 * @property string $huname
 * @property string $language
 * @property string $name
 */
class Translations extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'translations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'huname',
        'language',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'huname' => 'string',
        'language' => 'string',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'huname' => 'required|string|max:500',
        'language' => 'required|string|max:2',
        'name' => 'required|string|max:500',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
