<?php

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

use App\Http\Controllers\Admin\ReportInController;
use App\Http\Controllers\Admin\ReportOutController;
use App\ReportIn;
use App\ReportOut;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/product', 'ProductController@index')
    ->name('product');

Route::get('/mitra', 'MitraController@index')
    ->name('mitra');

Route::get('/about', 'AboutController@index')
    ->name('about');

Route::get('/detail/{id}', 'DetailController@index')
    ->name('detail');

Route::post('/checkout/{id}', 'CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth','verified']);

Route::get('/checkout/{id}', 'CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}', 'CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth','verified']);

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('product', 'ProductController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('mitra', 'MitraController');
        Route::resource('about', 'AboutController');
        Route::resource('user', 'UserController');
        Route::resource('transactionin', 'TransactionInController');
        Route::resource('transactionout', 'TransactionOutController');
        Route::resource('reportin', 'ReportInController');

        Route::resource('reportout', 'ReportOutController');
    });
    Route::post('/date', [ReportInController::class, 'date']);
    Route::post('/tgl', [ReportOutController::class, 'tgl']);
Auth::routes(['verify' => true]);

