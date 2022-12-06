<?php

use GuzzleHttp\Middleware;
use App\Http\Controllers\Layout;
use App\Http\Controllers\Konsumen;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view ('user.dashboard'
    ,[
        "title" => "Order Sparepart"
    ]);
})->name('user.dashboard');


Route::get('/order_sparepart', function() {
    return view ('order_sparepart',[
        "title" => "Order Sparepart"
    ]);
});
Route::get('/order_jasa', function() {
    return view ('jasa_servis',[
        "title" => "Order Jasa Service"
    ]);
});
Route::get('/pembelian', function() {
    return view ('pembelian',[
        "title" => "Pembelian"
    ]);
});
Route::get('/semua_sparepart', function() {
    return view ('semua_sparepart',[
        "title" => "Semua Sparepart"
    ]);
});
Route::get('/servis', function() {
    return view ('servis',[
        "title" => "Service"
    ]);
});
Route::get('/mekanik', function() {
    return view ('mekanik',[
        "title" => "Mekanik"
    ]);
});
Route::get('/laporan', function() {
    return view ('laporan',[
        "title" => "Data Laporan"
    ]);
});
Route::get('/input_servis', function() {
    return view ('input_servis',[
        "title" => "Input Service"
    ]);
});
Route::get('/input_mekanik', function() {
    return view ('input_mekanik',[
        "title" => "Input Mekanik"
    ]);
});
Route::get('/input_pembelian', function() {
    return view ('input_pembelian',[
        "title" => "Input Pembelian"
    ]);
});
Route::get('/checkout', function() {
    return view ('checkout',[
        "title" => "Pembayaran"
    ]);
});
Route::get('/invoice', function() {
    return view ('invoice',[
        "title" => "Laporan"
    ]);
});
Route::get('/invoice_print', function() {
    return view ('invoice_print',[
        "title" => "Print Laporan"
    ]);
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
    return view ('konsumen.dashboard_cust',[
        "title" => "Dashboard Konsumen"
    ]);
});
Route::get('/data_jasa', function() {
    return view ('konsumen.data_jasa',[
        "title" => "Data Jasa Service"
    ]);
});
Route::get('/data_sparepart', function() {
    return view ('konsumen.data_sparepart',[
        "title" => "Data Sparepart"
    ]);
});
Route::get('/story', function() {
    return view ('konsumen.story',[
        "title" => "Stories"
    ]);
});
Route::get('/update_profile', function() {
    return view ('konsumen.update_profile',[
        "title" => "Update Profile"
    ]);
});