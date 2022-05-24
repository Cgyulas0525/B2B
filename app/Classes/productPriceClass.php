<?php

namespace App\Classes;

use DB;
use myUser;

Class productPriceClass{

    public static $priceArray = [];
    public static $productPrice = 0;
    public static $customer;

    public static function getProductPrice($product, $quantity, $quantityUnit) {

        self::$customer = isset(myUser::user()->customerId) ? myUser::user()->customerId : 2;

        self::getLastProductPrice($product, $quantityUnit);
        self::getContractPrice($product, $quantity);
        self::getOfferPrice($product, $quantity, $quantityUnit);

        return self::priceBack();
    }

    public static function getLastProductPrice($product, $quantityUnit) {
        $customer = self::$customer;
        $productPrice = DB::table('ProductPrice')
            ->where('PriceCategory', function ($query) use ($customer) {
                return $query->from('Customer')->select('PriceCategory')->where('Id', $customer)->first();
            })
            ->where('Product', $product)
            ->where('Currency', -1)
            ->where('QuantityUnit', $quantityUnit)
            ->where('ValidFrom', '<=', \Carbon\Carbon::now())
            ->orderBy('ValidFrom', 'desc')
            ->first();

        if (!is_null($productPrice)) {
            $util = ['melyik' => 'lastProductPrice', 'ar' => floatval($productPrice->Price), 'offerOverride' => 0];
            array_push(self::$priceArray, $util);
        }
    }

    public static function getContractPrice($product, $quantityUnit) {
        $customer = self::$customer;
        $contractPrice = DB::table('CustomerContract as t1')
            ->join('CustomerContractDetail as t2', 't2.CustomerContract', '=', 't1.Id')
            ->select('t1.*', 't2.Product', 't2.Price', 't2.Currency', 't2.ValidFrom as vf', 't2.ValidTo as vt')
            ->where('t2.ValidFrom', '<=', \Carbon\Carbon::now())
            ->where(function($query) {
                $query->where('t2.ValidTo','>=', \Carbon\Carbon::now())
                    ->orWhereNull('t2.ValidTo');
            })
            ->where('t1.Customer', $customer)
            ->where('t2.Product', $product)
            ->where('t2.QuantityUnit', $quantityUnit)
            ->get();

        if (count($contractPrice) > 0) {
            for ($i = 0; $i < count($contractPrice); $i++) {
                $util = ['melyik' => 'contractPrice', 'ar' => floatval($contractPrice[$i]->Price), 'offerOverride' => $contractPrice[$i]->OfferOverride];
                array_push(self::$priceArray, $util);
            }
        }
    }

    public static function getOfferPrice($product, $quantity, $quantityUnit) {
        $id = self::$customer;
        $offerPrice = DB::table('CustomerOfferDetail as t1')
            ->join('CustomerOffer as t2', 't2.Id', '=', 't1.CustomerOffer')
            ->join('CustomerOfferCustomer as t3', 't3.CustomerOffer', '=', 't2.Id')
            ->select('t1.*')
            ->where('t3.Customer', $id)
            ->where('t2.ValidFrom', '<=', \Carbon\Carbon::now())
            ->where('t2.ValidTo', '>=', \Carbon\Carbon::now())
            ->where('t3.Forbid', 0)
            ->where('t1.QuantityUnit', $quantityUnit)
            ->where('t1.Product', $product)
            ->orWhere('t3.CustomerCategory', function ($query) use ($id) {
                return $query->from('Customer')->select('CustomerCategory')->where('Id', $id)->first();
            })
            ->where('t1.QuantityMinimum', '<=', $quantity)
            ->orWhereNull('t1.QuantityMinimum')
            ->orderByDesc('t1.QuantityMinimum')
            ->orderByDesc('t1.QuantityMaximum')
            ->first();

        if (!is_null($offerPrice)) {
            $util = ['melyik' => 'offerPrice', 'ar' => floatval($offerPrice->SalesPrice), 'offerOverride' => 0];
            array_push(self::$priceArray, $util);
        }
    }

    public static function priceBack()
    {
        $key = array_search('contractPrice', array_column(self::$priceArray, 'melyik'));
        if ($key) {
            $price = self::$priceArray[$key]['ar'];
            $offerOverride = self::$priceArray[$key]['offerOverride'];
            if ($offerOverride == 1) {
                $opKey = array_search('offerPrice', array_column(self::$priceArray, 'melyik'));
                if ($opKey) {
                    $opPrice = self::$priceArray[$opKey]['ar'];
                    if ($opPrice < $price ) {
                        $price = $opPrice;
                    }
                }
            }
            return $price;
        } else {
            if (count(self::$priceArray) > 0) {
                $price = self::$priceArray[0]['ar'];
                for ($i = 1; $i < count(self::$priceArray); $i++) {
                    if ($price > self::$priceArray[$i]['ar']) {
                        $price = self::$priceArray[$i]['ar'];
                    }
                }
                return $price;
            }
        }
    }

}
