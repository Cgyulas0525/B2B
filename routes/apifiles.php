<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('api/getUserWithEmployeeId', [ApiController::class, 'getUserWithEmployeeId']);
Route::get('api/getEmployee', [ApiController::class, 'getEmployee']);
Route::get('api/getCustomerContact', [ApiController::class, 'getCustomerContact']);
Route::get('api/passwordChange', [ApiController::class, 'passwordChange']);
Route::get('api/customerContactDDW', [ApiController::class, 'customerContactDDW']);
Route::get('api/customerAddressDDW', [ApiController::class, 'customerAddressDDW']);
Route::get('api/changeEnvironmentVariable', [ApiController::class, 'changeEnvironmentVariable']);
Route::get('api/logItemUserDDW', [ApiController::class, 'logItemUserDDW']);
Route::get('api/shoppingCartDetailQuantityUpdate', [ApiController::class, 'shoppingCartDetailQuantityUpdate']);
Route::get('api/shoppingCartUpdate', [ApiController::class, 'shoppingCartUpdate']);
Route::get('api/getShoppingCartDetail', [ApiController::class, 'getShoppingCartDetail']);
Route::get('api/getShoppingCart', [ApiController::class, 'getShoppingCart']);
Route::get('api/setShoppingCartDetail', [ApiController::class, 'setShoppingCartDetail']);
Route::get('api/insertShoppingCartDetail', [ApiController::class, 'insertShoppingCartDetail']);
Route::get('api/copyCustomerOrderDetailToShoppingCart', [ApiController::class, 'copyCustomerOrderDetailToShoppingCart']);
Route::get('api/copyCustomerOrderToShoppingCart', [ApiController::class, 'copyCustomerOrderToShoppingCart']);
Route::get('api/copyShoppingCartToShoppingCart', [ApiController::class, 'copyShoppingCartToShoppingCart']);
Route::get('api/excelImportDDW', [ApiController::class, 'excelImportDDW'])->name('excelImportDDW');
Route::get('api/oneExcelImportToShoppingCartDetail', [ApiController::class, 'oneExcelImportToShoppingCartDetail'])->name('oneExcelImportToShoppingCartDetail');
Route::get('api/excelImportTruncate', [ApiController::class, 'excelImportTruncate'])->name('excelImportTruncate');
Route::get('api/excelImportIdDelete', [ApiController::class, 'excelImportIdDelete'])->name('excelImportIdDelete');
Route::post('api/datatableSave', [ApiController::class, 'datatableSave'])->name('datatableSave');
Route::post('api/datatableLoad', [ApiController::class, 'datatableLoad'])->name('datatableLoad');
Route::get('api/makeCustomerContactFavoriteProduct', [ApiController::class, 'makeCustomerContactFavoriteProduct'])->name('makeCustomerContactFavoriteProduct');
Route::get('api/itemTraslation', [ApiController::class, 'itemTraslation'])->name('itemTraslation');


