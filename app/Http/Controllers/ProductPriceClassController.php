<?php

namespace App\Http\Controllers;

use App\Models\ProductPrice;
use Illuminate\Http\Request;
use Flash;
use Response;
use myUser;
use App\Classes\adminClass;
use DB;
use DataTables;

class ProductPriceClassController extends Controller
{

    /**
     * Display a listing of the product price.
     *
     * @param integer $id
     *
     * @return Response
     */
    public static function getProductPrice($id)
    {
        $productPrice = ProductPrice::where('Product', $id)
            ->where('Pricecategory', 2)
            ->where('Currency', -1)
            ->orderBy('ValidFrom', 'desc')
            ->first();

        return $productPrice;
    }

}
