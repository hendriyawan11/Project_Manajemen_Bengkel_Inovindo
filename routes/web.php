<?php

use GuzzleHttp\Middleware;
use App\Http\Controllers\Layout;
use App\Http\Controllers\Konsumen;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
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

Route::get('/dashboard', function() {
    return view ('user.dashboard');
})->name('user.dashboard');


Route::get('/order_sparepart', function() {
    return view ('order_sparepart');
});
Route::get('/jasa-servis', function() {
    return view ('jasa-servis');
});
Route::get('/pembelian', function() {
    return view ('pembelian');
});
Route::get('/semua_sparepart', function() {
    return view ('semua_sparepart');
});
Route::get('/mekanik', function() {
    return view ('mekanik');
});

Route::get('/servis',[ServiceController::class, 'servis'])->name('views.servis');
Route::get('/input-servis',[ServiceController::class, 'create']);
Route::post('/servis',[ServiceController::class, 'store']);


Route::get('/mekanik',[MechanicController::class, 'mechanic'])->name('views.mekanik');
Route::get('/input-mekanik',[MechanicController::class, 'create']);
Route::post('/mekanik',[MechanicController::class, 'store']);



Route::get('/laporan', function() {
    return view ('laporan');
});
Route::get('/input_servis', function() {
    return view ('input_servis');
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

Route::get('/logincoba', [AuthController::class, 'proseslogin'])->name('login');
Route::post('/login', [AuthController::class, 'authentication'])->name('loginauth');

// Route::get('/register', function() {
//     return view ('register',[
//         "title" => "Register"
//     ]);
// });
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
