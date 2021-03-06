<?php

use App\Http\Controllers\Mobile\CartController;
use App\Http\Controllers\Mobile\GalleryController;
use App\Http\Controllers\Mobile\ProductsController;
use App\Http\Controllers\Mobile\TransactionDetailController;
use App\Http\Controllers\Mobile\TransactionOutController;
use App\Http\Controllers\Mobile\UsersController;
use App\Http\Controllers\Mobile\PaymentController;
use App\Http\Controllers\Mobile\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['prefix' => 'v1'], function(){
// });

Route::post('/login', [UsersController::class, 'login']);
Route::post('/register', [UsersController::class, 'register']);
Route::get('/logout', [UsersController::class, 'logout'])->middleware('auth:api');
Route::post('/user/check/password', [UsersController::class, 'checkPassword']);
Route::post('/user/change/password', [UsersController::class, 'changePassword']);
Route::get('/user/{id}', [UsersController::class, 'getData']);
Route::post('/user/edit', [UsersController::class, 'editProfile']);
Route::post('/user/edit/photo', [UsersController::class, 'editPhoto']);

Route::get('/products', [ProductsController::class, 'getAllProduct']);
Route::get('/products/bestseller', [ProductsController::class, 'getBestSeller']);
Route::get('/products/bestseller/all', [ProductsController::class, 'getAllBestSeller']);
Route::get('/product/show/{id}', [ProductsController::class, 'getDetailProduct'])->name('getProductDetail');
Route::get('/product/images/{id}', [GalleryController::class, 'getImage']);

Route::get('/carts/user/{id}', [CartController::class, 'getCarts']);
Route::delete('/carts/{id}', [CartController::class, 'destroy']);
Route::post('/add/cart', [CartController::class, 'AddToCart']);

Route::post('/order', [TransactionOutController::class, 'order']);
Route::get('/orders/user/{id}', [TransactionOutController::class, 'myorder']);
Route::get('/order/{id}', [TransactionOutController::class, 'orderInfo']);
Route::get('/order/{id}/detail', [TransactionDetailController::class, 'detailOrder']);
Route::post('/order/confirm/{id}', [TransactionOutController::class, 'confirmOrder']);

Route::post('/order/ongkir', [TransactionOutController::class, 'cekOngkir']);

Route::get('/reviews', [ReviewController::class, 'getReviews']);
Route::post('/review/create', [ReviewController::class, 'createReview']);

Route::post('/payment/upload', [PaymentController::class, 'uploadPayment']);

Route::get('/api', function(){
    return "Testing";
});
