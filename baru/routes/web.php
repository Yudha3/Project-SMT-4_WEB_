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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/mitra', function () {
    return view('mitra');
});

Route::get('/reseller', function () {
    return view('reseller');
});

Route::get('/transaksimasuk', function () {
    return view('transaksimasuk');
});

Route::get('/transaksikeluar', function () {
    return view('transaksikeluar');
});

Route::get('/preorder', function () {
    return view('preorder');
});

Route::get('/laporanmasuk', function () {
    return view('laporanmasuk');
});

Route::get('/laporankeluar', function () {
    return view('laporankeluar');
});