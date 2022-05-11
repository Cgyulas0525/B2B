<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dictionaries
 * @package App\Models
 * @version February 16, 2022, 10:22 am CET
 *
 * @property integer $tipus
 * @property string $nev
 * @property string $leiras
 */
class Dictionaries extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'dictionaries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipus',
        'nev',
        'leiras'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipus' => 'integer',
        'nev' => 'string',
        'leiras' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipus' => 'required|integer',
        'nev' => 'required|string|max:191',
        'leiras' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
