<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});
Route::prefix('/employee')->group(function() {
    Route::get('/', function() {
        return view('employee.index');
    });
    Route::get('/detail', function() {
        return view('employee.detail');
    });
});

Route::prefix('/mitra')->group(function() {
    // Supplier
    Route::get('/supplier', function() {
        return view('mitra.supplier.index');
    });
    Route::get('/supplier/detail', function() {
        return view('mitra.supplier.detail');
    });

    // Reseller
    Route::get('/reseller', function() {
        return view('mitra.reseller.index');
    });
    Route::get('/reseller/detail', function() {
        return view('mitra.reseller.detail');
    });

    // Toko
    Route::get('/store', function() {
        return view('mitra.toko.index');
    });
    Route::get('/store/detail', function() {
        return view('mitra.toko.detail');
    });
});

// Products
Route::get('/products', function() {
    return view('product.index');
});
Route::get('/products/detail', function() {
    return view('product.detail');
});
