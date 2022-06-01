<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CustomerContactFavoriteProduct
 * @package App\Models
 * @version May 24, 2022, 12:56 pm CEST
 *
 * @property integer $customercontact_id
 * @property integer $product_id
 */
class CustomerContactFavoriteProduct extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'customercontactfavoriteproduct';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'customercontact_id',
        'product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customercontact_id' => 'integer',
        'product_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customercontact_id' => 'required|integer',
        'product_id' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    protected $append = [
        'ProductName',
        'CustomerContactName'
    ];

    public function getProductNameAttribute() {
        $product = Product::where('Id', $this->product_id)->first();
        return !empty($this->product_id) ? !empty($product) ? $product->Name : ' ' : ' ';
    }

    public function getCustomerContactNameAttribute() {
        $customerContact = CustomerContact::where('Id', $this->customercontact_id)->first();
        return !empty($this->customercontact_id) ? !empty($customerContact) ? $customerContact->Name : ' ' : ' ';
    }

}
