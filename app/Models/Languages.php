<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Languages
 * @package App\Models
 * @version June 14, 2022, 8:50 am CEST
 *
 * @property string $shortname
 * @property string $name
 */
class Languages extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'languages';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'shortname',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'shortname' => 'string',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'shortname' => 'required|string|max:2',
        'name' => 'required|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    protected $append = [
        'DetailNumber'
    ];

    public function getDetailNumberAttribute() {
        return Translations::where('language', $this->shortname)->get()->count();
    }


}
