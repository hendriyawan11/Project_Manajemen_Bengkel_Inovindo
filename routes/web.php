<?php
use App\Http\Controllers\Konsumen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MechanicController;


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
Route::get('/servis',[ServiceController::class, 'servis'])->name('views.servis');
Route::get('/mekanik',[MechanicController::class, 'mechanic'])->name('views.mekanik');
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
Route::get('/konsumen',[Konsumen::class, 'index'])->name('konsumen.index');

Route::get('/dashboard_cust', function() {
    return view ('konsumen.dashboard_cust');
});
Route::get('/data_jasa', function() {
    return view ('konsumen.data_jasa');
});
Route::get('/data_sparepart', function() {
    return view ('konsumen.data_sparepart');
});
Route::get('/story', function() {
    return view ('konsumen.story');
});
Route::get('/update_profile', function() {
    return view ('konsumen.update_profile');
});
