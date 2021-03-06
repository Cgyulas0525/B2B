<?php
namespace App\Classes;

use App\Models\ProductCustomerCode;
use Illuminate\Http\Request;
use myUser;
use Response;
use logClass;
use DB;

use productPriceClass;

use App\Models\CustomerOrderDetail;
use App\Models\ShoppingCart;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\ShoppingCartDetail;
use App\Models\Product;
use App\Models\ExcelImport;
use App\Models\Vat;

Class shoppingCartClass{

    public static function isOpenedShoppingCart($customerContact)
    {
        return ShoppingCart::where('CustomerContact', $customerContact)->where('Opened', 0)->get()->count();
    }

    public static function openedShoppingCart($customerContact)
    {
        return ShoppingCart::where('CustomerContact', $customerContact)->where('Opened', 0)->first();
    }

    public static function nextB2BVoucherNumber()
    {
        $bizonylatSzam = ShoppingCart::max('VoucherNumber');

        if (is_null($bizonylatSzam)) {
            return "B2B-" . Customer::where('Id', myUser::user()->customerId)->first()->Code . '-00001';
        }

        return "B2B-" . Customer::where('Id', myUser::user()->customerId)->first()->Code . '-'. str_pad(strval(intval(substr($bizonylatSzam, -5)) + 1),5,"0",STR_PAD_LEFT);
    }

    public static function customerPaymentMethod()
    {
        if ( !is_null(myUser::user()->CustomerAddress) ) {
            $paymentMethod = CustomerAddress::where('Id', myUser::user()->CustomerAddress)->first()->PaymentMethod;
            if ( is_null($paymentMethod) ) {
                $paymentMethod = Customer::where('Id', myUser::user()->customerId)->first()->PaymentMethod;
            }
        }

        return !empty($paymentMethod) ? $paymentMethod : NULL;
    }

    public static function getShoppingCartDetails($id)
    {
        return ShoppingCartDetail::where('ShoppingCart', $id)->get();
    }

    public function getSCDs(Request $request)
    {
        return ShoppingCartDetail::where('ShoppingCart', $request->get('id'))->get();
    }

    public static function oneRecorCopyCustomerOrderDetailToShoppingCart($id, $productId)
    {
        $customerOrderDetail = CustomerOrderDetail::find($id);

        if ( !empty($customerOrderDetail)) {

            $shoppingCart = shoppingCartClass::openedShoppingCart(myUser::user()->customercontact_id);
            $product = Product::find($productId);
            $shoppingCartDetail = ShoppingCartDetail::where('ShoppingCart', $shoppingCart->Id)->where('Product', $productId)->first();
            $productPrice = productPriceClass::getProductPrice($productId, $customerOrderDetail->Quantity, $product->QuantityUnit);
            $vat = Vat::find($product->Vat);

            $netValue = ($customerOrderDetail->Quantity * $productPrice);
            $vatValue = ($customerOrderDetail->Quantity * $productPrice) * (( 100 + $vat->Rate) / 100);

            if ( empty($shoppingCart)) {
                $scId = DB::table('ShoppingCart')
                    ->insertGetId([
                        'VoucherNumber' => shoppingCartClass::nextB2BVoucherNumber(),
                        'Customer' => myUser::user()->customerId,
                        'CustomerAddress' => myUser::user()->CustomerAddressId,
                        'CustomerContact' => myUser::user()->customercontact_id,
                        'VoucherDate' => \Carbon\Carbon::now(),
                        'PaymentMethod' => -1,
                        'Currency' => -1,
                        'CurrencyRate' => 1,
                        'TransportMode' => -2,
                        'NetValue' => $netValue,
                        'GrossValue' => $netValue + $vatValue,
                        'VatValue' => $vatValue,
                        'created_at' => \Carbon\Carbon::now()
                    ]);
                logClass::insertDeleteRecord( 1, "ShoppingCart", $scId);
            } else {
                $shoppingCart->NetValue = $shoppingCart->NetValue + $netValue;
                $shoppingCart->GrossValue = $shoppingCart->GrossValue + $netValue + $vatValue;
                $shoppingCart->VatValue = $shoppingCart->VatValue + $vatValue;
                $shoppingCart->save();
            }


            if ( empty($shoppingCartDetail) ) {
                $scdId = DB::table('ShoppingCartDetail')
                    ->insertGetId([
                        'ShoppingCart' => $shoppingCart->Id,
                        'Currency' => -1,
                        'CurrencyRate' => 1,
                        'Product' => $productId,
                        'Vat' => $product->Vat,
                        'QuantityUnit' => $product->QuantityUnit,
                        'Reverse' => 0,
                        'Quantity' => $customerOrderDetail->Quantity,
                        'UnitPrice' => $productPrice,
                        'NetValue' => $netValue,
                        'GrossValue' => $netValue + $vatValue,
                        'VatValue' => $vatValue,
                        'created_at' => \Carbon\Carbon::now()
                    ]);
                logClass::insertDeleteRecord( 1, "ShoppingCartDetail", $scdId);
            }

        }
    }

    public static function oneRecordCopyShoppingCartDetailToShoppingCart($id, $productId)
    {
        $shoppingCartDetailFrom = ShoppingCartDetail::find($id);

        if ( !empty($shoppingCartDetailFrom)) {

            $shoppingCart = shoppingCartClass::openedShoppingCart(myUser::user()->customercontact_id);
            $product = Product::find($productId);
            $shoppingCartDetail = ShoppingCartDetail::where('ShoppingCart', $shoppingCart->Id)->where('Product', $productId)->first();
            $productPrice = productPriceClass::getProductPrice($productId, $shoppingCartDetailFrom->Quantity, $product->QuantityUnit);
            $vat = Vat::find($product->Vat);

            $netValue = ($shoppingCartDetailFrom->Quantity * $productPrice);
            $vatValue = ($shoppingCartDetailFrom->Quantity * $productPrice) * (( 100 + $vat->Rate) / 100);

            if ( empty($shoppingCart)) {
                $scId = DB::table('ShoppingCart')
                    ->insertGetId([
                        'VoucherNumber' => shoppingCartClass::nextB2BVoucherNumber(),
                        'Customer' => myUser::user()->customerId,
                        'CustomerAddress' => myUser::user()->CustomerAddressId,
                        'CustomerContact' => myUser::user()->customercontact_id,
                        'VoucherDate' => \Carbon\Carbon::now(),
                        'PaymentMethod' => -1,
                        'Currency' => -1,
                        'CurrencyRate' => 1,
                        'TransportMode' => -2,
                        'NetValue' => $netValue,
                        'GrossValue' => $netValue + $vatValue,
                        'VatValue' => $vatValue,
                        'created_at' => \Carbon\Carbon::now()
                    ]);
                logClass::insertDeleteRecord( 1, "ShoppingCart", $scId);
            } else {
                $shoppingCart->NetValue = $shoppingCart->NetValue + $netValue;
                $shoppingCart->GrossValue = $shoppingCart->GrossValue + $netValue + $vatValue;
                $shoppingCart->VatValue = $shoppingCart->VatValue + $vatValue;
                $shoppingCart->save();
            }


            if ( empty($shoppingCartDetail) ) {
                $scdId = DB::table('ShoppingCartDetail')
                    ->insertGetId([
                        'ShoppingCart' => $shoppingCart->Id,
                        'Currency' => -1,
                        'CurrencyRate' => 1,
                        'Product' => $productId,
                        'Vat' => $product->Vat,
                        'QuantityUnit' => $product->QuantityUnit,
                        'Reverse' => 0,
                        'Quantity' => 0,
                        'UnitPrice' => $productPrice,
                        'NetValue' => $netValue,
                        'GrossValue' => $netValue + $vatValue,
                        'VatValue' => $vatValue,
                        'created_at' => \Carbon\Carbon::now()
                    ]);
                logClass::insertDeleteRecord( 1, "ShoppingCartDetail", $scdId);
            }
        }
    }

    public static function excelImportToShoppingCartDetail()
    {
        $excelImports = ExcelImport::where('user_id', myUser::user()->id)->all();
        foreach ($excelImports as $excelImport) {
            $product = Product::where('Code', $excelImport->Name)
                               ->where('Deleted', 0)
                               ->first();
            if (empty($product)) {
                $product = Product::where('Id', function($query) use($excelImport){
                    return $query->from('productcustomercode')
                                 ->select('Product')
                                 ->where('Code', $excelImport->Name)
                                 ->where('Customer', myUser::user()->customerId)
                                 ->first();
                })->first();
                if (!empty($product)) {
                    $quantity     = floatval($excelImport->Quantity);
                    $productPrice = productPriceClass::getProductPrice($product->Id, $quantity, $product->QuantityUnit);
                    $shoppingCart = shoppingCartClass::openedShoppingCart(myUser::user()->customercontact_id);
                    $vat          = Vat::find($product->Vat);

                    $netValue = ($quantity * $productPrice);
                    $vatValue = ($quantity * $productPrice) * (( 100 + $vat->Rate) / 100);

                    $scdId = DB::table('ShoppingCartDetail')
                        ->insertGetId([
                            'ShoppingCart' => $shoppingCart->Id,
                            'Currency' => -1,
                            'CurrencyRate' => 1,
                            'Product' => $product->Id,
                            'Vat' => $product->Vat,
                            'QuantityUnit' => $product->QuantityUnit,
                            'Reverse' => 0,
                            'Quantity' => $quantity,
                            'UnitPrice' => $productPrice,
                            'NetValue' => $netValue,
                            'GrossValue' => $netValue + $vatValue,
                            'VatValue' => $vatValue,
                            'created_at' => \Carbon\Carbon::now()
                        ]);
                    logClass::insertDeleteRecord( 1, "ShoppingCartDetail", $scdId);

                }
            }
        }
        return true;
    }

}

