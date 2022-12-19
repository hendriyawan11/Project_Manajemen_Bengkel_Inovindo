<?php

use GuzzleHttp\Middleware;
use App\Http\Controllers\Layout;
use App\Http\Controllers\Konsumen;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MechanicController;
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
    return view ('user.dashboard');
})->name('user.dashboard');


Route::get('/order_sparepart', function() {
    return view ('order_sparepart');
});
<<<<<<< HEAD
Route::get('/semua_sparepart', function() {
    return view ('semua_sparepart');
});
Route::get('/mekanik', function() {
    return view ('mekanik');
=======
Route::get('/jasa-servis', function() {
    return view ('jasa-servis');
});
Route::get('/semua-sparepart', function() {
    return view ('semua-sparepart');
>>>>>>> fdf896b2638788f68382c9237461fc12aaa42f3a
});
Route::get('/jasa-servis', function() {
    return view ('jasa-servis');
});
Route::get('/pembelian',[ShopsController::class, 'shops'])->name('views.pembelian');
Route::get('/input-pembelian',[ShopController::class, 'create']);
Route::post('/pembelian',[ShopsController::class, 'store']);



Route::get('/servis',[ServiceController::class, 'servis'])->name('views.servis');
Route::get('/input-servis',[ServiceController::class, 'create']);
Route::post('/servis',[ServiceController::class, 'store']);
Route::get('/servis-edit/{id}',[ServiceController::class, 'edit']);
Route::put('/servis/{id}',[ServiceController::class, 'update']);
Route::delete('servis/destroy/{id}', [ServiceController::class, 'destroy'])->name('servis.destroy');

Route::get('/mekanik',[MechanicController::class, 'mekanik'])->name('views.mekanik');
Route::get('/input-mekanik',[MechanicController::class, 'create']);
Route::post('/mekanik',[MechanicController::class, 'store']);
Route::get('/mekanik-edit/{id}',[MechanicController::class, 'edit']);
Route::put('/mekanik/{id}',[MechanicController::class, 'update']);
Route::delete('mekanik/destroy/{id}', [MechanicController::class, 'destroy'])->name('mekanik.destroy');



Route::get('/pembelian',[ShopsController::class, 'pembelian'])->name('views.pembelian');
Route::get('/input-pembelian',[ShopsController::class, 'create']);
Route::post('/pembelian',[ShopsController::class, 'store']);
Route::get('/pembelian-edit/{id}',[ShopsController::class, 'edit']);
Route::put('/pembelian/{id}',[ShopsController::class, 'update']);
Route::delete('pembelian/destroy/{id}', [ShopsController::class, 'destroy'])->name('pembelian.destroy');


Route::get('/report',[ReportController::class, 'laporan'])->name('views.report');
Route::post('/report',[ReportController::class, 'store']);
Route::put('/report/{id}',[ReportController::class, 'update']);
Route::delete('report/destroy/{id}', [ReportController::class, 'destroy'])->name('report.destroy');

Route::get('/input_servis', function() {
    return view ('input_servis');
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
