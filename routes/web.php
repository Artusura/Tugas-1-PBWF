<?php

use illuminate\Support\Facedes\Routes;
use App\Http\Controllers\produk;
use App\Http\Controllers\pelangganController;

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

Route::get('/produk', [produk::class, 'index']);
Route::get('/show', [produk::class, 'show']);

Route::get('/halaman',function(){
    $title = 'PT Victory Chingluh Indonesia';
    $konten = 'Laporan Quality Control PT. Victory Chingluh Indonesia';
    return view('konten.halaman', compact('title','konten'));
});

Route::get('/pelanggan', [pelangganController::class, 'index']);