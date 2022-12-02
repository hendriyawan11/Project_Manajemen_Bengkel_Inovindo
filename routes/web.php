<?php

use App\Http\Controllers\Layout;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Konsumen;
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

Route::get('/', function() {
    return view ('dashboard');
});
Route::get('/order_sparepart', function() {
    return view ('order_sparepart');
});
Route::get('/order_jasa', function() {
    return view ('jasa_servis');
});
Route::get('/pembelian', function() {
    return view ('pembelian');
});
Route::get('/semua_sparepart', function() {
    return view ('semua_sparepart');
});
Route::get('/servis', function() {
    return view ('servis');
});
Route::get('/mekanik', function() {
    return view ('mekanik');
});
Route::get('/laporan', function() {
    return view ('laporan');
});
Route::get('/input_servis', function() {
    return view ('input_servis');
});
Route::get('/input_mekanik', function() {
    return view ('input_mekanik');
});
Route::get('/input_pembelian', function() {
    return view ('input_pembelian');
});
Route::get('/checkout', function() {
    return view ('checkout');
});
Route::get('/invoice', function() {
    return view ('invoice');
});
Route::get('/invoice_print', function() {
    return view ('invoice_print');
});
Route::get('/login', function() {
    return view ('login');
});
Route::get('/register', function() {
    return view ('register');
});
Route::get('/konsumen', function() {
    return view ('konsumen');
});