<?php

use App\Http\Controllers\AntriController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\PointOfSalesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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
    return view('frontend.index', [
        'title' => "Antrein - Selamat Datang!",
    ]);
})->name('/');

Route::get('/paket-layanan', function () {
    return view('frontend.paket-layanan', [
        'title' => "Antrein - Paket Layanan",
    ]);
})->name('paket-layanan');

Route::get('/tentang', function () {
    return view('frontend.tentang', [
        'title' => "Antrein - Tentang",
    ]);
})->name('tentang');

Route::get('/antri/{perusahaan}',[AntriController::class, 'index'] )->name('antri');
Route::post('/antri/ambil-antrian/{perusahaanID}/{userID}',[AntriController::class, 'ambilAntrian'] )->name('ambil-antrian');

Route::get('/login', function () {
    return redirect()->route('login');
})->name('login');


Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

// Auth Middleware
Route::middleware(['auth'])->group(function () {
    Route::prefix('backend')->name('backend.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/main-menu', [DashboardController::class, 'mainMenu'])->name('main-menu');
        
        // USER
        Route::resource('/user', UserController::class);
        
        // Product
        Route::resource('/product', ProductController::class);
        
        // POS
        Route::resource('pos', PointOfSalesController::class);
        Route::post('/add-item', [CartController::class, 'addItem'])->name('add-item');
        Route::post('/get-product', [CartController::class, 'getProduct'])->name('get-product');
    });
});
