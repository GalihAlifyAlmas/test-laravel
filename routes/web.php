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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index_front'])->name('home');

Auth::routes();

Route::get('/home/backend', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// ROUTE PRODUK
Route::get('/admin/produk', [App\Http\Controllers\HomeController::class, 'indexProduk'])->name('indexProduk');
Route::get('/add/produk', [App\Http\Controllers\HomeController::class, 'tambahDataProduk'])->name('adddataproduk');
Route::get('/produk/hapus/{id}',[App\Http\Controllers\HomeController::class, 'hapusDataProduk']);
Route::post('/add/post/produk', [App\Http\Controllers\HomeController::class, 'prosestambahproduk'])->name('addproduks');
Route::get('/produk/edit/{id}',[App\Http\Controllers\HomeController::class, 'editDataProducts']);
Route::post('/produk/proses/edit/{id}',[App\Http\Controllers\HomeController::class, 'updateDataProduct']);






