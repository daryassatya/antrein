<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\PointOfSalesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/antri/{perusahaan}', )->name('tentang');

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
    });
});
